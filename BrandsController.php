<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Brands;

use Illuminate\Http\Request;
use App\Models\categories;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $brands = brands::all();
        
        // dd($brands);
         return view('brand/index')->with('brands',$brands)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = categories::all();

        return view('brand/create')->with('categories',$categories);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = brands::create([
            'brandname' => $request->brandname,
            
            'cat_name' => $request->cat_id
            
        ]);

        return redirect('brand');

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
        $brand = brands::find($id);
        return view('brand/edit')->with('brands',$brand)->with('categories',$categories);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = brands::find($id);
       // dd( $product);
       $brand->delete();

       return redirect()->back();

    }
}
