@extends('layouts.single')

@section('content')
<section class="page-tittle page-tittle-md bg dark-overlay" style="background-image: url('{{asset('images/bg-18.jpg')}}')">
            <div class="container">                         
                <div class="page-tittle-head display-block text-center">
                    <h2>Product page</h2>
                </div>
            </div>
        </section>
        <section class="section-1">
			<div class="container">
				<div class="row">

  <h2 class="section-title text-center">Add product</h2>
  <p class="lead main text-center"></p>
    <div class="col-md-8 col-md-push-2 text-center">
      @if (isset($product))
        <form class="form-horizontal" action="{{route('store.update', $product->id)}}" method="post">

      @else
        <div id="formMessage"></div>
        <form id="addProductForm" class="form-horizontal" action="{{route('store.add')}}" method="post">
      @endif
        <div class="form-group">
          <label class="control-label" for="title">Title:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="summernote"  placeholder="Product title" name="title" value="{{ $product->title }}">
            @else
              <input type="text" class="form-control" id="title" placeholder="Product title" name="title">
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="description">Description:</label>
          <div>
            @if (isset($product))
              <textarea class="form-control" id="description" placeholder="Product description" name="description" rows="8" cols="80" style="resize: vertical;">{{ $product->description }}</textarea>
            @else
              <textarea class="form-control" id="description" placeholder="Product description" name="description" rows="8" cols="80" style="resize: vertical;"></textarea>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="quantity">Quantity:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="quantity" placeholder="Product quantity" name="quantity" value="{{ $product->quantity }}">
            @else
              <input type="text" class="form-control" id="quantity" placeholder="Product quantity" name="quantity">
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="price">Price:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="price" placeholder="Product price" name="price" value="{{ $product->price }}">
            @else
              <input type="text" class="form-control" id="price" placeholder="Product price" name="price">
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="category_id">Category ID:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="category_id" placeholder="Product category ID" name="category_id" value="{{ $product->category_id }}">
            @else
              <input type="text" class="form-control" id="category_id" placeholder="Product category ID" name="category_id">
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="manufacturer_id">Manufacturer ID:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="manufacturer_id" placeholder="Product manufacturer ID" name="manufacturer_id" value="{{ $product->manufacturer_id }}">
            @else
              <input type="text" class="form-control" id="manufacturer_id" placeholder="Product manufacturer ID" name="manufacturer_id">
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="control-label" for="img_url">Image URL:</label>
          <div>
            @if (isset($product))
              <input type="text" class="form-control" id="img_url" placeholder="Product image URL" name="img_url" value="{{ $product->img_url }}">
            @else
              <input type="text" class="form-control" id="img_url" placeholder="Product image URL" name="img_url">
            @endif
          </div>
        </div>

        <div class="form-group">
          <div>
            <button type="submit" class="btn btn-md btn-dark">Submit</button>
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- OR --}}
            {{ csrf_field() }}
          </div>
        </div>
      </form>
    </div>


</div>
			</div>
		</section>

@endsection