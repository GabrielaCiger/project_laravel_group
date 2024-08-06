<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function showProduct(int $id): View
    {
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product]);
    }
    public function sort(string $page = 'name'): View
    {
            if ($page!='name' && $page!='price') {
                $page = 'id';
            }
            $plantsByPrice = Product::orderBy($page, 'asc')->get();
            return view('product-list', ['plants' => $plantsByPrice]);
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('backofficeMain')->with('success', 'Product has been deleted');
    }
    public function store(Request $request){
//        $data = $request->only([
//            'id',
//            'name',
//            'description',
//            'price',
//            'imageUrl',
//            'discount',
//            'category',
//            'stock',
//            'weight',
//            'height',
//            'rarity'
//        ]);
//        $data = [
//            'id' => $request->input('id'),
//            'name' => $request->input('name'),
//            'description' => $request->input('description'),
//            'price' => $request->input('price'),
//            'imageUrl' => $request->input('imageUrl'),
//            'discount' => $request->input('discount'),
//            'category_id' => $request->input('category_id'),
//            'stock' => $request->input('stock'),
//            'weight' => $request->input('weight'),
//            'height' => $request->input('height'),
//            'rarity' => $request->input('rarity')
//        ];
        $data = $request->validate([
            'id'=>'required|integer',
            'name'=>'required|string',
            'description'=>'nullable|string',
            'price'=>'required|float|min:0',
            'imageUrl'=>'required',
            'discount'=>'nullable|integer',
            'category_id'=>'required|integer',
            'stock'=>'required|integer|min:0',
            'weight'=>'nullable|integer',
            'height'=>'nullable|integer',
            'rarity'=>'nullable|integer'
        ]);
        Product::create($data);
        return redirect()->route('backofficeMain')->with('success', 'Product has been added');
    }
    public function create(){
        return view('create');
    }
    public function edit($id)
    {
        $plant = Product::find($id);
        return view('editProduct', compact('plant'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
//        $product->update($request->only([
//            'name',
//            'description',
//            'price',
//            'imageUrl',
//            'discount',
//            'category',
//            'stock',
//            'weight',
//            'height',
//            'rarity'
//        ]));
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'imageUrl' => $request->input('imageUrl'),
            'discount' => $request->input('discount'),
            'category_id' => $request->input('category_id'),
            'stock' => $request->input('stock'),
            'weight' => $request->input('weight'),
            'height' => $request->input('height'),
            'rarity' => $request->input('rarity')
        ]);
        return redirect()->route('backofficeMain')->with('success', 'Product has been updated');
    }
}
