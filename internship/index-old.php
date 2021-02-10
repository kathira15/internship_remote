<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $dbname = "edumonk";  
      


// $sql = "SELECT id, institution_name FROM instituion";
// $insitution_name = $conn->query($sql);
// var_dump($insitution_name);

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conn->prepare("SELECT id, institution_name FROM institutions");
  

 
 $sql->execute();
$c =  $sql->fetchAll(12);
//print_r($c);
echo "<select id='institution' name='institution'>
<option value=''>Select Institutions</option>";
foreach($c as $k=>$v){
echo"<option value='".$k."'>".$v."</option>";
}
echo "</select>";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}