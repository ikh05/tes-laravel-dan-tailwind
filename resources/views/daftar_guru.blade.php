@extends ('layouts.main')


@section ('container')
	<h1 class="hover:bg-cyan-300 bg-cyan-200">Daftar Guru</h1>
	<hr>
	<div class="d-flex gap-3 flex-wrap justify-content-center">
		@foreach ($guru as $g)
		<div class="card mb-3 hover:bg-cyan-300 hover:cursor-copy" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-4">
					<img src="img/guru/{{ $g->img }}" class="img-fluid rounded-start" alt="{{ $g->nama }}">
				</div>
				<div class="col-8">
					<div class="card-body position-relative h-100">
						<h5 class="card-title">
							<a href="guru/detail/{{ $g->username }}">{{ $g->nama }}</a>
						</h5>
						<p class="card-text">Email : {{ $g->email }}</p>
						<p class="card-text position-absolute bottom-0 mb-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection