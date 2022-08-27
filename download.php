<?php 
session_start();
require('./filtering.php');
if(isset($SUBMMITED_ROWS)){
    $query = $SUBMMITED_ROWS;
    if($query->num_rows >0){
        $delimiter = ","; 
        $filename = "members-data_" . date('Y-m-d') . ".csv"; 
         
        // Create a file pointer 
        $f = fopen('php://memory', 'w'); 

        $fields = array( 'cfaName',
         'hiredate',
         'track name',
         'errorCode',
         'errorCategory',
         'start Time',
         'end Time');

         fputcsv($f, $fields, $delimiter); 

         while($row = $query->fetch_assoc()){
            //$status = ($row['status'] == 1)?'Active':'Inactive';
            $lineData = array($row['cfaName'],
                            $row['filedate'],
                            $row['trackName'],
                            $row['errorCode'],
                            $row['errorCategory'],
                            $row['startTimeStamp'],
                            $row['endTimeStamp']
                        ); 
                        fputcsv($f, $lineData, $delimiter); 
         }
         // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
    echo "done";
    }
}

echo "No query";


?>