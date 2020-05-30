@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/homes') }}">Home</a> :
@endsection
@section("contentheader_description", $home->$view_col)
@section("section", "Homes")
@section("section_url", url(config('laraadmin.adminRoute') . '/homes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Homes Edit : ".$home->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($home, ['route' => [config('laraadmin.adminRoute') . '.homes.update', $home->id ], 'method'=>'PUT', 'id' => 'home-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'presentation')
					@la_input($module, 'mission')
					@la_input($module, 'vision')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/homes') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#home-edit-form").validate({
		
	});
});
</script>
@endpush
