 <?php
//Connections
try {
    $handler = new PDO('mysql:host=localhost;dbname=ouail','root', '');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    exit($e->getMessage());
}
$name = $_POST['name'];     
$password = $_POST['pass']; 
if(!isset($erreur)){
//no error
	$sthandler = $handler->prepare("SELECT name FROM info WHERE name = :name");
	$sthandler->bindParam(':name', $name);
	$sthandler->execute();
	if($sthandler->rowCount() > 0){
		header("Location: cv.php");
	}
	else {
		$erreur="ce nom n'existe pas";
		header("Location: CVINSCRIPTION.html");
	}
}	