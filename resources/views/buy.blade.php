@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscar Productos</div>
                <div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/buscarProductos') }}">
    					{{ csrf_field() }}

				 		<div class="col-md-6">
				        	<input id="search" type="text" class="form-control" name="search" placeholder="Ingrese nombre del producto">
						</div>
				    	<div class="form-group">
						   	<div class="col-md-4 col-md-offset-2">
						           <button type="submit" class="btn btn-primary">
						      	     <i class="fa fa-btn fa-user"></i>Buscar</button>
						    </div>
					   </div>
				    </form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

<<<<<<< HEAD

@section('products')
=======
{{-- <!-- @section('products')
>>>>>>> carrito
	@if(isset($products))
		<ul>
		@foreach($products as $product)
			<li>{{$product->title}}</li>
		@endforeach
		</ul>
	@endif
@endsection --> --}}

@section('products')

    @foreach($products->chunk(3) as $productChunk)

      <div class="row">
        @foreach($productChunk as $product)

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="{{ $product->img }}" alt="...">
            <div class="caption">
              <h2>{{ $product->title }}</h2>
              <h3>{{ $product->brand }}</h3>

              <p class="description">{{ $product->description }}</p>
              <div class="clearfix">
              <p class="pull-left price">${{ $product->price }}</p>
              <p> <a href="{{ route('product.agregarCarrito', ['id' => $product->id]) }}" class="btn btn-success pull-right price" role="button">Comprar</a></p>
                </div>
            </div>
          </div>
        </div>
      </div>

    @endforeach

@endforeach




@endsection
