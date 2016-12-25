<?php     
    include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$offence = $_POST['offence'];
   $sentence = $_POST['sentence'];
    $prison =$_POST['prison'];
$release =($_POST['date']);
    $result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM prisoner WHERE id = '$id'"));
    if($result == 1)
    {        echo "The prisoner already exists!";
    }
    else
    {      mysqli_query($bd,"INSERT INTO prisoner VALUES ('$id', '$name', '$age', '$sex','$offence','$sentence','$prison','$release')");
        mysqli_query($bd,"INSERT INTO visitor(id) VALUES ('$id' )"); 
        echo "Prisoner registered";
         $result=mysqli_query($bd,"SELECT * FROM prisoner  WHERE id = '$id'");     
  while($row=mysqli_fetch_array($result))
{
echo "<hr>";
echo "Prisoner Id:".$row[0]." <br>";
echo "Name:".$row[1]."<br>";
echo "Age:".$row[2]."<br>";
echo "Sex:".$row[3]."<br>";
echo "Offence:".$row[4]."<br>";
echo "Sentence:".$row[5]."<br>";
echo "Prison Name:".$row[6]."<br>";
echo "Release Date:".$row[7]."<br>";
}     }
?>
