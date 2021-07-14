<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<h2>User form</h2>
<form action="/users/signup" method="post">
    @csrf
    <label for="IndentityNumber">
        Indentity number:
        <input type="text" name="indentityNumber">
    </label><br><br>
    <label for="FirstName">
        First name:
        <input type="text" name="firtName">
    </label><br><br>
    <label for="LastName">
        Last name:
        <input type="text" name="lastName">
    </label><br><br>
    <label for="Phone">
        Phone:
        <input type="text" name="phone">
    </label><br><br>
    <label for="Gender">
        Gender:
        <label><input type="radio" name="gender">Male</label>
        <label><input type="radio" name="gender">Female</label>
    </label><br><br>
    <button type="submit">Save</button>
    <button type="reset">Reset</button>
</form>
</body>
</html>
