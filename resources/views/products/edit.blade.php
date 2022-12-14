@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editing Stock</h1>

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
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="product_name">Nombre producto</label>
                <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" />
            </div>

            <div class="form-group">
                <label for="sku">Sku</label>
                <input type="text" class="form-control" name="sku" value="{{ $product->sku }}" />
            </div>

            <div class="form-group">
                <label for="amount">Cantidad producto</label>
                <input type="text" class="form-control" name="amount" value="{{ $product->amount }}" />
            </div>

            <div class="form-group">
                <label for="price">Precio producto</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}" />
            </div>

            <div class="form-group">
                <input type="radio" name="state" value="1"
                    {{ ($product->state=="1")? "checked" : "" }}>Producto Activado</label>
            </div>

            <div class="form-group">
                <input type="radio" name="state" value="0"
                    {{ ($product->state=="0")? "checked" : "" }}>Producto Inactivo</label>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar producto</button>
        </form>
    </div>
</div>
@endsection