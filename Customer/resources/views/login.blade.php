<h1>User Login</h1>

<form action="user" method = "POST">
    @csrf
<input type="text" name="user" placeholder="Enter User Name"><br><br>
<input type="password" name="password" placeholder="Enter Password"><br><br>
<button type="submit"> Login</button>

<a href="/registration">Logout</a>

</form>