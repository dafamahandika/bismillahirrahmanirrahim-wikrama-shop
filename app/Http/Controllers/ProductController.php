<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProduct()
    {   
        $data = Product::get();
        return view('dashboard.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {
        $request -> validate([
            'product_category' => 'required',
            'product_name' =>'required',
            'product_price' =>'required',
            'product_stock' =>'required',
            'product_image' =>'required',
            'product_desc' =>'required'
        ]);

        Product::create($request->all());

        return redirect()->route('indexProduct')
        -> with('success', 'Produk berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProduct($id)
    {
        $data = Product::where('id',$id)->first();
        
        return view ('product.edit')
        ->with('data',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request, $id)
    {
        Product::where('id',$id)->update([
            'product_category' => $request->product_category,
            'product_name' =>$request->product_name,
            'product_price' =>$request->product_price,
            'product_stock' =>$request->product_stock,
            'product_image' =>$request->product_image,
            'product_desc' =>$request->product_desc
        ]);

        return redirect(route('indexProduct'))
        ->with('edit', 'Edit Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProduct($id)
    {
        Product::where('id',$id)->delete();
        
        return redirect(route('indexProduct'))
        ->with('delete', 'Delete Successfully !');
    }
}
