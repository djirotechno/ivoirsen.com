@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/cvpdgs') }}">Cvpdg</a> :
@endsection
@section("contentheader_description", $cvpdg->$view_col)
@section("section", "Cvpdgs")
@section("section_url", url(config('laraadmin.adminRoute') . '/cvpdgs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Cvpdgs Edit : ".$cvpdg->$view_col)

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
				{!! Form::model($cvpdg, ['route' => [config('laraadmin.adminRoute') . '.cvpdgs.update', $cvpdg->id ], 'method'=>'PUT', 'id' => 'cvpdg-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'experience')
					@la_input($module, 'diplome')
					@la_input($module, 'recherchepub')
					@la_input($module, 'autreRecherche')
					@la_input($module, 'association')
					@la_input($module, 'informatique')
					@la_input($module, 'langue')
					@la_input($module, 'reference')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/cvpdgs') }}">Cancel</a></button>
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
	$("#cvpdg-edit-form").validate({
		
	});
});
</script>
@endpush
