@extends ('layouts.main')


@section ('form-1')
	{{-- tag input --}}
	<h2>form-1</h2>
@endsection

@section ('form-2')
	<h2>form ke-2</h2>
@endsection

@section ('container')
	@include('partials.form-double')
@endsection
