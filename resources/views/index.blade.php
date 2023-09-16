<x-layout>
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
		<div class="col-md-6 p-lg-5 mx-auto my-5">
			<h1 class="display-3 fw-bold">Designed for engineers</h1>
			<h3 class="fw-normal text-muted mb-3">Build anything you want with Aperture</h3>
			<div class="d-flex gap-3 justify-content-center lead fw-normal">
				<a class="icon-link" href="#">
					Learn more
					<svg class="bi">
						<use xlink:href="#chevron-right" />
					</svg>
				</a>
				<a class="icon-link" href="#">
					Buy
					<svg class="bi">
						<use xlink:href="#chevron-right" />
					</svg>
				</a>
			</div>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>

	@unless (count($vets) === 0)
		@foreach ($vets as $vet)
			<div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center">
				<div class="my-3 p-3">
					<h2 class="display-5">{{$vet->name}}</h2>
					<p class="lead">{{$vet->description}}</p>
				</div>
			</div>
		@endforeach
	@else
		<div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center">
			<div class="my-3 p-3">
				<p class="lead">No vets found!</p>
			</div>
		</div>
	@endunless
</x-layout>