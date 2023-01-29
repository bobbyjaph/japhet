<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $phone_no = $_POST['phone_no'];
    $date = $_POST['dob'];
    $conn = mysqli_connect('localhost', 'root' '', 'test');
    if(!$conn) {
        die("ERROR: connection failed; " .mysqli_connect_error());
    } else {
        $sql = "INSERT INTO `sam` (`username`, `phone_no`,`dob`) "
    }
}









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
<form>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="phone_no" placeholder="password">
    <input type="date" name="dob">
    <input type="submit" name='submit'>
</form> 
</section>
</body>
</html>