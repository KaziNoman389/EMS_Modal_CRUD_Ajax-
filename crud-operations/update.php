<?php

include('../database.php');

if(isset($_POST['checking_update'])){
    // echo $return = "Data is found !!";

    $emp_id = $_POST['emp_id'];
    $query_update = "SELECT * FROM `employee` WHERE `id` = '$emp_id' ";
    $record_update= mysqli_query($connection, $query_update);
    $result_array = [];

    if(mysqli_num_rows($record_update)>0){
        foreach($record_update as $row){
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }else{
        echo $return = "No Records Found!";
    }
}

// if(isset($_POST['checking_update'])){
//     $emp_id = $_POST['emp_id'];
//     $name =  $_POST['name'];
//     $email =  $_POST['email'];
//     $phone =  $_POST['phone'];
//     $gender =  $_POST['gender'];
//     $birth_date =  $_POST['birth_date'];
//     $occupation =  $_POST['occupation'];
//     $maritalStatus =  $_POST['maritalStatus'];
//     $nationality =  $_POST['nationality'];
//     $present_address =  $_POST['present_address'];
//     $permanent_address =  $_POST['permanent_address'];

//     $query_update = " UPDATE `employee` SET 
//         `name`='$name',
//         `email`='$email',
//         `phone`='$phone',
//         `gender`='$gender',
//         `birth_date`='$birth_date',
//         `occupation`='$occupation',
//         `marital_status`='$maritalStatus',
//         `nationality`='$nationality',
//         `present_address`='$present_address',
//         `permanent_address`='$permanent_address' WHERE `id`= '$emp_id' ";

//     $record_update = mysqli_query($connection, $query_update);

//     if($record_update){
//         echo $return = "Updated successfully";
//     }else{
//         echo $return = "Something is wrong";
//     }
// }

?>