@extends('dashboard')
@section('content')

<div class="col-md-12 mt-5">
                            

                            <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title"> ALL Category</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            
                                            <th style="width: 40px; text-align:center;"></th>
                                           <th style="width: 40px; text-align:center;"></th>
                                        </tr>
                                        @foreach($categories as $key=>$cat)
                                        <tr>
                                            <td>{{$key +1}}</td>
                                            <td>{{$cat->category}}</td>
                                          
                                            <td><img src="{{asset('storage').'/'.$cat->category_image}}" alt="" style="height:108px;width:108px;"></td>
                                           
                                            <!-- <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td> -->
                                            <td><a href="{{route('category.edit',['category'=> $cat->id])}}" class="btn btn-sm btn-primary">Edit</a></td>

                                            <td><form action="{{route('category.destroy',['category'=> $cat->id])}}" method="post">
                                                                @method('DELETE')
                                                                @csrf

                                                                    <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                                                </form>
                                                                </td>
                                        </tr>
                                        @endforeach
                                   
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>


<div class="container">
    <div class="row justify-content-center">
   
        <div class="col">
            <div class="card">
            <a href="{{route('category.create')}}" class="btn btn-primary text-center">Add Category</a>
                <div class="card-header"></div>
                <div class="card-body">
                   
                  <table class="table table-hover">
                  
                  <thead>
                  <th>
                
                  Category
                  </th>
                  <th>
                  Image
                  </th>
                  <th>
                   
                  </th>
                  <th>
                   Edit
                  </th>
                  <th>
                   Delete
                  </th>

                  </thead>
                  <tbody>
                        @foreach($categories as $cat)

                        <tr>
                        <td>{{$cat->category}}</td>
                        <td><img src="{{asset('storage').'/'.$cat->category_image}}" alt="" style="height:108px;width:108px;"></td>
                        
                        <td></td>
                        <td><a href="{{route('category.edit',['category'=> $cat->id])}}" class="btn btn-xs btn-primary">Edit</a></td>
                        <td>
                        <form action="{{route('category.destroy',['category'=> $cat->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                        
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                        
                        
                        </td>
                        </tr>
                  </tbody>
                  @endforeach
                  
                  </table>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection