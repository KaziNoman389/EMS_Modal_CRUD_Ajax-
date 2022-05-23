<?php

include('../database.php');

if(isset($_POST['checking_add'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $gender =  $_POST['gender'];
    $birth_date =  $_POST['birth_date'];
    $occupation =  $_POST['occupation'];
    $maritalStatus =  $_POST['maritalStatus'];
    $nationality =  $_POST['nationality'];
    $present_address =  $_POST['present_address'];
    $permanent_address =  $_POST['permanent_address'];

    $query = "INSERT INTO `employee`(
            `name`, 
            `email`, 
            `phone`, 
            `gender`, 
            `birth_date`, 
            `occupation`, 
            `marital_status`, 
            `nationality`, 
            `present_address`, 
            `permanent_address`
        ) 
        VALUES (
            '$name',
            '$email',
            '$phone',
            '$gender',
            '$birth_date',
            '$occupation',
            '$maritalStatus',
            '$nationality',
            '$present_address',
            '$permanent_address'
        )";

    $record = mysqli_query($connection, $query);

    if($record){
        echo $return = "Inserted successfully";
    }else{
        echo $return = "Something is wrong";
    }
}

?>