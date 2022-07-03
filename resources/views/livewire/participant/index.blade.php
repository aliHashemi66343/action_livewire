<div>
    <h1>Data from Laravel Action: IndexParticipant</h1>
    @foreach($participants as $participant)
        <div>{{$participant->first_name}}</div>
    @endforeach

    <h1>Data from current Livewire Component: IndexParticipant</h1>
    @foreach($testAppendData as $appendedData)
        <div>{{$appendedData}}</div>
    @endforeach
</div>
