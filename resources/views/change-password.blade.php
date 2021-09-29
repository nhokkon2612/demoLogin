<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css.css')}}">
</head>
<body>


<form action="" method="post">
    @csrf
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Current Password</b></label>
        <input type="password" placeholder="Enter Old Password" name="currentPassword" required>
        @error('currentPassword')
        <p> {{$message}}</p>
        @enderror
        <label for="psw"><b>New Password</b></label>
        <input type="password" placeholder="Enter New Password" name="newPassword" required>

        <label for="psw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Enter New Password" name="confirmPassword" required>

        <button type="submit">Update</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>

</body>
</html>
