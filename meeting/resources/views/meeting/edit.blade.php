<form action="/meeting/edit/{{$meeting->meeting_id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
   

    <input type="date" name="date" value="{{$meeting->date}}">
    <input type="text" name="location" value="{{$meeting->location}}">
    <input type="number" name="max_number"value="{{$meeting->max_number}}">
    <input type="submit" value="ok">
</form>