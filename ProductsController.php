<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\products;

use App\Models\categories;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        // dd($products);
         return view('product/index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories::all();

        return view('product/create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $proimage = $request->image;

        $proimage = $proimage->store('images');

        //dd($request->cat_id);

        $product = products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            
            'image'=>$proimage,
            'cat_name' => $request->cat_id,
            'status' => $request->status
        ]);

        return redirect('product');

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

        $categories = categories::all();
        $product = products::find($id);
        return view('product/edit')->with('products',$product)->with('categories',$categories);
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
        
        $products = products::find($id);

        

        $product = $request->only(['name','description','cat_name','price']);

        

        $proimage = $request->image;


        if ($proimage) 
      {
          

        $proimage = $proimage->store('images');
            //dd($proimage);

        $products['image'] = $proimage;

      }


        $products->update($product);

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = products::find($id);
       // dd( $product);
       $product->delete();

       return redirect()->back();

    }
    public function shop_index(){

        dd('shop page');
        return view('shop');
    }
}
