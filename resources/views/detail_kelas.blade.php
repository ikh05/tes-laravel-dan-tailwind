
@extends ('layouts.main')

@section ('container')
	<div class="d-flex mb-3">
		<div class="flex-shrink-0">
			<img src="../../img/guru/{{ $guru->img }}" alt="{{ $guru->nama }}" class="img-thumbnail rounded-4" width="240">
		</div>
		<div class="flex-grow-1 ms-3">
			<h3 class="border-bottom">{{ $kelas->nama }}</h3>
			<div class="controller">
				<ul>
				    <li>Nama Guru : {{ $kelas->guru->nama }}</li>
				    <li>Mata Pelajaran : {{ $kelas->mapel->nama }}</li>
				    <li>Sekolah : {{ $kelas->sekolah->nama }}</li>
				    <li>Tahun Pelajaran : 2024-2025</li>
				</ul>
			</div>
			<h4>Siswa ({{ count($kelas->siswa) }}/{{ $kelas->banyakSiswa }})</h4>
			<div class="d-flex">
				@foreach ($kelas->siswa as $siswa)
					<div class="card">
						<div class="card-body">
							<h5 class="card-title" style="min-width: 360px;">{{ $siswa->nama }}</h5>
							<div class="progress" role="progressbar" aria-label="Default striped example" aria-valuemin="0" aria-valuemax="100">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%"></div>
							  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 25%"></div>
							  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 50%"></div>
							  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%"></div>
							  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 100%"></div>
							</div>
						</div>
					</div>
			    @endforeach
			</div>
		</div>
	</div>
	<a href="/guru" class="btn btn-success">Kembali</a>
@endsection