@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/intervenents') }}">Intervenent</a> :
@endsection
@section("contentheader_description", $intervenent->$view_col)
@section("section", "Intervenents")
@section("section_url", url(config('laraadmin.adminRoute') . '/intervenents'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Intervenents Edit : ".$intervenent->$view_col)

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
				{!! Form::model($intervenent, ['route' => [config('laraadmin.adminRoute') . '.intervenents.update', $intervenent->id ], 'method'=>'PUT', 'id' => 'intervenent-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'nom')
					@la_input($module, 'telephone')
					@la_input($module, 'profile')
					@la_input($module, 'photo')
					@la_input($module, 'cv')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/intervenents') }}">Cancel</a></button>
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
	$("#intervenent-edit-form").validate({
		
	});
});
</script>
@endpush
