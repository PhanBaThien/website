<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Trademark;
use App\Models\Product;

class TrademarkController extends Controller
{
    public function index()
    {
        $product= Product::select();
        $data = Trademark::get();
        return view('admin.trademark.index',compact('data'));
    }
    public function create()
    {
        $trademark = Trademark::get();
        return view('admin.trademark.create', compact('trademark'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
        ]);

        $trademark = new Trademark();
        $trademark->trademarkID = $request->id;
        $trademark->trademarkName = $request->name;
        $trademark->save();
        return redirect()->back()->with('success', 'TrademarkId added successfully!');
    }

    public function edit($id)
    {
        $trademark= Trademark::get();
        $data = Trademark::where('trademarkId', '=', $id)->first();
        return view('admin.trademark.edit', compact('data','trademark'));
    }

    public function update(Request $request)
    {

        $trademarkId = $request->id;
        $trademarkName = $request->name;
        Trademark::where('trademarkId', '=', $trademarkId)->update([
            'trademarkName'=>$trademarkName,
        ]);
        return redirect()->back()->with('success', 'Producer update successfully!');
    }

    public function delete($id)
    {
        $data = Trademark::where('trademarkId', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer removed successfully!');
    }


}
