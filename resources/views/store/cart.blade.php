@extends('store.template')

{{--sobreescribimos la sección--}}
@section('content')
    <div class="container text-center">
        <div class="card-header">
            <h1>
                <i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
        </div>

        <div class="table-cart">
            @if(count($cart))

            <p>
                <a href="{{ route('cart-trash') }}" class="btn btn-danger">
                    Vaciar carrito <i class="fa fa-trash"></i>
                </a>
            </p>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <td>Imagen</td>
                        <td>Producto</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Subtotal</td>
                        <td>Quitar</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $item)
                        <tr>
                            <td><img src="{{ $item->image }}" alt="{{ $item->slug }}"></td>
                            <td>{{ $item->name  }}</td>
                            <td>{{ number_format($item->price,2) }}</td>
                            <td>
                                <input type="number" min="1" max="100" value="{{ $item->quantity }}" id="product_{{ $item->id }}">
                                <a href="#" class="btn btn-warning btn-update-item" data-href="{{ route('cart-update', $item->slug) }}"
                                   data-id="{{ $item->id }}">
                                    <i class="fa fa-refresh"></i>
                                </a>
                            </td>
                            <td>{{ number_format($item->price * $item->quantity,2) }}</td>
                            <td>
                                <a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                <h3><span class="btn btn-success">
                        Total: ${{ number_format($total,2) }}
                    </span>
                </h3>
            </div>
            @else
                <h3><span class="btn btn-warning">No hay productos en el carrito T_T</span></h3>
            @endif
            <hr>
            <p>
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="fa fa-chevron-circle-left"></i>Seguir comprando
                </a>
                <a href="{{ route('order-detail') }}" class="btn btn-primary">
                   Continuar <i class="fa fa-chevron-circle-right"></i>
                </a>
            </p>
        </div>

    </div>
@stop