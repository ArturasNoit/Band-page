@extends('layouts.single')

@section('content')
<section class="page-tittle page-tittle-md bg dark-overlay" style="background-image: url('{{asset('images/bg-18.jpg')}}')">
            <div class="container">                         
                <div class="page-tittle-head display-block text-center">
                    <h2>Product page</h2>
                </div>
            </div>
</section>
<section>
                    <div class="pdd-horizon-40 pdd-vertical-40">
                            <h3>Tools</h3>
                            <div class="mrg-top-30">
                                <ul class="font-size-18">
                                    <li class="mrg-btm-20"><a class="text-gray" href="{{route('store.create')}}">Add new product</a></li>
                                    <li class="mrg-btm-20"><a class="text-gray" href="#">Add new category</a></li>
                                    <li class="mrg-btm-20"><a class="text-gray" href="#">Add new manufacturer</a></li>
                                    <li class="mrg-btm-20"><a class="text-gray" href="#">Orders list</a></li>
                                    <li class="mrg-btm-20"><a class="text-gray" href="#">Users list</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
</section>

@endsection