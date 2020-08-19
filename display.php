<?php
include("connection.php");

$readQuery = "SELECT * FROM client";
// $readQuery = "SELECT * FROM client WHERE ID='2'";

$readData =  mysqli_query($conn, $readQuery);
$totalRowsSelected =  mysqli_num_rows($readData);
// echo "Total Rows Selected Are " . $totalRowsSelected . "<br>";

// $result = mysqli_fetch_assoc($readData);
// $resultlength = count($result);  
// echo "Result Length Is " . $resultlength . "<br>";
// echo $result['name'] . " " . $result['email'] . " " . $result['phone_number']. "<br>";
?>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
</tr>

<?php
if ($readData) {
    // $i = 1;
    // echo "Data Read";
    while ($result = mysqli_fetch_assoc($readData)) {
        echo "<tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone_number']."</td>
        </tr>";
        // $i++;
    }
} else {
    // echo "Data Not Read";
}
// echo $result['name'] . " " . $result['email'] . " " . $result['phone_number'];
?>
<!-- <script>
console.log("YES");
</script> -->
</table>