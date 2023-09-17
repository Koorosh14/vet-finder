<x-layout>
	<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
		<div class="col-lg-6 px-0">
			<h1 class="display-4 fst-italic">{{$vet->name}}</h1>
			{{-- <p class="lead my-3">{{$vet->address}}</p> --}}
			<img class="w-48 mr-6 mb-6" src="{{$vet->photo ? asset('storage/' . $vet->photo) : asset('/images/vet-placeholder.png')}}" alt="" width="400" />
		</div>
	</div>

	<div class="row g-5">
		<div class="col-md-8">
			<article class="blog-post">
				{{$vet->description}}
				<hr>
				<h2>Location</h2>
				soon...
				<h2>Working hours</h2>
				{{$vet->work_hours}}
			</article>
		</div>

		<div class="col-md-4">
			<div class="position-sticky" style="top: 2rem;">
				<div class="p-4 mb-3 bg-body-tertiary rounded">
					<h4 class="fst-italic">Address</h4>
					<p class="mb-0">{{$vet->address}}</p>
				</div>

				<div class="p-4">
					<h4 class="fst-italic">Social Media</h4>
					<ol class="list-unstyled">
						<li><a href="#">Telegram</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Twitter</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

</x-layout>
