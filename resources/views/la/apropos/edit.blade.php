@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/apropos') }}">Apropo</a> :
@endsection
@section("contentheader_description", $apropo->$view_col)
@section("section", "Apropos")
@section("section_url", url(config('laraadmin.adminRoute') . '/apropos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Apropos Edit : ".$apropo->$view_col)

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
				{!! Form::model($apropo, ['route' => [config('laraadmin.adminRoute') . '.apropos.update', $apropo->id ], 'method'=>'PUT', 'id' => 'apropo-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'presentation')
					@la_input($module, 'vision')
					@la_input($module, 'mission')
					@la_input($module, 'valeur')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/apropos') }}">Cancel</a></button>
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
	$("#apropo-edit-form").validate({
		
	});
});
</script>
@endpush
