<?php
    // echo $return = "Welcome NOMAN";
    
    include('../database.php');

    $query = "SELECT * FROM employee";
    $record = mysqli_query($connection, $query);
    $result_array = [];

    if(mysqli_num_rows($record) > 0){
        foreach($record as $row){
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else{
        echo $return = "No Records Found!";
    } 
?>