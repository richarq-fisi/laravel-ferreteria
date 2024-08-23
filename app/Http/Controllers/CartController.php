<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function __construct()
    {
        //en caso de que no exista la variable de sesion cart la crea como array
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    // show cart
    public function show()
    {
        //guardamos todo lo que contenga la variable de sesión del carro
        $cart = \Session::get('cart');
        $total = $this->total();
        //y retornamos a la vista para usar esos datos en el foreach
        return view('store.cart', compact('cart', 'total'));
    }
    // Add item
    public function add(Product $product)
    {
        // llamamos nuestra sesion cart de tipo array y la guardamos en la var $cart
        $cart = \Session::get('cart');
        // iniciamos el producto en 1
        $product->quantity = 1;
        // guardamos el producto dentro de la variable de sesion cart la cual determinara su indice por el slug
        $cart[$product->slug] = $product;
        // actualizamos la variable con los nuevos productos
        \Session::put('cart', $cart);
        //redirecciono a mostrar productos del carro
        return redirect()->route('cart-show');
    }
    // Delete item
    public function delete(Product $product)
    {
        // obtenemos todos los datos datos de la variable de sesion
        $cart = \Session::get('cart');
        // eliminamos el producto usando su indice slug(url amigable)
        unset($cart[$product->slug]);
        // actualizamos la variable de sesión
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Update item
    public function update(Product $product, $quantity)
    {
        //busco en mi variable de sesión el producto y actualizo su cantidad
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Trash cart (vaciar carro)
    public function trash()
    {
        //eliminamos la variable de sesion
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }
    // Total a pagar
    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach ($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }

    // Detalle del pedido cuando se de click en continuar en car/show (carrito de compras)
    public function orderDetail()
    {
        if(count(\Session::get('cart')) <= 0)
            return redirect()->route('home');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }
}
