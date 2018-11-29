@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página Principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenido {{ Auth::user()->name }} </h1>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <a href="catalogo/docs/terminos.pdf" target="_blank" type="button">Terminos y Condiciones</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
