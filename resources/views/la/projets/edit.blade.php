@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/projets') }}">Projet</a> :
@endsection
@section("contentheader_description", $projet->$view_col)
@section("section", "Projets")
@section("section_url", url(config('laraadmin.adminRoute') . '/projets'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Projets Edit : ".$projet->$view_col)

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
				{!! Form::model($projet, ['route' => [config('laraadmin.adminRoute') . '.projets.update', $projet->id ], 'method'=>'PUT', 'id' => 'projet-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'description')
					@la_input($module, 'image')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/projets') }}">Cancel</a></button>
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
	$("#projet-edit-form").validate({
		
	});
});
</script>
@endpush
