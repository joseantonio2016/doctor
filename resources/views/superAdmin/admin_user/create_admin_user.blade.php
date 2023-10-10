@extends('layout.mainlayout_admin',['activePage' => 'admin_users'])

@section('title',__('Add Admin User'))
@section('content')
    <section class="section">
        @include('layout.breadcrumb',[
            'title' => __('Add Admin Users'),
            'url' => url('admin_users'),
            'urlTitle' => __('Admin Users'),
        ])
        {{-- @if ($errors->any())
            {{ dd($errors->all()) }}
        @endif --}}
        <div class="section-body">
            <div class="card">
                <form action="{{ url('admin_users') }}" method="post" enctype="multipart/form-data" class="myform">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">{{__('Name')}}</label>
                                    <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number" class="col-form-label"> {{__('Phone number')}}</label>
                                <div class="d-flex @error('phone') is-invalid @enderror">
                                    <select name="phone_code" class="phone_code_select2" value="{{ old('phone_code') }}">
                                        @foreach ($countries as $country)
                                            <option value="+{{$country->phonecode}}" {{(old('phone_code') == $country->phonecode) ? 'selected':''}}>+{{ $country->phonecode }}</option>
                                        @endforeach
                                    </select>
                                    <input type="number" min="1" name="phone" class="form-control" value="{{old('phone')}}" >
                                </div>
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">{{__('Email')}}</label>
                                    <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">{{__('Password')}}</label>
                                    <input type="password" name="password" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">{{__('Roles')}}</label>
                                    <select name="roles[]" multiple class="form-control select2" required>
                                        @foreach ($roles as $role)
                                            <option {{ (collect(old('roles'))->contains($role->name)) ? 'selected':'' }} value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="col-form-label">{{__('status')}}</label>
                                    <label class="cursor-pointer">
                                        <input type="checkbox" id="status" value="1" class="custom-switch-input" {{(old('status') == "1")? 'checked':''}} name="status">
                                        <span class="custom-switch-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
