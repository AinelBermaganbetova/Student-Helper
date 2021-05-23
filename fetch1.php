<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=reglog", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
SELECT * FROM hobby
WHERE theUsername REGEXP '".$search."'
OR email REGEXP '".$search."'
OR a_hobby REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM hobby order by hobby_id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>
