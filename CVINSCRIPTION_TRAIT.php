 <?php
 session_start();
//Connections
try {
    $handler = new PDO('mysql:host=localhost;dbname=ouail','root', '');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    exit($e->getMessage());
}
$name = htmlspecialchars($_POST['name']);  
$email = htmlspecialchars($_POST['email']);   
$password = htmlspecialchars($_POST['pass']); 
$password1 = htmlspecialchars($_POST['passcom']);
if(!isset($error)){
//no error
	$sthandler = $handler->prepare("SELECT name FROM info WHERE name = :name");
	$sthandler->bindParam(':name', $name);
	$sthandler->execute();
	if($sthandler->rowCount() > 0){
		echo "exists! cannot insert";
	} 
	else {
    //Securly insert into database
    $sql = 'INSERT INTO info (name ,email, pass) VALUES (:name,:email,:pass)';    
    $query = $handler->prepare($sql);

    $query->execute(array(

    ':name' => $name,
    ':email' => $email,
    ':pass' => $password

    ));
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['pass']=$password;
	
	setcookie('name', $_POST['name'], time() + 24*3600, null, null, false, true);
	setcookie('pass', $_POST['pass'], time() + 24*3600, null, null, false, true);
	header("Location: cv.php");
	}
}
else{
echo "error occured: ".$error;
exit();
}
?>