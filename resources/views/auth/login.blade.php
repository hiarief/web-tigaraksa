<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="text" name="login" placeholder="Email atau Username" required autofocus>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>

        @error('login')
            <div>{{ $message }}</div>
        @enderror
    </form>


</body>

</html>
