<?php $pass="";
if(isset($_POST['pass_retrive']))
{
 $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS));
 $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_SPECIAL_CHARS));
 $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_SPECIAL_CHARS));

  if (empty($name)) {
   echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 } 
  else if (empty($surname)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
  else if (empty($question)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM farmers WHERE name='$name' AND question='$question'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['name']!=$name AND $data['question']!=$question)
 {
 	echo "<script> alert ('Sorry no password found for this user'); window.location=('index.php')</script>";
	
 }
 elseif($data['name']==$name AND $data['question']==$question)
 {
 echo "<script> alert ('Password found');</script>";
 $pass=$data['password'];
 
 }
 }
}
//end of 1st code  

if(isset($_POST['pass_retrive1']))
{
 $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS));
 $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_SPECIAL_CHARS));
 $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_SPECIAL_CHARS));

  if (empty($name)) {
   echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 } 
  else if (empty($surname)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
  else if (empty($question)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM helpers WHERE name='$name' AND question='$question'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['name']!=$name AND $data['question']!=$question)
 {
 	echo "<script> alert ('Sorry no password found for this user'); window.location=('index.php')</script>";
	
 }
 elseif($data['name']==$name AND $data['question']==$question)
 {
 echo "<script> alert ('Password found');</script>";
 $pass=$data['password'];
 
 }
 }
}
//end of 2nd code

if(isset($_POST['pass_retrive2']))
{
 $name= trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS));
 $surname= trim(filter_input(INPUT_POST,"surname",FILTER_SANITIZE_SPECIAL_CHARS));
 $question= trim(filter_input(INPUT_POST,"question",FILTER_SANITIZE_SPECIAL_CHARS));

  if (empty($name)) {
   echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 } 
  else if (empty($surname)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
  else if (empty($question)) {
    echo "<script> alert ('Something is wrong try again later');window.location=('index.php')</script>";
 }
 else 
{
 $select = $pdo->prepare("SELECT * FROM buyer WHERE name='$name' AND question='$question'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 
 if($data['name']!=$name AND $data['question']!=$question)
 {
 	echo "<script> alert ('Sorry no password found for this user'); window.location=('index.php')</script>";
	
 }
 elseif($data['name']==$name AND $data['question']==$question)
 {
 echo "<script> alert ('Password found');</script>";
 $pass=$data['password'];
 
 }
 }
}
//end of final code
?>
