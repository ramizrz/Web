<!DOCTYPE html>
<html>
<head>
<title> MY PHP Example ata AIKTC</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php

echo '<h1>Welcome to PHP</h1>';
if($_POST){
    $username=$_POST['username'];
$brand=$_POST['brand'];
echo "Thankyou , $username You have voted for $brand";


}

else{
    echo <<<_END


<form method="post"
action="myexample.php">
<br><label for="user">User
Name: </label>
<input type="text" name="username" id="username"/><br>
<br><label>Please vote for your favorite mobile brand</label><br>
<br><label><input type="radio" name="brand" value="Nokia"/> Nokia</label>
<br><label><input type="radio" name="brand" value="Apple"/>Apple</label>
<br><label><input type="radio" name="brand" value="samsung"/>Samsung</label>
<br><label><input type="radio" name="brand" value="MI"/>MI</label>
<br><br><input type="submit" value="Vote"/>
</form>
_END;
}
?>
</body>
</html>