<h1>MEETINGEK</h1>
@foreach($meetings as $meeting)
    <form action="/meeting/{{$meeting->meeting_id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}

        <input type="submit" value="{{$meeting->meeting_id}}">

    </form>

@endforeach
