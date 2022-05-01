<?php
session_start();

if (isset($_POST['submit']))
{
	$name = $_POST['username'];
	$password = $_POST['password'];

	$db = new PDO('mysql:dbname=adheprint;host=localhost;port=3306', 'root', 'root');

	$sql = "SELECT * FROM users where username = '$name'";
	$result = $db->prepare($sql);
	$result->execute();

	if($result->rowCount() > 0)
	{
		$data = $result->fetchAll();
		if (password_verify($password, $data[0]["password"]))
		{
			header ("location:paprec/products.php");
			$_SESSION['username'] = $name;
		}
	}

	else
	{
		header ("location:connect.php");
	}
}

?>