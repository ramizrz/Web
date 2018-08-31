<!DOCTYPE html>
<html>
	<head>
		<title>Your Registration Info</title>
		<style>
			table{
				border: 2px solid black;
			}
			table td{
				padding: 2px;
				border:1px;
			}
			table tr:nth-child(odd){
				border: 1px;
				background-color: cyan;
			}table tr:nth-child(even){
				border: 1px;
				background-color: magenta;
			}
		</style>
	</head>
	<body>
<?php
require_once 'function.php';
if($_POST){
	$rollno=$_POST['rollno'];
	$name=$_POST['sname'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$sem=$_POST['sem'];
	$semail=$_POST['semail'];
	$dept=$_POST['dept'];
	$batch=$_POST['batch'];
	if (!empty($rollno)&&!empty($name)&&!empty($gender)&&
            !empty($address)&&!empty($dob)&&!empty($sem)&&
            !empty($semail)&&!empty($dept)&&!empty($batch)){

        $link=mysqli_connect('localhost','root','root','AIKTC');
        if(!$link){
            echo'<br>Unable to connect to Database.'.mysqli_connect_error();
            die('unable to process');
        }
        $query="Insert into Students values ('$rollno','$name','$gender','$address','$dob','$sem','$semail','$dept','$batch')";
        $result=mysqli_query($link,$query);
        if(!$result){
            echo "<br>".mysqli_error($link);
        }
        else{
            echo '<br><h4>Your data is successfully inserted.</h4>';
        }

        $query="select * from Students";
        $result= mysqli_query($link,$query);
        mysqli_close($link);
        if(!$result){
            echo "<br>".mysqli_error($link);
        }
        else{
            ?>
            <table>
            <?php
            while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Roll NO</td>
                    <td><?php echo $row['rollno'];?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $row['gender'];?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $row['address'];?></td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td><?php echo $row['dob'];?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td><?php echo $row['sem'];?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><?php echo $row['dept'];?></td>
                </tr>
                <tr>
                    <td>Batch</td>
                    <td><?php echo $row['batch'];?></td>
                </tr>

    <?php
        }
        ?></table>
        <?php
            }
        }
        else{
            echo "<span>Something is Missing!</span>";
            header('Refresh:2,url=../registration.html');
        }
    }
    else{
        header('Refresh:0,url= ../registration.html');
    }
    ?>
    </body>

</html>