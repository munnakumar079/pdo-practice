<?php 

$dbname = 'mysql:host=localhost; dbname=test';
$username='root';
$password='';

$connection = new pdo($dbname , $username,$password );

$query = $connection->query('Select * from student');

while($row =$query->fetch()){
    echo '<pre>';
print_r($row);
echo '</pre>';
}


    

?>