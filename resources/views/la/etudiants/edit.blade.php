@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/etudiants') }}">Etudiant</a> :
@endsection
@section("contentheader_description", $etudiant->$view_col)
@section("section", "Etudiants")
@section("section_url", url(config('laraadmin.adminRoute') . '/etudiants'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Etudiants Edit : ".$etudiant->$view_col)

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
				{!! Form::model($etudiant, ['route' => [config('laraadmin.adminRoute') . '.etudiants.update', $etudiant->id ], 'method'=>'PUT', 'id' => 'etudiant-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nom')
					@la_input($module, 'prenom')
					@la_input($module, 'email')
					@la_input($module, 'telephone')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/etudiants') }}">Cancel</a></button>
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
	$("#etudiant-edit-form").validate({
		
	});
});
</script>
@endpush
