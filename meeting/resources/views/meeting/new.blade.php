<form action="/meeting/new" method="post">
    {{csrf_field()}}
    
    <input type="date" name="date">
    <input type="text" name="location">
    <input type="number" name="max_number" placeholder="10">
    <input type="submit" value="ok">
</form>