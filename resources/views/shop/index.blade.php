@extends('layouts.master')

@section('title')
	Webshop - Ducare
@endsection

@section('content')

	@foreach($products->chunk(3) as $productChunck)
		<div class="row">
			@foreach($productChunck as $product)
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="{{ $product->imagePath }}" alt="...">
			      <div class="caption">
			        <h3>{{ $product->title }}</h3>
			        <p class="description">{{ $product->description }}</p>
			        <div class="clearfix">
			        	<div class="pull-left price">${{ $product->price }}</div>
			        	<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn pull-right btn-success" role="button">Add to cart</a>
			        </div>
			      </div>
			    </div>
			  </div>
		  @endforeach  
	</div>
	@endforeach

	
@endsection