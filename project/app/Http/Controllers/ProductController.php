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

    public function destroy($id)
    {
        $product = Product::find($id);
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

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->only([
            'name',
            'description',
            'price',
            'imageUrl',
            'discount',
            'category',
            'stock',
            'weight',
            'height',
            'rarity'
        ]));
        return redirect()->route('backofficeMain')->with('success', 'Product has been updated');
    }
    public function edit($id)
    {
        $plant = Product::find($id);
        return view('editProduct', compact('plant'));
    }

}
