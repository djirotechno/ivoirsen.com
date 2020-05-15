@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/solutions') }}">Solution</a> :
@endsection
@section("contentheader_description", $solution->$view_col)
@section("section", "Solutions")
@section("section_url", url(config('laraadmin.adminRoute') . '/solutions'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Solutions Edit : ".$solution->$view_col)

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
				{!! Form::model($solution, ['route' => [config('laraadmin.adminRoute') . '.solutions.update', $solution->id ], 'method'=>'PUT', 'id' => 'solution-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'titre')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/solutions') }}">Cancel</a></button>
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
	$("#solution-edit-form").validate({
		
	});
});
</script>
@endpush
