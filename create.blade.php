@extends('dashboard')
@section('content')

<div class="col-md-6 mt-5">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Add Category</h3>
									</div>
									<div class="card-body">
                           
                                </div><!-- /.box-header -->
                                <!-- form start -->
								<form role="form" method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
                                   @csrf 
								   <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Category Name</label>
											<input type="text" id="name" class="form-control" name="category" value=""  placeholder="Enter Name">
										</div>
                                        
                                        <div class="form-group">
                                            <label for="image">Category Image</label>
                                            <input type="file" name= "category_image" id="image">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
									
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
						<!-- </div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>

<div class="col-md-7 justify-contents-center" style="margin-left:400px">
<div class="card card-default">
	<div class="card-header">
		<h3 class="">Add new Category</h3>
	</div>
	<div class="card-body">
    @if($errors->any())
	<div class="alert alert-danger">
		<ul class="list-group">
			@foreach($errors->all() as $error)
			<li class="list-group-item text-content">

				{{$error}}
			</li>
			@endforeach
		</ul>
	</div>
	@endif
    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data">
	
		@csrf
		
		<div class="form-group">
			<label for="category">Category Name</label>
			<input type="text" id="category" class="form-control" name="category" value="">
		</div><br><br>
        <div class="form-group">
			<label for="category_image">Category Image</label>
			<input type="file" name= "category_image">
		</div>
    <br><br>
        
        <div class="form-group">
			<button type="submit" class="btn btn-small btn-success">Add</button>
		</div>
	</form>
	</div>
</div>
</div>
@endsection -->