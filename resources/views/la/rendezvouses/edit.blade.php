@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rendezvouses') }}">RendezVouse</a> :
@endsection
@section("contentheader_description", $rendezvouse->$view_col)
@section("section", "RendezVouses")
@section("section_url", url(config('laraadmin.adminRoute') . '/rendezvouses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "RendezVouses Edit : ".$rendezvouse->$view_col)

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
				{!! Form::model($rendezvouse, ['route' => [config('laraadmin.adminRoute') . '.rendezvouses.update', $rendezvouse->id ], 'method'=>'PUT', 'id' => 'rendezvouse-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nom')
					@la_input($module, 'prenom')
					@la_input($module, 'telephone')
					@la_input($module, 'email')
					@la_input($module, 'message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rendezvouses') }}">Cancel</a></button>
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
	$("#rendezvouse-edit-form").validate({
		
	});
});
</script>
@endpush
