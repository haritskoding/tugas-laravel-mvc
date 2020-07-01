<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="signUp" method="POST">
        @csrf
        <h1>Buat Account Baru</h1>
        <h2>SignUp Form</h2>
        <label>First Name:</label><br/>
        <input type="text" name="f_name" placeholder="enter first name..."><br/>
        <label>Last Name:</label><br/>
        <input type="text" name="l_name" placeholder="enter last name..."><br/>
        <label>Gender:</label><br/>
        <input type="radio" name="gender" value="Man">Man<br/>
        <input type="radio" name="gender" value="Woman">Woman<br/>
        <input type="radio" name="gender" value="Other">Other<br/>
        <label>Bloc</label><br/>
        <label>Nationality</label>
        <select name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="indonesia">Arab</option>
            <option value="indonesia">British</option>
            <option value="indonesia">Japan</option>
        </select>
        <textarea name="bloc" cols="24" rows="10">

        </textarea><br/>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>