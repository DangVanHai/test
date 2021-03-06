@extends('backend.master')
@section('title','Detail-Product')
@section('main')
@section('header')
<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/flag-icon.min.css">
<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="assets/css/bootstrap-rating.css">

<!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
<link rel="stylesheet" href="assets/scss/style.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
@stop
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="{{asset('admin')}}">Dashboard</a></li>
					<li><a href="{{asset('admin/products')}}">Product</a></li>
					<li><a href="{{asset('admin/products/show/20')}}">show</a></li>
					<li class="active">{{$prod_show->prod_name}}</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-12">
		<div class="card col-lg-6">
			<div class="card-header">
				<strong>Manager </strong> Product
			</div>
			<div class="card-body card-block">
				<div class="row form-group">
					<div class="col col-md-3"><label class=" form-control-label">Static</label></div>
					<div class="col-12 col-md-9">
						<p class="form-control-static">Here is place input detail product</p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
					<div class="col-12 col-md-9"><input type="text" id="Name product" disabled="" name="prod_name" placeholder="{{$prod_show->prod_name}}" class="form-control"></div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Code</label></div>
					<div class="col-12 col-md-9"><input type="text" id="Code product" disabled="" name="prod_code" placeholder="{{$prod_show->prod_code}}" class="form-control"></div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Rate</label></div>
					<div class="col-12 col-md-9"><input value="{{$prod_show->prod_rate}}" disabled="" name="prod_rate" type="hidden" class="rating" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2"/></div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">PI</label></div>
					<div class="input-group col-12 col-md-9">
						<div class="input-group-addon"><i class="fa">đ</i></div>
						<input type="text" id="price import" name="prod_pi" disabled="" placeholder="{{$prod_show->prod_pi}}" class="form-control">
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">PE</label></div>
					<div class="input-group col-12 col-md-9">
						<div class="input-group-addon"><i class="fa">đ</i></div>
						<input type="text" id="price export" name="prod_pe" disabled="" placeholder="{{$prod_show->prod_pe}}" class="form-control">
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">QtyI</label></div>
					<div class="input-group col-12 col-md-9">
						<div class="input-group-addon"><i class="fa">pcs</i></div>
						<input type="text" id="quantity Import" name="prod_qtyI" disabled="" placeholder="{{$prod_show->prod_qtyI}}" class="form-control">
					</div>
				</div>
				<div class="row form-group" >
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">QtyE</label></div>
					<div class="input-group col-12 col-md-9">
						<div class="input-group-addon"><i class="fa">pcs</i></div>
						<input type="number"  id="quantity Export"  name="prod_qtyE" disabled="" placeholder="{{$prod_show->prod_qtyE}}" class="form-control">
					</div>
				</div>
				<div class="row form-group" >
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">QtyR</label></div>
					<div class="input-group col-12 col-md-9">
						<div class="input-group-addon"><i class="fa">pcs</i></div>
						<input type="number"  id="quantity Export"  name="prod_qtyR" disabled="" placeholder="{{$prod_show->prod_qtyR}}" class="form-control">
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
					<div class="col-12 col-md-9">
						<img style="" src="{{asset('public/images/products/'.$prod_show->prod_img)}}"></div>
					</div>
				</div>
			</div>
			<div class="card col-lg-6">
				<div class="card-header">
					<strong>Infomation </strong>Partner's Product
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label class=" form-control-label">Static</label></div>
					<div class="col-12 col-md-9">
						<p class="form-control-static">Here is place input detail partner</p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
					<div class="col-12 col-md-9"><input type="text" id="partner name" disabled="" name="prod_partner_name" placeholder ="{{$prod_show->prod_partner_name}}" class="form-control"></div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Partner Info</label></div>
					<div class="col-12 col-md-9"><textarea name="prod_partner_info" id="textarea-input" rows="3" disabled="" class="form-control">{{$prod_show->prod_partner_info}}</textarea><small class="form-text text-muted">This is place post detail partner has provided this product</small></div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="selectSm" class=" form-control-label">Category</label></div>
					<div class="col-12 col-md-9">
						<p>{{$prod_show->category->cate_name}}</p>
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label class=" form-control-label">Partner Level</label></div>
					<div class="col col-md-9">
						<div class="form-check-inline form-check">
							<label for="inline-radio1" class="form-check-label ">
								<input disabled="" type="radio" @if($prod_show->prod_partner_level=="option1" ) checked="" @endif  id="inline-radio1" name="prod_partner_level" value="option1" class="form-check-input">One
							</label>
							<label for="inline-radio2" class="form-check-label ">
								<input disabled="" type="radio" id="inline-radio2" name="prod_partner_level" @if($prod_show->prod_partner_level=="option2" ) checked="" @endif  value="option2" class="form-check-input">Two
							</label>
							<label for="inline-radio3" class="form-check-label ">
								<input disabled="" type="radio" id="inline-radio3" name="prod_partner_level" @if($prod_show->prod_partner_level=="option3" ) checked="" @endif  value="option3" class="form-check-input">Three
							</label>
						</div>
					</div>
				</div>
				<div class="row form-group">
					<div class="col col-md-3"><label for="file-input" class=" form-control-label">Cataloge</label></div>
					<div class="col-12 col-md-9">
						<p>{{$prod_show->prod_file}}</p></div>
					</div>
				</div>
				<div class="card col-lg-12">
					<div class="card-header">
						<strong>Detail </strong> Product
					</div>
					<div class="row form-group">
						<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea delail product and  show cataloge</label></div>
						<div class="col-12 col-md-9"><textarea disabled="" name="prod_detail" id="textarea-input" rows="9" value="{{$prod_show->prod_detail}}" class="form-control ckeditor">{{$prod_show->prod_detail}}</textarea></div>
					</div>
				</div>
				<div class="card col-lg-12">
					<div class="card-footer">
						<a href="{{asset('admin/products')}}"><button type="submit" class="btn btn-primary btn-sm">
							<i class="fa fa-dot-circle-o"></i> Return
						</button></a>
						<a href="{{asset('admin/products/edit/'.$prod_show->prod_id)}}"><button type="reset" class="btn btn-danger btn-sm">
							<i class="fa fa-ban"></i> Edit
						</button></a>
					</div>
				</div>
		</div>

		@section('script')
		<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/plugins.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/vendor/bootstrap-rating.min.js"></script>
		<script src="assets/js/vendor/tooltip.min.js"></script>
		<script type="text/javascript" src="../ck/ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
			var editor = CKEDITOR.replace('prod_detail',{
				language:'vi',
				filebrowserImageBrowseUrl: '../ck/ckfinder/ckfinder.html?Type=Images',
				filebrowserFlashBrowseUrl: '../ck/ckfinder/ckfinder.html?Type=Flash',
				filebrowserImageUploadUrl: '../ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl: '../ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			});
		</script>
		@stop
		@stop

