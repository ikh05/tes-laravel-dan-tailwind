<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">KumpulTugas</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
				<li class="nav-item">
					<a class="nav-link {{ ($active === "Home") ? 'active' : '' }}" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ($active === "About") ? 'active' : '' }}" href="/about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ($active === "Guru") ? 'active' : '' }}" href="/guru">Daftar Guru</a>
				</li>
			</ul>
			<div class="d-flex">
				<a href="/guru/login" class="btn btn-outline-light bg-danger-emphasis">Login Guru</a>
			</div>
		</div>
	</div>
</nav>