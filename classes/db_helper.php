<?php

function getTotalData($table) {
    $conn = new mysqli("localhost", "zizo", "123", "hospital");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from ".$table;

    $result = $conn->query($sql);
    
    return $result;
	
	
	 
}

function getTotalNumber($tableName){
	$conn = new mysqli("localhost", "zizo", "123", "hospital");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	$sql = "select * from ".$tableName;
	
	$result = $conn->query($sql);
	
	return $result->num_rows;
	$conn->close();

}

function getTotalReplies($id){
	
	$conn = new mysqli("localhost", "zizo", "123", "hospital");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	$sql = "select * from replies where question_id=".$id;
	
	$result = $conn->query($sql);
	
	return $result->num_rows;
}

?>