<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
if(isset($_GET['show_province'])){

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
}
   //ตรวจสอบว่า มีค่า ตัวแปร $_GET['province_id'] เข้ามาหรือไม่  //แสดงรายชืออำเภอ
	if(isset($_GET['province_id'])){

		//กำหนดให้ตัวแปร $province_id มีค่าเท่ากับ $_GET['province_id]
		$province_id = $_GET['province_id'];
		
		//คำสั่ง SQL เลือก AMPHUR_ID และ  AMPHUR_NAME ที่มี PROVINCE_ID เท่ากับ $province_id
		$sql = "SELECT amphur_id,amphur_name FROM hrd_amphur WHERE province_id =  ".$province_id." ";
		
		//ประมวณผลคำสั่ง SQL
		$result = $Db->query($sql);

		//ตรวจสอบ จำนวนข้อมูลที่ได้ มีค่ามากกว่า  0 หรือไม่
	//	if ($result->num_rows > 0) {
			
			//วนลูปนำข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
            foreach($result as $row) {
				
				//เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
				$json_result[] = [
					'id'=>$row['amphur_id'],
					'name'=>$row['amphur_name'],
				];
		//	}
			
			//ใช้ Function json_encode แปลงข้อมูลในตัวแปร $json_result ให้เป็นรูปแบบ Json
			
			
        } 
        echo json_encode($json_result);
	}
	

	//ตรวจสอบว่า มีค่า ตัวแปร $_GET['province_id'] เข้ามาหรือไม่  //แสดงรายชืออำเภอ
	if(isset($_GET['person_id'])){

		//กำหนดให้ตัวแปร $province_id มีค่าเท่ากับ $_GET['province_id]
		$person_id = $_GET['person_id'];
		
		//คำสั่ง SQL เลือก AMPHUR_ID และ  AMPHUR_NAME ที่มี PROVINCE_ID เท่ากับ $province_id
		$sql = "SELECT ah.* FROM hrd_person ps 
		inner join hrd_amphur ah ON ah.province_id =ps.province_id 
		WHERE ps.person_id =  '".$person_id."'
		
		";
		
		//ประมวณผลคำสั่ง SQL
		$result = $Db->query($sql);

		//ตรวจสอบ จำนวนข้อมูลที่ได้ มีค่ามากกว่า  0 หรือไม่
	//	if ($result->num_rows > 0) {
			
			//วนลูปนำข้อมูลที่ได้ เก็บไว้ในตัวแปร $row
            foreach($result as $row) {
				
				//เก็บข้อมูลที่ได้ไว้ในตัวแปร Array 
				$json_result[] = [
					'id'=>$row['amphur_id'],
					'name'=>$row['amphur_name'],
				];
		//	}
			
			//ใช้ Function json_encode แปลงข้อมูลในตัวแปร $json_result ให้เป็นรูปแบบ Json
			
			
        } 
        echo json_encode($json_result);
	}