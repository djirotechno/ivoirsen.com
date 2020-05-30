@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/metiers') }}">Metier</a> :
@endsection
@section("contentheader_description", $metier->$view_col)
@section("section", "Metiers")
@section("section_url", url(config('laraadmin.adminRoute') . '/metiers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Metiers Edit : ".$metier->$view_col)

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
				{!! Form::model($metier, ['route' => [config('laraadmin.adminRoute') . '.metiers.update', $metier->id ], 'method'=>'PUT', 'id' => 'metier-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Metiers')
					@la_input($module, 'description')
					@la_input($module, 'idmetier')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/metiers') }}">Cancel</a></button>
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
	$("#metier-edit-form").validate({
		
	});
});
</script>
@endpush
