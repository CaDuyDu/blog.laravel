@extends('admin.layouts.master')

@section('head')

@endsection

@section('content')
	<style type="text/css">
	    input[type=file]{
	      display: inline;
	    }
	    #image_preview{
	      border: 1px solid black;

	      padding: 10px;
	    }
	    #image_preview img{
	      width: 200px;
	      padding: 5px;
	    }
  </style>
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa fa-newspaper-o"></i> Users
        <small>Bảng điều khiển</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.users.index') }}">Tất cả Users</a></li>
        <li>Thêm mới </li>
      </ol>
    </section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-12 connectedSortable">
				<div class="box box-default">
					<!-- Content Header (Page header) -->
					<div class="box-header with-border">
						<h3 class="box-title">
							<i class="fa fa-plus" aria-hidden="true"></i> THÊM MỚI USERS
						</h3>
					</div>
					<div class="box-body">
						<form action="{{ route('admin.users.store') }}" method="post">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-8">
									<div class="form-group">
									  <label for="name-post">Name(<span style="color: red;">*</span>)</label>
									  	@if ($errors->has('name'))
		                                    <span class="help-block" style="color: red;">
		                                        <strong>{{ $errors->first('name') }}</strong>
		                                    </span>
		                                @endif
									  <input type="text" class="form-control" id="title-post" placeholder="Name .. " name="name" value="{{ old('name') }}">
									</div>
									{{-- <div class="form-group">
									  <label for="full_name-post">Full name (<span style="color: red;">*</span>)</label>
									  	@if ($errors->has('full_name'))
		                                    <span class="help-block" style="color: red;">
		                                        <strong>{{ $errors->first('full_name') }}</strong>
		                                    </span>
		                                @endif
		                                <input type="text" class="form-control" id="title-post" placeholder="Full Name .. " name="fullname" value="{{ old('full_name') }}">
									</div> --}}
									<div class="form-group">
									  <label for="email-post">Email  (<span style="color: red;">*</span>)</label>
									  	@if ($errors->has('email'))
		                                    <span class="help-block" style="color: red;">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
		                                <input type="text" class="form-control" id="title-post" placeholder="Email .. " name="email" value="{{ old('email') }}">
									</div>
									<div class="form-group">
									  <label for="password-post">Password  (<span style="color: red;">*</span>)</label>
									  	@if ($errors->has('password'))
		                                    <span class="help-block" style="color: red;">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
		                                <input type="text" class="form-control" id="title-post" placeholder="Password .. " name="password" value="{{ old('password') }}">
									</div>
								</div>
								<div class="col-lg-4">
									<!-- STATUS POST-->
									<div class="box box-primary">
										<!-- Content Header (Page header) -->
										<div class="box-header with-border">
											<h3 class="box-title">
												<i class="fa fa-bookmark" aria-hidden="true"></i> Trạng thái
											</h3>
										</div>
										<div class="box-body">
											<div class="form-group">
												<select class="form-control" id="sel1" name="status">
													<option value="1" @if(old('status') != null ) {{ old('status') == 1 ? 'selected' : '' }} @endif>Publish</option>
													<option value="0" @if(old('status') != null ) {{ old('status') == 0 ? 'selected' : '' }} @endif>Draft</option>
												</select>
											</div> 
											<div class="form-group">
												<label class="checkbox-inline">
													<input name="is_featured" type="checkbox" value="1" {{ old('is_featured') == 1 ? 'checked' : '' }}> Featured
												</label>
												<div class="pull-right">
													<button name='submitImage' type="submit" class="btn btn-primary">Đăng bài </button>
												</div>
											</div>
										</div>
									</div>
									<!-- END STATUS POST -->
									<!-- CATEGORIES -->
									{{-- <div class="box box-primary">
										<!-- Content Header (Page header) -->
										<div class="box-header with-border">
											<h3 class="box-title">
												<i class="fa fa-list" aria-hidden="true"></i> Danh mục
											</h3>
										</div>
										<div class="box-body">
											<div class="form-group">
												<select class="form-control" id="sel1" name="category_id">
													@if(isset($categories))
														@foreach ($categories as $category)
															<option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }}>
																{{ $category->name }}
															</option>
														@endforeach
													@endif
												</select>
											</div> 
										</div>
									</div> --}}
									<!-- END CATEGORIES -->
									<!-- THUMBNAIL -->
									<div class="box box-primary">
										<!-- Content Header (Page header) -->
										<div id="image_preview" class="box-header with-border">
											<h3 class="box-title">
												<i class="fa fa-picture-o" aria-hidden="true"></i> Ảnh thu nhỏ
											</h3>
										</div>
										{{-- <div class="box-body">
											<div class="thumbnail">
												<img src="{{ old('thumbnail') }}" alt="No Image" style="width: 250px; height: 200px;" id="holder">
												<input id="thumbnail" class="form-control" type="hidden" name="thumbnail" style="width: 250px; height: 200px;" value="{{ old('thumbnail') }}">
											</div>
											<button type="button" id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"><i class="fa fa-picture-o" aria-hidden="true"></i>Chọn ảnh </button>
										</div> --}}
										<form action="{{ route('images.upload') }}" method="post" enctype="multipart/form-data">
										      {{ csrf_field() }}
										      <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
										  </form>
									</div>
									<!-- END THUMBNAIL -->
									<!-- TAGS -->
							{{-- 		<div class="box box-primary">
										<!-- Content Header (Page header) -->
										<div class="box-header with-border">
											<h3 class="box-title">
												<i class="fa fa-tags" aria-hidden="true"></i> Tags
											</h3>
										</div>
										<div class="box-body">
											<div class="form-group">
												<input type="text" class="form-control" name="tags" data-role="tagsinput" value="{{ old('tags') }}">
											</div>
										</div>
									</div> --}}
									<!-- END TAGS -->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Main row -->
	</section>
	<!-- /.content -->
@endsection

@section('footer')
	{{-- <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
	<script>
		Editor('content-post');
		$('#lfm').filemanager('image',  {prefix: "/files"});

		$(function(){
			$('form').on('keyup keypress', function(e) {
			  var keyCode = e.keyCode || e.which;
			  if (keyCode === 13) { 
			    e.preventDefault();
			    return false;
			  }
			});
		});
	</script> --}}
	<script type="text/javascript">
		  $("#uploadFile").change(function(){
		     $('#image_preview').html("");
		     var total_file=document.getElementById("uploadFile").files.length;
		     for(var i=0;i<total_file;i++)
		     {
		      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
		     }
		  });
		  $('form').ajaxForm(function() 
		   {
		    alert("Uploaded SuccessFully");
		   }); 
		</script>
@endsection