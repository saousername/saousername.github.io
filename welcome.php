<html>
<head>
  <link rel="stylesheet" href="styling.css">
</head>
<body class='dbody'>

<?php

// Classes
class User {
	public $username;
	public $email;
	public $passworda;
	
	function __construct($username, $email, $passworda) {
		$this->username = $username;
		$this->email = $email;
		$this->passworda = $passworda;
	}
}

// Authentication
$sao = new User('sao','account@saomail.me','pass');
echo $sao->username;

$pname = $sao->username;
$pemail = $sao->email;
$ppassword = $sao->passworda;
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST['password'];

if ($name == $pname) {
	if ($email == $pemail) {
		if ($password == $ppassword) {
			echo 'Login Success!';
		} else {
			header("Location:https://cryhosting.net/sao/index.php");
		}
	} else {
		header("Location:https://cryhosting.net/sao/index.php");
	}
} else {
	header("Location:https://cryhosting.net/sao/index.php");
}


?>

<h1 class='header'>SAOPortal<br></h1>
<h2 class='subheader'>Welcome back, <?php echo $_POST["name"]; ?>!<br></h2>
<h3 class='small'>Your email address is: <?php echo $_POST["email"]; ?></h3>
<form action='panel.php' method='POST'>
	<input type="hidden" name="name" value=<?php echo $pname ?>>
	<input type="hidden" name="email" value=<?php echo $email ?>>
	<input type="hidden" name="password" value=<?php echo $password ?>>
	<input type='submit' class='block' value='Custom Panel'>
</form>

</body>
</html>
