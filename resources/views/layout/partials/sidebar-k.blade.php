<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            @php
            $settings = App\Models\Setting::first();
            @endphp
            @if (auth()->user()->hasRole('super admin'))
            <a href="{{ url('/home') }}">
                <img src="{{url('/images/upload_empty/logo_kullay.webp')}}" width="150" alt="Kullay" />
            </a>
            @elseif(auth()->user()->hasRole('doctor'))
            <a href="{{ url('/doctor_home') }}">
                <img src="{{url('/images/upload_empty/logo_kullay.webp')}}" width="150" alt="Kullay" />
            </a>
            @endif
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            @if (auth()->user()->hasRole('super admin'))
            <a href="{{ url('/home') }}">
                <img src="{{$settings->favicon}}" width="50" height="50" alt="Logo">
            </a>
            @elseif(auth()->user()->hasRole('doctor'))
            <a href="{{ url('/doctor_home') }}">
                <img src="{{$settings->favicon}}" width="50" height="50" alt="Logo">
            </a>
            @elseif(auth()->user()->hasRole('pharmacy'))
            <a href="{{ url('/pharmacy_home') }}">
                <img src="{{$settings->favicon}}" width="50" height="50" alt="Logo">
            </a>
            @endif
        </div>
        <ul class="sidebar-menu">
            @can('superadmin_dashboard')
            <li class="{{ $activePage == 'home' ? 'active' : '' }}">
                <a href="{{ url('home') }}">
                    <i class="fas fa-home"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            @endcan

            {{-- Doctor --}}
            @if (auth()->user()->hasRole('doctor'))
            @can('doctor_home')
            <li class="{{ $activePage == 'home' ? 'active' : '' }}">
                <a href="{{ url('doctor_home') }}">
                    <i class="fas fe fe-home"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            @endcan
            @endif


            @if (auth()->user()->hasRole('laboratory'))
            @can('laboratory_home')
            <li class="{{ $activePage == 'pathologist' ? 'active' : '' }}">
                <a href="{{ url('pathologist_home') }}">
                    <i class="fas fe fe-home"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            @endcan
            @endif

            @can('appointment_access')
            <li class="{{ $activePage == 'appointment' ? 'active' : '' }}">
                <a href="{{ url('appointment') }}">
                    <i class="far fa-calendar-check"></i>
                    <span>{{__('appointment')}}</span>
                </a>
            </li>
            @endcan

            @can('treatment_access')
            <li class="{{ $activePage == 'treatments' ? 'active' : '' }}">
                <a href="{{ url('treatments') }}">
                    <i class="fas fa-stethoscope"></i>
                    <span>Especialidad</span>
                </a>
            </li>
            @endcan

            @can('expertise_access')
            <li class="{{ $activePage == 'expertise' ? 'active' : '' }}">
                <a href="{{ url('expertise') }}">
                    <i class="fas fa-angle-right"></i>
                    <span>{{__('expertise')}}</span>
                </a>
            </li>
            @endcan

            @can('hospital_access')
            <li class="{{ $activePage == 'hospital' ? 'active' : '' }}">
                <a href="{{ url('hospital') }}">
                    <i class="far fa-hospital"></i>
                    <span>{{__('hospital')}}</span>
                </a>
            </li>
            @endcan

            @can('doctor_access')
            <li class="{{ $activePage == 'doctor' ? 'active' : '' }}">
                <a href="{{ url('doctor') }}">
                    <i class="fas fa-user-md"></i>
                    <span>{{__('doctor')}}</span>
                </a>
            </li>
            @endcan

            @if (auth()->user()->hasRole('laboratory'))
            @can('lab_commission')
            <li class="{{ $activePage == 'commission' ? 'active' : '' }}">
                <a href="{{ url('lab_commission') }}">
                    <i class="fas fa-percentage"></i>
                    <span>{{__('Lab Commission')}}</span>
                </a>
            </li>
            @endcan

            @can('lab_timeslot')
            <li class="{{ $activePage == 'schedule' ? 'active' : '' }}">
                <a href="{{ url('lab_timeslot') }}">
                    <i class="fas fa-hourglass-half"></i>
                    <span>{{__('Lab Timeslot')}}</span>
                </a>
            </li>
            @endcan
            @endif

            @if(auth()->user()->can('admin_user_access'))
            {{-- @canAny(['patient_access,admin_user_access']) --}}
            <li class="{{ $activePage == 'patients' ? 'active' : '' }} || {{ $activePage == 'admin_users' ? 'active' : '' }}">
                <a href="javascript:void(0)" class="nav-link has-dropdown">
                    <i class="fas fa-user-injured"></i>
                    <span>{{__('Users')}}</span>
                </a>
                <ul class="dropdown-menu">
                    @can('admin_user_access')
                    <li class="{{ $activePage == 'admin_users' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin_users') }}">{{__('Admin users')}}</a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endif
            {{-- @endcanAny --}}

            @can('blog_access')
            <li class="{{ $activePage == 'blog' ? 'active' : '' }}">
                <a href="{{ url('blog') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>{{__('blog')}}</span>
                </a>
            </li>
            @endcan

            @if (Gate::check('doctor_review'))
            @if (auth()->user()->hasRole('doctor'))
            <li class="{{ $activePage == 'review' ? 'active' : '' }}">
                <a href="{{ url('doctor_review') }}">
                    <i class="fas fa-star"></i>
                    <span>{{__('Reviews')}}</span>
                </a>
            </li>
            @endif
            @endif

            @can('offer_access')
            <li class="{{ $activePage == 'offer' ? 'active' : '' }}">
                <a href="{{ url('offer') }}">
                    <i class="fas fa-percentage"></i>
                    <span>{{__('Offers')}}</span>
                </a>
            </li>
            @endcan

            @can('email_template_access')
            <li class="{{ $activePage == 'template' ? 'active' : '' }}">
                <a href="{{ url('notification_template') }}">
                    <i class="far fa-envelope"></i>
                    <span>{{__('Notification template')}}</span>
                </a>
            </li>
            @endcan

            @can('role_access')
            <li class="{{ $activePage == 'role' ? 'active' : '' }}">
                <a href="{{ url('role') }}">
                    <i class="fas fa-user-tag"></i>
                    <span>{{__('Role and permissions')}}</span>
                </a>
            </li>
            @endcan

            @can('language_access')
            <li class="{{ $activePage == 'language' ? 'active' : '' }}">
                <a href="{{ url('language') }}">
                    <i class="fas fa-language"></i>
                    <span>{{__('Language')}}</span>
                </a>
            </li>
            @endcan

            @can('report_access')
            <li class="{{ $activePage == 'user_report' ? 'active' : '' }} || {{ $activePage == 'doctor_report' ? 'active' : '' }}">
                <a href="javascript:void(0)" class="nav-link has-dropdown">
                    <i class="fas fa-file-alt"></i>
                    <span>{{__('Reports')}}</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ $activePage == 'user_report' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('user_report') }}">{{__('User Report')}}</a>
                    </li>
                    <li class="{{ $activePage == 'doctor_report' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('doctor_report') }}">{{__('Doctor Report')}}</a>
                    </li>
                </ul>
            </li>
            @endcan

            @can('superadmin_setting')
            <li class="{{ $activePage == 'setting' ? 'active' : '' }}">
                <a href="{{ url('setting') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{__('settings')}}</span>
                </a>
            </li>
            @endcan

            {{-- Doctor --}}
            @if (auth()->user()->hasRole('doctor'))
            @can('doctor_schedule')
            <li class="{{ $activePage == 'schedule' ? 'active' : '' }}">
                <a href="{{ url('schedule') }}">
                    <i class="fas fa-hourglass-start"></i>
                    <span>{{__('Schedule Timings')}}</span>
                </a>
            </li>
            @endcan
            @endif
            @if (auth()->user()->hasRole('doctor'))
            @can('zoom_setting')
            <li class="{{ $activePage == 'setting' ? 'active' : '' }}">
                <a href="{{ url('list') }}">
                    <i class="fas fa-cog"></i>
                    <span>{{__('Zoom Setting')}}</span>
                </a>
            </li>
            @endcan
            @endif

            {{-- Pharmacy --}}
            @if (auth()->user()->hasRole('pharmacy'))
            @can('pharmacy_dashboard')
            <li class="{{ $activePage == 'home' ? 'active' : '' }}">
                <a href="{{ url('pharmacy_home') }}">
                    <i class="fas fe fe-home"></i>
                    <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            @endcan

            @can('medicine_access')
            <li class="{{ $activePage == 'medicine' ? 'active' : '' }}">
                <a href="{{ url('medicines') }}">
                    <i class="fas fa-capsules"></i>
                    <span>{{__('Medicine')}}</span>
                </a>
            </li>
            @endcan

            @can('pharmacy_purchase_medicine')
            <li class="{{ $activePage == 'purchase' ? 'active' : '' }}">
                <a href="{{ url('purchased_medicines') }}">
                    <i class="far fa-money-bill-alt"></i>
                    <span>{{__('Purchased Medicines')}}</span>
                </a>
            </li>
            @endcan

            @can('pharmacy_schedule')
            <li class="{{ $activePage == 'pharmacy_schedule' ? 'active' : '' }}">
                <a href="{{ url('pharmacy_schedule') }}">
                    <i class="fas fa-hourglass-start"></i>
                    <span>{{__('Schedule Timings')}}</span>
                </a>
            </li>
            @endcan

            @can('pharmacy_commission_access')
            <li class="{{ $activePage == 'commission' ? 'active' : '' }}">
                <a href="{{ url('pharmacyCommission') }}">
                    <i class="far fa-money-bill-alt"></i>
                    <span>{{__('Commission Details')}}</span>
                </a>
            </li>
            @endcan
            @endif
        </ul>
    </aside>
</div>
