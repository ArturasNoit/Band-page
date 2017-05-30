@extends('layouts.single')

@section('content')
<section id="hero">
            <div class="fs-hero hero-img" style="background-image:url({{ asset('images/bg-11.jpg')}})">
                <div class="hero-caption text-white center-left">
                    <h3 class="font-weight-light">Adventure Mind</h3>
                    <h1 class="ls-2">Register page</h1>
                    <p class="mrg-top-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class="mrg-top-20">
                        <a href class="btn btn-white-inverse btn-md">Read More</a>
                    </div>

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
                                            <img class="img-responsive mrg-btm-20" src="assets/images/logo/logo-1.png" alt="">
                                            <p class="text-white">frfdsghbgdghbd:</p>
                                            <ul class="social-btn mrg-top-30">
                                                <li><a class="btn icon-btn-md btn-white-inverse hover-facebook border-radius-round" href="javascript:void(0);"><i class="ei ei-facebook"></i></a></li>
                                                <li><a class="btn icon-btn-md btn-white-inverse hover-twitter border-radius-round" href="javascript:void(0);"><i class="ei ei-twitter"></i></a></li>
                                                <li><a class="btn icon-btn-md btn-white-inverse hover-google-plus border-radius-round" href="javascript:void(0);"><i class="ei ei-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- content -->
                                    </div><!-- /background-holder -->
                                </div><!-- /image-container -->
                            </div>
                            </section>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
