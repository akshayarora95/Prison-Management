<?php     
    include 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
	$name = $_POST['name'];
	$number = $_POST['phoneno'];
    $result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM users WHERE username = '$username'"));
    if($result == 1)
   {    echo "The username you have chosen already exists!";
    }    else
    {        mysqli_query($bd,"INSERT INTO users(username, password, name,number) VALUES ('$username', '$password', '$name', '$number')");
        echo "<p>Congratulations! You have successfully registered! </p> 
        <p>Click <a href = \"management.html\">here</a> to go back to login.</p>";
    }
?>
