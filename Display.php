<?php     
    include 'config.php';

$result=mysqli_query($bd,"SELECT * FROM prisoner");
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
}?>
