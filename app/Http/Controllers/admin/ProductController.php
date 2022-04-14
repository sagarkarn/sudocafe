<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create')->with('menus', Menu::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::validate($request);
        $product = new Product();
        $product->setTitle($request->input('title'));
        $product->setRate($request->input('rate'));
        $product->setDescription($request->input('description'));
        $product->setMenuId($request->input('menu_id'));
        $product->save();

        if ($request->file('image')) {
            $image_name = $product->getId() . "." . $request->file('image')->extension() . ".";
            Storage::disk('public')->put(
                $image_name,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImageUrl($image_name);
            $product->save();
        }
        return redirect('/admin/product');
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
    public function edit($id)
    {
        $product = Product::find($id);
        $menus = Menu::all();
        return View('admin.product.edit')->with('product', $product)->with('menus', $menus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Product::validate($request);
        $product = Product::find($id);
        if (!$product) {
            return View('admin.product.index');
        }
        $product->setRate($request->input('rate'));
        $product->setTitle($request->input('title'));
        $product->setDescription($request->input('description'));
        $product->setMenuId($request->input('menu_id'));
        $product->save();

        if ($request->file('image')) {
            $image_name = $product->getId() . "." . $request->file('image')->extension() . ".";
            Storage::disk('public')->put(
                $image_name,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImageUrl($image_name);
            $product->save();
        }

        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::find($id)->delete();
        } catch (QueryException $ex) {
            if ($ex->getCode() == 23503) {

                return Redirect::back()->with('msg', 'This product has reference somewhere else !');
            }
        }
        return Redirect::back()->with('success', 'Deleted Successfully !');
    }
}
