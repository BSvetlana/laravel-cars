@extends ('layouts.master');

@section('content')
</div><!--/span-->
<div class="container">
    <div class="jumbotron">
        <h3>{{ $car->title }}</h3>
        <p class="lead">Produce: {{ $car->producer }}</p>
        <p class="lead">Number of doors: {{ $car->number_of_doors }}</p>
    </div>
</div>
@endsection