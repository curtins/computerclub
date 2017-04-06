
<?php
 
$mysqli = new mysqli("localhost", "root", "", "autocomplete");

 

$sql = "SELECT memberships.id, memberships.last_name, memberships.first_name, gvr_number FROM memberships 
		 
        WHERE last_name LIKE '%".$_GET['q']."%'
		LIMIT 10"; 
$result = $mysqli->query($sql);

$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id'], 'text'=>$row['id'] . ' - ' . $row['last_name'] . ', ' . $row['first_name'] . ' - ' . $row['gvr_number']        ];
}
 
echo json_encode($json);