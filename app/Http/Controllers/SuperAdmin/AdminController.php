<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Mail\TestMail;
use App\Models\Language;
use App\Models\NotificationTemplate;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Exception;
use LicenseBoxExternalAPI;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function admin_login()
    {
        if(env('DB_DATABASE') == "")
            return view("first_page");
        else
            if (auth()->check())
            return redirect('home');
        return view('superAdmin.auth.login');
    }

    public function verify_admin(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6'
        ]);

        //return redirect('home');

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user()->load('roles');
            if ($user->hasRole('super admin') && $user->id == 1) {
                // $data = Setting::find(1);
                // $api = new LicenseBoxExternalAPI();
                // $res = $api->verify_license();
                // if ($res['status'] != true)
                // {
                //     $data->license_verify = 0;
                //     $data->save();
                // }
                // else
                // {
                //     $data->license_verify = 1;
                //     $data->save();
                // }
                return redirect('home');
            } else {
                if ($user->status == 1) {
                    return redirect('profile');
                } else {
                    Auth::logout();
                    return redirect()->back()->withErrors('Block By Admin. Please Contact support.');
                }
            }
        } else {
            return redirect()->back()->withErrors('Tu credencial does not match our record');
        }
    }

    public function installer()
    {
        return view('superAdmin.license.install');
    }

    public function admin_forgot_password()
    {
        $from = "super admin";
        return view('superAdmin.admin.forgot_password', compact('from'));
    }

    public function doctor_forgot_password()
    {
        $from = "doctor";
        return view('superAdmin.admin.forgot_password', compact('from'));
    }

    public function pharmacy_forgot_password()
    {
        $from = "pharmacy";
        return view('superAdmin.admin.forgot_password', compact('from'));
    }
    public function lab_forgot_password()
    {
        $from = "lab";
        return view('superAdmin.admin.forgot_password', compact('from'));
    }

    public function send_forgot_password(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $setting = Setting::first();
        if ($user) {
            $notification_template = NotificationTemplate::where('title', 'forgot password')->first();
            $password = rand(100000, 999999);
            $detail['user_name'] = $user->name;
            $detail['password'] = $password;
            $detail['app_name'] = $setting->business_name;
            $data = ["{{user_name}}", "{{password}}", "{{app_name}}"];
            $user->password = Hash::make($password);
            $user->save();
            $message1 = str_replace($data, $detail, $notification_template->mail_content);
            try {
                $config = array(
                    'driver'     => $setting->mail_mailer,
                    'host'       => $setting->mail_host,
                    'port'       => $setting->mail_port,
                    'from'       => array('address' => $setting->mail_from_address, 'name' => $setting->mail_from_name),
                    'encryption' => $setting->mail_encryption,
                    'username'   => $setting->mail_username,
                    'password'   => $setting->mail_password
                );
                Config::set('mail', $config);
                Mail::to($user->email)->send(new SendMail($message1, $notification_template->subject));
            } catch (\Throwable $th) {
                //throw $th;
            }
            return redirect()->back()->with('status', __('Password sent into your mail'));
        } else {
            return redirect()->back()->withErrors(__('User not found'));
        }
    }

    public function profile()
    {
        $user = auth()->user();
        return view('superAdmin.admin.admin', compact('user'));
    }

    public function update_profile(Request $request)
    {
        $request->validate(
            [
                'name' => 'bail|required',
                'image' => 'bail|max:1000'
            ],
            [
                'image.max' => 'The Image May Not Be Greater Than 1 MegaBytes.',
            ]
        );
        $user = auth()->user();
        $data = $request->all();
        if ($request->hasFile('image')) {
            (new CustomController)->deleteFile($user->image);
            $data['image'] = (new CustomController)->imageUpload($request->image);
        }
        $user->update($data);
        return redirect()->back()->withStatus(__('admin profile update successfully'));
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'old_password' => 'bail|required|min:6',
            'new_password' => 'bail|required|min:6',
            'confirm_new_password' => 'bail|required|min:6|same:new_password',
        ]);
        $data = $request->all();
        return $data;
        $id = auth()->user();
        if (Hash::check($data['old_password'], $id->password) == true) {
            $id->password = Hash::make($data['new_password']);
            $id->save();
            return redirect()->back()->withStatus(__('Password Changed Successfully.'));
        } else {
            return redirect()->back()->with('error', 'old password does not match');
        }
    }

    public function saveEnvData(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6',
        ]);
        $data = $request->all();
        $envdata['DB_HOST'] = $request->db_host;
        $envdata['DB_DATABASE'] = $request->db_name;
        $envdata['DB_USERNAME'] = $request->db_user;
        $envdata['DB_PASSWORD'] = $request->db_pass;
        $result = (new CustomController)->updateENV($envdata);
        if ($result) {
            // Artisan::call('config:clear');
            // Artisan::call('optimize:clear');
            // Artisan::call('cache:clear');
            return response()->json(['success' => true], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Don\'t have enough permission for .env file to be written. '], 200);
        }
    }

    public function saveAdminData(Request $request)
    {
        $request->validate([
            'email' => 'bail|required|email',
            'password' => 'bail|required|min:6',
        ]);
        User::first()->update(['email' => $request->email, 'password' => Hash::make($request->password)]);
        Setting::find(1)->update(['license_code' => $request->license_code, 'client_name' => $request->client_name, 'license_verify' => 1]);
        return response()->json(['data' => url('/login'), 'success' => true], 200);
    }

    public function changeLanguage($id)
    {
        $language = Language::find($id);
        App::setLocale($language->name);
        session()->put('locale', $language->name);
        $direction = $language->direction;
        session()->put('direction', $direction);
        return redirect()->back();
    }

    public function testMail(Request $request)
    {
        try {
            $setting = Setting::first();
            $subject = 'Test Mail From Admin Panel';
            $message = 'This is a test email sent from the admin panel to ensure the proper configuration';
            $config = array(
                'driver'     => $setting->mail_mailer,
                'host'       => $setting->mail_host,
                'port'       => $setting->mail_port,
                'from'       => array('address' => $setting->mail_from_address, 'name' => $setting->mail_from_name),
                'encryption' => $setting->mail_encryption,
                'username'   => $setting->mail_username,
                'password'   => $setting->mail_password
            );
            Config::set('mail', $config);
            Mail::to($request->to)->send(new TestMail($message, $subject, $setting->business_name));
            return response()->json(['success' => true, 'message' => 'Mail Sent Successfully!'], 200);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return response()->json(['success' => false, 'message' => $error]);
        }
    }
}
