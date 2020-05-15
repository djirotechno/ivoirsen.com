@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/experts') }}">Expert</a> :
@endsection
@section("contentheader_description", $expert->$view_col)
@section("section", "Experts")
@section("section_url", url(config('laraadmin.adminRoute') . '/experts'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Experts Edit : ".$expert->$view_col)

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
				{!! Form::model($expert, ['route' => [config('laraadmin.adminRoute') . '.experts.update', $expert->id ], 'method'=>'PUT', 'id' => 'expert-edit-form']) !!}
					@la_form($module)
					
					{{--
					
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/experts') }}">Cancel</a></button>
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
	$("#expert-edit-form").validate({
		
	});
});
</script>
@endpush
