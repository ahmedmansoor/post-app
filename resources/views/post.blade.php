<form action="{{Route('store')}}" method="POST">
    @CSRF

    <input type="text" name="name"><br>
    <input type="text" name="details"><br>

    <button type="submit">Submit</button>


</form>