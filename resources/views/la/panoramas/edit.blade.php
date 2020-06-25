@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/panoramas') }}">Panorama</a> :
@endsection
@section("contentheader_description", $panorama->$view_col)
@section("section", "Panoramas")
@section("section_url", url(config('laraadmin.adminRoute') . '/panoramas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Panoramas Edit : ".$panorama->$view_col)

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
				{!! Form::model($panorama, ['route' => [config('laraadmin.adminRoute') . '.panoramas.update', $panorama->id ], 'method'=>'PUT', 'id' => 'panorama-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/panoramas') }}">Cancel</a></button>
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
	$("#panorama-edit-form").validate({
		
	});
});
</script>
@endpush
