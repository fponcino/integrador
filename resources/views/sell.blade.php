@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CARGAR PRODUCTO</div>
                <div class="panel-body">
					<div>
				    	<div class="form-group">
						   	<div class="col-md-4 col-md-offset-0">
						           <button type="submit" class="btn btn-succes">
						      	     <i class="fa fa-btn fa-user"></i><a href="{{ url('/cargarProducto') }}">PUBLICAR UN PRODUCTO</a></button>
						    </div>
					   </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
 @endsection
