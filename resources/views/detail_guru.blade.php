
@extends ('layouts.main')

@section ('container')
	<div class="d-flex mb-3">
		<div class="flex-shrink-0">
			<img src="../../img/guru/{{ $guru->img }}" alt="{{ $guru->nama }}" class="img-thumbnail rounded-4" width="240">
		</div>
		<div class="flex-grow-1 ms-3">
			<h3 class="border-bottom">{{ $guru->nama }}</h3>
			<div class="d-flex">
				<ul>
					<li>Username : {{ $guru->username }}</li>
				    <li>Email : {{ $guru->email }}</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="d-flex mb-3">
		@foreach ($guru->kelas as $kelas)
			<div class="card" style="min-width: 45vw;">
				<a href="/kelas/detail/{{ $kelas->slug }}" class="card-body">
					<h3 class="card-title">{{ $kelas->nama }}</h3>
					<ul>
					    <li></li>
					    <li></li>
					    <li></li>
					    <li></li>
					</ul>
				</a>
			</div>
		@endforeach
	</div>
	<a href="/guru" class="btn btn-success">Kembali</a>
@endsection