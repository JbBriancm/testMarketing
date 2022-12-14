@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-1">Agregar nuevo producto</h3>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="form-group">
                    <label for="product_name">Nombre producto</label>
                    <input type="text" class="form-control" name="product_name" />
                </div>

                <div class="form-group">
                    <label for="sku">Sku</label>
                    <input type="text" class="form-control" name="sku" />
                </div>

                <div class="form-group">
                    <label for="amount">Cantidad producto</label>
                    <input type="text" class="form-control" name="amount" />
                </div>

                <div class="form-group">
                    <label for="price">Precio producto</label>
                    <input type="text" class="form-control" name="price" />
                </div>

                <div class="form-group">
                    <label for="state">
                        <input type="radio" name="state" value="1">Activar producto</label>
                </div>

                <div class="form-group">
                    <label for="state">
                        <input type="radio" name="state" value="0">Desactivar producto</label>
                </div>


                <button type="submit" class="btn btn-primary">Agregar producto</button>
            </form>
        </div>
    </div>
</div>
@endsection