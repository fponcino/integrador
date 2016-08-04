@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panelHeader panel-heading text-center">BUSCAR VENDEDOR</div>
                <div class="panelBody panel-body">
					<form class="form-horizontal row" role="form" method="POST" action="{{ url('/buscarVendedores') }}">
    					{{ csrf_field() }}

				 		<div class="col-md-6 col-md-offset-1">
				        	<input id="search" type="text" class="form-control" name="search" placeholder="Ingrese el nombre del vendedor">
						</div>
				    	<div class="form-group">
						   	<div class="col-md-4 col-md-offset-1">
						           <button type="submit" class="btn btn-primary">
						      	     <i class="fa fa-btn fa-user"></i> BUSCAR</button>
						    </div>
					   </div>
				    </form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('people')
	@if (isset($people))
		<ul>
			@foreach($people as $pe)
				<li>{{$pe->name}}</li>
			@endforeach
		</ul>
	@endif
@endsection
