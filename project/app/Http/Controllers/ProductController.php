<?php

namespace App\Http\Controllers;
use App\Models\Product;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function sort(string $page = 'name'): View
    {
            if ($page!='name' && $page!='price') {
                $page = 'id';
            }
            $plantsByPrice = Product::orderBy($page, 'asc')->get();
            return view('product-list', ['plants' => $plantsByPrice]);
    }
    public function showProduct(int $id): View
    {
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product]);
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        $product->delete();
        return redirect()->route('backofficeMain')->with('success', 'Product has been deleted');
    }

    public function store(Request $request){
        $request->validate([
            'id',
            'name' => 'required',
            'description',
            'price' => 'required',
            'imageUrl',
            'discount',
            'category',
            'stock' => 'required',
            'weight',
            'height',
            'rarity'
        ]);
        Product::create(request()->all());
        return redirect()->route('backofficeMain')->with('success', 'Product has been added');
    }
    public function create(){
        return view('create');
    }
}
