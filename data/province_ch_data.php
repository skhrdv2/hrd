<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
$sql="SELECT province_id ,province_name_th FROM hrd_province";
$result=$Db->query($sql);
   //วนลูปแสดงข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
   foreach($result as $row) {
                
    //เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
    $json_result[] = [
        'id'=>$row['province_id'],
        'name'=>$row['province_name_th'],
    ];
   
   }
   echo json_encode($json_result);
