<div>
    {{-- In work, do what you enjoy. --}}

    @foreach($participant as $key=>$value)
        <div>
            <h1>{{$key}}</h1>
            <p>{{$value}}</p>
        </div>
    @endforeach
</div>
