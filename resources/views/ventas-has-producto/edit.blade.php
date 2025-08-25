@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Ventas Has Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Ventas Has Producto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('ventas-has-productos.update', $ventasHasProducto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ventas-has-producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
