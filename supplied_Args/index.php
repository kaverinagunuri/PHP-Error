<?php
$Link = mysqli_connect('localhost', 'dbuser', '123', 'kaveri');
$Query = mysqli_query($Link,"SELECT FirstName FROM Pdo");
//$Result = mysqli_query($Link, $Query);
//$Row = mysqli_fetch_array($Result);
//$Name = $Row['Name'];
//echo $Name;
while($Row=  mysqli_fetch_assoc($Query)){
    echo $Row['FirstName'].'<br>';
}
?>
