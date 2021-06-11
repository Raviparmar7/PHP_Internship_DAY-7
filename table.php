<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_php");
 //Query
$q = mysqli_query($connection,"select * from tbl_student") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($q)){
 
    echo "<tr>";
    echo "<td>{$row['student_id']}</td>";
    echo "<td>{$row['student_name']}</td>";
    echo "<td>{$row['student_gender']}</td>";
    echo "<td>{$row['student_mobile']}</td>";
    echo "<td><a href='delete.php?deleteid={$row['student_id']}'>Delete</a></td>"; 
    echo "</tr>";
}
echo "</table>";
echo"<a href='insertrecord.php'>Add Record</a>";
?>