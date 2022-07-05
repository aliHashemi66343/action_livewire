<div>
    {{-- In work, do what you enjoy. --}}
    <table class="table table-bordered">
        <tr>

            @foreach($participants[0]->toarray() as $key=>$value)
                <th>{{$key}}</th>

            @endforeach
        </tr>
        @foreach($participants as $participant)

            <tr>
                @foreach($participant->toArray() as $property=>$value)
{{--                    {{dd($participant)}}--}}
                <td>{{$value}}</td>
                @endforeach

            </tr>
        @endforeach


    </table>
</div>
