<?php
$Firstname=$_REQUEST['firstName'];
$Lastname=$_REQUEST['lastName'];
$Email=$_REQUEST['email'];
$Gender=$_REQUEST['Gender'];
$number=$_REQUEST['number'];
$address=$_REQUEST['Address'];


if(isset($_POST['btn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="car-tools";

    $conn = mysqli_connect($host,$user,$password,$db);


    mysqli_select_db($conn,$db);

    $insert="INSERT into form values('$Firstname', '$Lastname', '$Email', '$Gender', '$number', '$address')";
    
    $result= mysqli_query($conn,$insert);

if($result){

    print("Done");
}else{

  print("Not Done");

}

mysqli_close($conn);

}















?>