@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/valeurs') }}">Valeur</a> :
@endsection
@section("contentheader_description", $valeur->$view_col)
@section("section", "Valeurs")
@section("section_url", url(config('laraadmin.adminRoute') . '/valeurs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Valeurs Edit : ".$valeur->$view_col)

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
				{!! Form::model($valeur, ['route' => [config('laraadmin.adminRoute') . '.valeurs.update', $valeur->id ], 'method'=>'PUT', 'id' => 'valeur-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/valeurs') }}">Cancel</a></button>
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
	$("#valeur-edit-form").validate({
		
	});
});
</script>
@endpush
