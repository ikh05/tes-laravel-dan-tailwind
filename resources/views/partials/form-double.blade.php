{{-- struktur form --}}
<div class="d-flex w-100 justify-content-center">
	<div class="flip-true active-front" style="width: 70vw; height: 70vh;">
		<div class="position-relative w-100 h-100">
			<form class="front card position-absolute w-100 h-100" action="" method="post">
				<div class="card-body">
					@yield('form-1')
				</div>
				<div class="card-footer">
					<div class="animejs-rotate-position">
						<button class="btn btn-success toForm2" type="button">{{ $form2 }}</button>
						<button class="btn btn-info" type="submit">Kirim</button>
					</div>
				</div>
			</form>
			<form class="back card position-absolute w-100 h-100" action="" method="post">
				<div class="card-body">
					@yield('form-2')
				</div>
				<div class="card-footer">
					<div class="animejs-rotate-position">
						<button class="btn btn-success toForm1" type="button">{{ $form1 }}</button>
						<button class="btn btn-info" type="submit">Kirim</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<style type="text/css">
	.flip-true .back{
		z-index: 1;
	}
	.flip-true .front{
		transform: rotateY(180deg);
	}
	.flip-true.active-front .back{
		z-index: -1 ;
	}
	
</style>

<script type="module">
	import animejs from 'https://cdn.jsdelivr.net/npm/animejs@3.2.2/+esm'
	console.log(animejs)
	const flip = animejs.timeline({
	  targets: '.flip-true',
	  rotateY: 180,
	  duration: 800,
	  direction: 'alternate',
	  loop: false,
	  autoplay: false,
	  easing: 'easeInOutSine',
	  delay: 100,
	  endDelay: 100,
	  begin: function (anim){
	  	if(anim.began){
	  		document.querySelector('.flip-true').classList.toggle('active-front');
	  	}
	  } 
	});
	flip.add({
		target:'.animejs-rotate-position',
		rotate: 180,
		loop: false,
	}, '+=100')
	.add({
		target:'.anime-jsrotate-position .btn',
		rotate: -180,
		  loop: false,
	}, '+=100')


	function function_flip () {
		flip.reverse();		
		flip.play();
	}


	flip.play();
	document.querySelector('.toForm1').addEventListener('click',()=>{
		function_flip();
	})
	document.querySelector('.toForm2').addEventListener('click',()=>{
		function_flip();
	})
</script>