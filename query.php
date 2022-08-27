<?php
class query
{
    private $my_conn ;
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sig";

// Create connection
        $this->my_conn= new mysqli($servername, $username, $password,$dbname);

// Check connection
        if ($this->my_conn->connect_error) {

            echo "unable to connect to server";
            die("Connection failed: " . $this->my_conn->connect_error);
        }


    }

function allError() {
    $query = $this->my_conn->query("SELECT * FROM ERRORS"); 
    return $query;
}

function datedError($start,$end){
    $query = $this->my_conn->query("SELECT * FROM ERRORS 
    WHERE startTimeStamp >= '$start' AND endTimeStamp <= '$end'"); 
    return $query;
}
}