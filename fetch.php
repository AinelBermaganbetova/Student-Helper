<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=reglog", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT tutor_ads.tutor_fullname, tutor_ads.the_email, tutor_ads.the_subject, tutor_ads.the_topic, tutor_ads.the_time, tutor_ads.the_price
 FROM tutor_ads
 WHERE tutor_fullname REGEXP '".$search."'
 OR the_subject REGEXP '".$search."'
 OR the_topic REGEXP '".$search."'
 OR the_price REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT tutor_ads.tutor_fullname, tutor_ads.the_email, tutor_ads.the_subject, tutor_ads.the_topic, tutor_ads.the_time, tutor_ads.the_price
 FROM tutor_ads ORDER BY tutorads_id
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
