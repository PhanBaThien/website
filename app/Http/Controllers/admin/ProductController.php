<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Trademark;

class ProductController extends Controller
{
    public function getProduct(){

        $data= Product::select('products.*','trademark.trademarkName')
        ->join('trademark','products.trademarkId','=','trademark.trademarkId')->get();
        $data = Product::select('products.*','categories.categoryName')
        ->join('categories','products.categoryID','=','categories.categoryID')->get();
        return view('admin/product/index',compact('data'));

    }

    public function addP(){
        $categories = Category::get();
        $trademark = Trademark::get();
        return view('admin.product.add', compact('categories','trademark'));
    }

    public function saveP(Request $request){
        $request -> validate([
            'id'=>'required',
            'name'=>'required',
            'price'=>'required',
            'detail'=>'required',
            'image'=>'required',
        ]);

        $product = new Product();
        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->detail;
        $product->productImage1 = $request->image;
        $product->trademarkId = $request->trademark;
        $product->categoryID = $request->category;
        $product->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function editP($id)
    {
        $categories= Category::get();
        $trademark = Trademark::get();
        $data = Product:: where('productID','=',$id)->first();
        return view('admin.product.update', compact('data','trademark','categories'));
    }

    public function updateP(Request $request){
        $productID = $request->id;
        $productName = $request->name;
        $productPrice = $request->price;
        $productDetails = $request->detail;
        $productImage1 = $request->image;
        $trademarkId = $request->trademark;
        $categoryID = $request ->category;
        Product::where('productID', '=', $productID)->update([
            'productName'=>$productName,
            'productPrice'=>$productPrice,
            'productDetails'=>$productDetails,
            'productImage1'=>$productImage1,
            'trademarkId'=>$trademarkId,
            'categoryID'=>$categoryID
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
   
    public function deleteP($id)
    {
        $data = Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product removed successfully!');
    }

    public function index(){

        $data= Product::select('products.*','trademark.trademarkName')
        ->join('trademark','products.trademarkId','=','trademark.trademarkId')->get();
        return view('doing',compact('data'));

        /* $data = Product::select('products.*','categories.categoryName')
        ->join('categories', ' products.categoryID','=','categories.categoryID')
        -> get();
        return view("admins/products/index"); */
    }
}
