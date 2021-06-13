<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categories;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categories::all();
       // dd($categories);
        return view('category/index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());

        $catimage = $request->category_image;

        $catimage = $catimage->store('images');

        // dd($catimage);

        $category = categories::create([
            'category' => $request->category,
            'category_image'=>$catimage
        ]);

        return redirect('category');


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

        $category = categories::find($id);
       return view('category/edit')->with('categories',$category);
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
        //dd('update');
        $category = categories::find($id);
        $categories = $request->only(['category']);

        $category->update($categories);
        $proimage = $request->category_image;

        // $proimage = $request->only(['category_image']);

        if ($proimage) 
      {
          

        $proimage = $proimage->store('images');
    //         //dd($proimage);

        $categories['category_image'] = $proimage;

      }
      $category->update($categories);

      
    
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd('destroy');

       $category = categories::find($id);
       // dd( $category);
       $category->delete();

       return redirect()->back();

        
    }
}
