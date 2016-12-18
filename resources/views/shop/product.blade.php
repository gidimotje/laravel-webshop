@extends('layouts.master')

@section('title')
	Webshop - Ducare
@endsection

@section('content')

	<div class="row">
		<div class="col-md-4 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{ $product->title }}</h3>
				</div>
				<div class="panel-body">
					<img src="{{ $product->imagePath }}">
					<p class="description">{{ $product->description }}</p>
				</div>
			</div>
		</div>

		<div class="col-md-4 pull-right">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><b>Plaats bestelling</b></h3>
				</div>
				<div class="panel-body">
					<form action="{{ route('product.addToCart', ['id' => $product->id]) }}" id="cakeform" method="POST">

						<div class="radio">
							<label>
								<input type="radio" id="option1" name="selectedcake" value="140" onclick="calculateTotal()">
								180 mm x 180 mm
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" id="option2" name="selectedcake" value="162" onclick="calculateTotal()">
								180 mm x 180 mm
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" id="option2" name="selectedcake" value="324" onclick="calculateTotal()">
								180 mm x 180 mm
							</label>
						</div>

						<div class="select">
							<select id="filling" class="form-control" name='filling' onchange="calculateTotal()">
								<option value="None">Kies een optie</option>
								<option value="Afbeelding">Afbeelding</option>
								<option value="Text">Text</option>
							</select>
						</div>

						<div class="select">
							<select id="materiaal" class="form-control" name='materiaal' onchange="calculateTotal()">

								<option value='MDF 3mm'>MDF 3mm</option>
								<option value='MDF 4mm'>MDF 4mm</option>
								<option value='MDF 6mm'>MDF 6mm</option>
								<option value='Mulitplex 3mm'>Mulitplex 3mm</option>						
								<option value='Mulitplex 4mm'>Mulitplex 4mm</option>
								<option value='Mulitplex 6mm'>Mulitplex 6mm</option>

							</select>
						</div>


						<div class="checkbox">
							<label>
								<input type="checkbox" id="noai" name='includecandles' onclick="calculateTotal()">
								Ik heb geen AI bestand
							</label>
						</div>

						<div id="totalPrice">&nbsp;</div>
						<input type="hidden" id="price" name="price" />


				       </form>
					<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn pull-right btn-success" role="button">Add to cart</a>
				</div>
			</div>
		</div>
	</div>

@endsection



