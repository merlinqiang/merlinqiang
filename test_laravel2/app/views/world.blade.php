<!-- <form action="/indexa" method="post">
	user:<input name="username"><br />
	password:<input name="username"><br />
	<input type="submit" value="submit"><br />
</form> -->
{{ Form::open(array('url' => '/dologin')) }}
    user:<input name="username"><br />
	password:<input name="pwd"><br />
	<input type="submit" value="submit"><br />
{{ Form::close() }}