@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Productos</h1>
        <div>
            <a href="{{ route('products.create')}}" class="btn btn-primary mb-3">Agregar producto</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nombre producto</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Sku</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}} </td>
                    <td>{{$product->amount}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->sku}} </td>
                    <td>{{$product->state == 1 ? 'activo' : 'inactivo'}}</td>
                    <td>
                        <a href="{{ route('products.show',$product->id)}}" class="btn btn-primary">Ver Producto</a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection