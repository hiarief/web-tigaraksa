<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>



</body>

</html>
