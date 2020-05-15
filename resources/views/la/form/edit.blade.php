@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/formations') }}">Formation</a> :
@endsection
@section("contentheader_description", $formation->$view_col)
@section("section", "Formations")
@section("section_url", url(config('laraadmin.adminRoute') . '/formations'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Formations Edit : ".$formation->$view_col)

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
				{!! Form::model($formation, ['route' => [config('laraadmin.adminRoute') . '.formations.update', $formation->id ], 'method'=>'PUT', 'id' => 'formation-edit-form']) !!}
					@la_form($module)
					
					{{--
					
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/formations') }}">Cancel</a></button>
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
	$("#formation-edit-form").validate({
		
	});
});
</script>
@endpush
