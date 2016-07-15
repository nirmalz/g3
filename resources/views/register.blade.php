<!dotype html>
<html>
<head>
    <title>Student register</title>
</head>

<body>

@if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('register') }}" method="post">

    {{ csrf_field() }}

    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" value="{{ old('first_name') }}">
    </div>

    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" value="{{ old('last_name') }}">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <input type="submit" value="submit">
    </div>
</form>

</body>


</html>