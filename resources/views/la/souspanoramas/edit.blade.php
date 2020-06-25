@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/souspanoramas') }}">Souspanorama</a> :
@endsection
@section("contentheader_description", $souspanorama->$view_col)
@section("section", "Souspanoramas")
@section("section_url", url(config('laraadmin.adminRoute') . '/souspanoramas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Souspanoramas Edit : ".$souspanorama->$view_col)

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
				{!! Form::model($souspanorama, ['route' => [config('laraadmin.adminRoute') . '.souspanoramas.update', $souspanorama->id ], 'method'=>'PUT', 'id' => 'souspanorama-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/souspanoramas') }}">Cancel</a></button>
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
	$("#souspanorama-edit-form").validate({
		
	});
});
</script>
@endpush
