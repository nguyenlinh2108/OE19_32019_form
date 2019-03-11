<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "OE19_32019";

	//creat connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//check connection
	if ($conn->connect_error)
	{
		die("Connection failed: ".$connection->connect_error);
	}

	$sql = "SELECT * FROM test_user";
	$result = $conn->query($sql);

	if ($result->num_rows > 0)
	{
		//output ddata of each row
		while ($row = $result->fetch_assoc() ) {
			# code...
			echo "email: ".$row["email"]. " - Pass: ". $row["pass"]."<br>";
		}
	}else{
		echo ") result";
	}

	$pass = md5("123");
	$sql_insert = "INSERT INTO test_user VALUES ('123@gmail.com', '$pass')";
	if($conn->query($sql_insert) === TRUE)
	{
		echo "New record created successfully";
	}else{
		echo "Erro: ".$sql_insert."<br>".$conn->error;
	}
	$conn->close();
?>