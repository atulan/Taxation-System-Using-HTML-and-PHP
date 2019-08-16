<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Tax";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed".$conn->connect_error);
}
else{
	echo "connected successfully";
}
$sql="desc Incometax";
if($conn->query($sql)==TRUE)
{
	echo "<br>";
    echo "connected to table";
    echo "<br>";
}
else{
	echo "error";
}
$name=$_POST['name'];
$Salary=$_POST['Salary'];
$Tax=$_POST['Tax'];
$Pf=$_POST['Pf'];
$Tax=($Salary)*($Tax/100);
$Pf=($Salary)*($Pf/100);
$Balance=($Salary)-($Tax+$Pf);
$sql11="insert into Incometax values('$name',$Salary,$Tax,$Pf,$Balance)";
if($conn->query($sql11)==TRUE){
	echo "inserted";
}
else{
	echo "error";
}
echo "<br>";
$sql11="select *from Incometax";
$result=$conn->query($sql11);
if($result->num_rows>0){
	echo "<b> Name     Salary     Tax    Pf    Balance</b><br>";
while($row= $result->fetch_assoc())
{
	echo $row["Name"]." ".$row["Salary"]." ".$row["Tax"]." ".$row["Pf"]." ".$row["Balance"]. "<br>";
}}
else{
echo "empty table";
}
$conn->close();
?>
