<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('backend.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('backend.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'CPU' => 'required',
            'RAM' => 'required',
            'storage' => 'required',
            'speed' => 'required',
            'description' => 'required',
            'price' => 'required',
            'pros' => 'required',
            'cons' => 'required',
        ]);
      
        $product = Product::create([
            'name' => $request->name,
            'title' => $request->title,
            'CPU' =>$request->CPU ,
            'RAM' => $request->RAM,
            'storage' => $request->storage,
            'speed' => $request->speed,
            'description' => $request->description,
            'price' => $request->price,
            'pros' => $request->pros,
            'cons' => $request->cons,
          
        ]);

        foreach ($request->images as $imagefile) {
            $image = new Image();
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->path = $path;
            $image->product_id = $product->id;
            $image->save();
          }
        $this->message('success', 'Product Created Successfullly');
        return redirect()->route('products.index-product');
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
        $product=Product::find($id);
        return view('backend.product.edit')->with('product',$product);
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
          
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'CPU' => 'required',
            'RAM' => 'required',
            'storage' => 'required',
            'speed' => 'required',
            'description' => 'required',
            'price' => 'required',
            'pros' => 'required',
            'cons' => 'required',
        ]);
      $product=Product::find($id);
        $product->fill($request->post())->save();

if ($request->images) {
    # code...

        foreach ($request->images as $imagefile) {
            $image = new Image();
            $path = $imagefile->store('/images/resource', ['disk' =>   'my_files']);
            $image->path = $path;
            $image->product_id = $product->id;
            $image->save();
          }
        }
        $this->message('success', 'Product updated Successfullly');
        return redirect()->route('products.index-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index-product');
    }
}
