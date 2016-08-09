<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

use App\Cart;

use Validator;

use Session;


class ProductController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function createProduct()
    {
    	return view('createProduct');
    }

    public function storeProduct(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'brand' => 'required',
            'category' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);

    	$product = new Product;

    	$product->title = $request->title;
    	$product->price = $request->price;
    	$product->brand = $request->brand;
    	$product->category = $request->category;
    	$product->description = $request->description;
    	$product->img = $request->img;

    	$product->save();

    	return view('createProduct');
    }

    public function showSell()
    {
        return view('sell');
    }

    public function showBuy()
    {
      $products = Product::all();
        return view('buy', ['products' => $products]);
    }

    public function showProducts()
    {
        return view('products');
    }

    public function searchProducts(Request $request)
    {
       $parameter = $request->search;
       $products = (Product::where('title', 'LIKE', "%$parameter%")->get());
       return view('buy', ['products' => $products]);
    }

    public function carro() {
      {
        if (!Session::has('cart')) {
            return view('shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
      }

    public function agregarCarrito(Request $request, $id) {

      $product = Product::find($id);
      $carritoViejo = Session::has('cart') ? Session::get('cart' ) : null;
      $cart = new Cart($carritoViejo);
      $cart->add($product, $product->id);

      $request->session()->put('cart', $cart);
      // dd($request->session()->get('cart'));
      return redirect()->route('product.showBuy');

    }

}
