<?php         include 'config.php';
    $id = $_POST['id'];
$result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM prisoner WHERE id = '$id'"));
if($result == 1)
{
 $result=mysqli_query($bd,"SELECT * FROM prisoner WHERE id = '$id'");
 while($row=mysqli_fetch_array($result))
 { echo "Prisoner Id:".$row[0]."<br>";
 echo "Name:".$row[1]."<br>";
 echo "Age:".$row[2]."<br>";
 echo "Sex:".$row[3]."<br>";
 echo "Offence:".$row[4]."<br>";
 echo "Sentence:".$row[5]."<br>";
 echo "Prison Name:".$row[6]."<br>";
 echo "Release Date:".$row[7]."<br>";
 }}
else
{ echo "Prisoner does not exist";
}
?>
