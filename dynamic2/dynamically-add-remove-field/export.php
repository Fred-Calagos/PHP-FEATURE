<?php
    include "config.php";

    function filterData(&$str){
        $str = preg_replace("/\t/","\\t", $str);
        $str = preg_replace("/\r?\n/","\\n", $str);
        if(strstr($str,'"')) $str= '"'. str_replace('"','""',$str).'"';
    }

    $filename = "members-data_". date('Y-m-d'). ".xls";

    $fields = array("ID","FIRST NAME", "LAST NAME", "SKILL");

    $excelData = implode("\t",array_values($fields)). "\n";

    $query = $con->query("SELECT * FROM tblskills ORDER BY id ASC");
    if($query-> num_rows > 0){
        while($row = $query-> fetch_assoc()){
            $lineData = array($row['id'],$row['name'], $row['lname'], $row['skill']);
            array_walk($lineData, 'filterData');
            $excelData .= implode("\t",array_values($lineData)). "\n";
        }
    }else{
        $excelData .= 'No Record Found...' . "\n";
    }

    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");

    echo $excelData;

    exit; 
?>

