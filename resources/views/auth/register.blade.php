@extends('layouts.single')

@section('content')
       <section class="page-tittle page-tittle-md bg dark-overlay" style="background-image: url('{{asset('images/bg-18.jpg')}}')">
            <div class="container">                         
                <div class="page-tittle-head display-block text-center">
                    <h2>Join us</h2>
                </div>
            </div>
        </section>
                            <section>
                            <div class="content-block-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-7 col-md-offset-5">
                                            <div class="text-content pdd-horizon-60 pdd-vertical-60">
                                                <h3 class="mrg-btm-30 mrg-top-15">Sign Up</h3>
                                                <form role="form" method="POST" action="{{ route('register') }}">
                                                {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-md-6 pdd-horizon-5">
                                                            <div class="form-wrapper {{ $errors->has('name') ? ' has-error' : '' }}">
                                                                <label for="name"><b>First Name</b></label>
                                                                <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="First Name">
                                                                 @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pdd-horizon-5">
                                                            <div class="form-wrapper {{ $errors->has('lastName') ? ' has-error' : '' }}" >
                                                                <label for="lastName"><b>Last Name</b></label>
                                                                <input id="lastName" name="lastName" value="{{ old('lastName') }}" type="text" class="form-control" placeholder="Last Name">
                                                                @if ($errors->has('lastName'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                                    </span>
                                                                @endif  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 pdd-horizon-5">
                                                            <div class="form-wrapper  {{ $errors->has('email') ? ' has-error' : '' }}">
                                                                <label for="email"><b>Email</b></label>
                                                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif  
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 pdd-horizon-5">
                                                            <div class="form-wrapper {{ $errors->has('password') ? ' has-error' : '' }}">
                                                                <label for="password"><b>Password</b></label>
                                                                <input id="password" name="password" type="password" class="form-control" placeholder="password">
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                    </span>
                                                                @endif  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 pdd-horizon-5">
                                                            <div class="form-wrapper">
                                                                <label for="password-confirm"><b>Retype Password</b></label>
                                                                <input id="password-confirm" name="password_confirmation" type="password" class="form-control"  placeholder="Retype Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mrg-top-10">
                                                        <div class="col-md-12 pdd-horizon-5">
                                                            <div class="form-wrapper">  
                                                                <button class="btn btn-md btn-dark pull-right" type="submit">Sign Up</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- /content -->
                                        </div>
                                    </div>
                                </div>  
                                <div class="image-container col-md-5 hidden-xs hidden-sm">
                                    <div class="background-holder theme-overlay has-content" style="background-image:url(assets/images/bg-18.jpg)">
                                        <div class="content pdd-horizon-50">
                                            <img class="img-responsive mrg-btm-20" src="{{asset('images/logo/logo-1.png')}}" alt="">
                                            <h3 class="text-white">Join us with social media account</h3>
                                            <ul class="social-btn mrg-top-30">
                                                <li><a class="btn icon-btn-md btn-white-inverse hover-facebook border-radius-round" href="{{route('fb.auth', 'facebook')}}"><i class="ei ei-facebook"></i></a></li>
                                                <li><a class="btn icon-btn-md btn-white-inverse hover-google-plus border-radius-round" href="javascript:void(0);"><i class="ei ei-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- content -->
                                    </div><!-- /background-holder -->
                                </div><!-- /image-container -->
                            </div>
                            </section>
@endsection
