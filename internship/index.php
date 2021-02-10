<!DOCTYPE html>
<html>
<head>
	<title>task edumonk</title>

	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<!-- NAVIATION BAR -->
	<div class="content-wrap">
	<div class="menu-bar">
		<ul>
			<li><a href="#" target="_blank">home</a></li>
			<li><a href="#" target="_blank">courses</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#" target="_blank">maths</a></li>
					<li><a href="#" target="_blank">science</a></li>
					<li><a href="#" target="_blank">commerce</a></li>
				</ul>	
			</div>
			</li>
			<li><a href="#" target="_blank">institutions</a>
			<div class="sub-menu-1">
				<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $dbname = "edumonk"; 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = $conn->prepare("SELECT id, institution_name FROM institutions");  
 
$sql->execute();
$c =  $sql->fetchAll(12);
//print_r($c);
echo "<ul>";
foreach($c as $k=>$v){
echo "<li><a href='#' target='_blank'>".$v."</a></li>";
}
echo "</ul>";

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>	
			</div>
		</li>
			<li><a href="#" target="_blank">virtual lab</a>
			<div class="sub-menu-1">
				<ul>
					<li><a href="#" target="_blank">maths</a></li>
					<li><a href="#" target="_blank">science</a></li>
					<li><a href="#" target="_blank">commerce</a></li>
				</ul>	
			</div>
		</li>
		</ul>
	</div>
</div>

	<!-- main content -->
	<div class="content-wrap">
		<div class="main-text">

        <h1>edumonk</h1>
        <h2>learn&practice! its free to all! global access!</h2>

        <p>edumonk is a open source lerning platform. in edumonk you can enroll courses provided by pioneering institutions around the world.you can get free access to all course materials and its life long free. in edumonk students can access free virtual laboratoris which will let you practice and the virtual laboratory is also open to all.</p>

        <p>edumonk is a platform where students learn their course from volunteering institutions. let`s start learning today! </p>

      </div>
  </div>
<div class="content-wrap">
   <h2>why edumonk is best!</h2>
   <section class="volunteers">
          <img src="images/volunteers.jpg" alt="linkedin course completion certifications">
          <h3>volunteering institutions...</h3>
          <p>top performing institutions are volunteering. iit, nit, vit etc....</p>
          <p>students can learn with top level educational institutions. edumonk is the only platform which provides free access to these level top performing educational institutions. in edumonk students can get full access to thier course and its lifetime free!</p>
    </section>

    <section class="volunteers">
          <img src="images/volunteers.jpg" alt="linkedin course completion certifications">
          <h3>acces to virtual laboratories...</h3>
          <p>acces to virtual laboratories. given by edumonk its lifetime free!!!</p>
          <p>students can learn with real time virtual laboratories. edumonk is the only platform which provides free access to these level top performing virtual laboratories. in edumonk students can get full access to thier virtual laboratories and its lifetime free!</p>
        </section>
</div>
<footer>
        <div class="content-wrap footer">
        <h2>connect with us!</h2>

        <!-- Social media and contact links. Add or remove any networks. -->
        <ul class="contact-list">
          <li><a href="https://www.instagram.com/kathiravan1522/" target="_blank">instagram</a></li>
          <li><a href="https://www.linkedin.com/in/kathirhema15/" target="_blank">LinkedIn</a></li>
          <li><a href="https://www.facebook.com/kathir.avan.9216778/" target="_blank">Facebook</a></li>
        </ul>
      </div>
      </footer>




     
</body>
</html>