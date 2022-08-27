<?php
session_start();
require('./query.php'); 
$Query = new query();
$SUBMMITED_ROWS;
if(isset($_POST['startDate']) && isset($_POST['endDate'])){

   // echo "<script> alert('".$_POST['startDate']." + ".$_POST['endDate']." ')</script>";
    $ErrorsQuery = $Query->datedError($_POST['startDate'],$_POST['endDate']);
    $SUBMMITED_ROWS = $ErrorsQuery;
    $PRINTABLE_ROWS = $ErrorsQuery;
    $_SESSION['query'] = $PRINTABLE_ROWS;
}
else {
$allErrorsQuery = $Query->allError();
$SUBMMITED_ROWS = $allErrorsQuery;
}

?>