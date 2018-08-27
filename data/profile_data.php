
<?php
include_once('../lib/config.inc.php');
$Db = new MySqlConn;
$sql="SELECT * FROM hrd_person WHERE person_id='".$_POST['person_id']."'";
$result=$Db->query($sql);
foreach($result AS $row){
    echo $row['cid'];
}
