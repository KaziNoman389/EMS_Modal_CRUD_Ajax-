<?php

include('../database.php');

if(isset($_POST['checking_view'])){
    // echo $return = "Data is found !!";

    $emp_id = $_POST['emp_id'];
    $query_view = "SELECT * FROM `employee` WHERE `id` = '$emp_id' ";
    $record_view = mysqli_query($connection, $query_view);
    $result_array = [];

    if(mysqli_num_rows($record_view)>0){
        foreach($record_view as $row){
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }else{
        echo $return = "No Records Found!";
    }
}

?>