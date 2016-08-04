@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panelHeader panel-heading text-center">REGISTRAR PRODUCTO</div>
                <div class="panelBody panel-body">
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/cargarProducto') }}">
                        {{ csrf_field() }}

                        <div class="form-group row {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="productLabel col-md-4 col-form-label">NOMBRE</label>

                            <div class="col-sm-8">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="productLabel col-md-4 col-form-label">PRECIO</label>

                            <div class="col-sm-8">
                                <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="productLabel col-md-4 col-form-label">MARCA</label>

                            <div class="col-sm-8">
                                <input id="brand" type="text" class="form-control" name="brand" value="{{ old('brand') }}">

                                @if ($errors->has('brand'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="productLabel col-md-4 col-form-label">CATEGORIA</label>

                            <div class="col-sm-8">
                                <input id="category" type="category" class="form-control" name="category" value="{{ old('category') }}">

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row {{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="productLabel col-md-4 col-form-label">DESCRIPCION</label>

                            <div class="col-sm-8">
                            	<textarea id="description" class="form-control" name="description" value="{{ old('description') }}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('img') ? ' has-error' : '' }}">
                            <label for="img" class="productLabel col-md-4 col-form-label">IMAGEN</label>

                            <div class="col-sm-8">
                                <input id="img" type="file" class="btn btn-link" name="img" value="{{ old('img') }}">

                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="registerButton btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> CREAR PRODUCTO
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
