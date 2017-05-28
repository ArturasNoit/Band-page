@extends('layouts.single')

@section('content')
<section id="hero">
            <div class="fs-hero hero-img" style="background-image:url({{ asset('images/bg-11.jpg')}})">
                <div class="hero-caption text-white center-left">
                    <h3 class="font-weight-light">Adventure Mind</h3>
                    <h1 class="ls-2">Start Your Journey</h1>
                    <p class="mrg-top-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. printer took a galley of type and scrambled it to make a type .</p>
                    <div class="mrg-top-20">
                        <a href class="btn btn-white-inverse btn-md">Read More</a>
                    </div>

                </div>
            </div>
        </section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
