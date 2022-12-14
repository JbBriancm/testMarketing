@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Detalle producto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif

        <p>
            <strong>Nombre producto:</strong> {{ $product->product_name }}<br>
            <strong>Sku:</strong> {{ $product->sku }}<br>
            <strong>Cantidad producto:</strong> {{ $product->amount }}<br>
            <strong>Precio producto:</strong> {{ $product->price }}<br>
            <strong>Producto:</strong> {{ $product->state == 1 ? 'Activo' : 'Inactivo' }}<br>
        </p>

    </div>
</div>
@endsection