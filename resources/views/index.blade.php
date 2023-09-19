<x-layout>
	@include('partials.hero')

	@unless (count($vets) === 0)
		@foreach ($vets as $vet)
			<div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center">
				<div class="my-3 p-3">
					<h2 class="display-5">
						<a href="/vets/{{$vet->id}}" target="_blank">
							{{$vet->name}}
						</a>
					</h2>
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