<?php
include 'core/dbh.php';
include'overall/uptonav.php';
$sql="SELECT * FROM score";
$result=$conn->query($sql);
echo "<table>";

while($row=$result->fetch_assoc()){   //
echo "<div class='container'><tr><td><p class='flow-text'>".$row['team']."</p></td><td><p class='flow-text'>".$row['score']."</p></td></tr></div>";
}

echo "</table>";
$sql1="SELECT * FROM register";
$result=$conn->query($sql1);
echo "<table>";

while($row=$result->fetch_assoc()){   //
echo "<div class='container'><tr><td><p class='flow-text'>".$row['team']."</p></td><td><p class='flow-text'>".$row['email']."</p></td></tr></div><td><p class='flow-text'>".$row['email']."</p></td></tr></div>";
}
echo "</table>";
include'overall/footer.php';
 ?>