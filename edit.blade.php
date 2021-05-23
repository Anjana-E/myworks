@extends('dashboard')
@section('content')
<div class="col-md-6 mt-5">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Category</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
								<form role="form" method="POST" action="{{route('category.update',['category'=>$categories->id])}}" enctype="multipart/form-data">
                                   @csrf 
                                   @method('PUT')
								   <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Category Name</label>
											<input type="text" id="name" class="form-control" name= "category" value="{{$categories->category}}" placeholder="Enter Name">
										</div>
                                       
                                        <div class="form-group">
                                            <label for="image">Category Image</label>
                                            <input type="file" name= "category_image" id="image" value="{{$categories->category_image}}">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
										
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
						</div><!--/.col (left) -->

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    <div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-6">
            <div class="card"> -->
            <!-- <div class="card-header"> -->
            <!-- <a href="" class="btn btn-primary text-center">Add category</a>
                <div class="card-body">
             </div> -->
<!--             
<form action="{{route('category.update',['category'=>$categories->id])}}" method="post">
@csrf
@method('PUT') --> 

    <!-- <div class="form-group">
    <label for="category">Category Name</label>
    <input type="text" class="form-control" name= "category" value="{{$categories->category}}" placeholder="Enter Category name">
    </div>
    <div class="form-group">
			<label for="category_image">Category Image</label>
			<input type="file" name= "category_image" value="{{$categories->category_image}}">
		</div>
    <div class="form-group">
    <input type="submit" class="btn btn-success text-center" name="submit" value="Add category">
    </div>
   
</form>
</div>
</div>
</div> -->


@endsection