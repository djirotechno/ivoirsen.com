@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/catalogues') }}">Catalogue</a> :
@endsection
@section("contentheader_description", $catalogue->$view_col)
@section("section", "Catalogues")
@section("section_url", url(config('laraadmin.adminRoute') . '/catalogues'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Catalogues Edit : ".$catalogue->$view_col)

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
				{!! Form::model($catalogue, ['route' => [config('laraadmin.adminRoute') . '.catalogues.update', $catalogue->id ], 'method'=>'PUT', 'id' => 'catalogue-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'code')
					@la_input($module, 'titre')
					@la_input($module, 'objectif')
					@la_input($module, 'contenu')
					@la_input($module, 'duree')
					@la_input($module, 'date')
					@la_input($module, 'prix')
					@la_input($module, 'niveaux')
					@la_input($module, 'intervenant')
					@la_input($module, 'outilslogiciel')
					@la_input($module, 'prerequis')
					@la_input($module, 'image')
					@la_input($module, 'panoramas')
					@la_input($module, 'souspanoid')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/catalogues') }}">Cancel</a></button>
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
	$("#catalogue-edit-form").validate({
		
	});
});
</script>
@endpush
