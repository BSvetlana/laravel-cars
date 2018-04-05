@extends ('layouts.master');

@section('container')
</div><!--/.container-->
<div class="container">
    <div class="jumbotron">
        @foreach($cars as $car)
            <a href="/cars/{{$car->id}}" class="list-group-item">{{$car->title}}</a>
        @endforeach
    </div>
</div>
@endsection