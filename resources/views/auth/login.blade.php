@extends('layouts.app')

@section('content')

<div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="{{ asset('JObTask/images/cm-logo.png') }}" alt="">
                                    <p>Workwise, is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
                                  
                                </div>


                                <img src="{{ asset('JObTask/images/cm-main-img.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>
                                </ul>                 

                                <div class="sign_in_sec current" id="tab-1">
                                    <h3>Sign in</h3>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="email" type="email" placeholder="Enter Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    <i class="la la-user">   </i>                                                   
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    <i class="la la-lock"></i>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>{{ __('Remember Me') }}</small>
                                                    </div>
                                                    <a href="{{ route('password.request') }}" title="">Forgot Password?</a>
                                              
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="dff-tab current" id="tab-3">
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input id="first_name" name="first_name" placeholder="First Name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input id="last_name" name="last_name" placeholder="last Name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input id="email" name="email" type="email" placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email">
                                                        <i class="la la-at"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <select name="country_id" id="register_country" required>
                                                            <option value="">Select your country</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{ $country->id }}"> {{ $country->name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input id="password" name="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror"  required autocomplete="new-password">                                                        
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="sn-field">
                                                        <input id="password-confirm" name="password_confirmation" placeholder="Repeat Password" type="password" class="form-control"  required autocomplete="new-password">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <div class="checky-sec st2">
                                                        <div class="fgt-sec">
                                                            <input type="checkbox" name="cc" id="c2">
                                                            <label for="c2">
                                                                <span></span>
                                                            </label>
                                                            <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Get Started</button>
                                                </div>
                                            </div>


                                            
                                        </form>
                                     
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
