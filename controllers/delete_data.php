<?php 

$id =$_POST['id'];
$database->delete('testing',$id);
header('location:show_data');