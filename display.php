<?php
include("connection.php");

$readQuery = "SELECT * FROM client";

$readData =  mysqli_query($conn, $readQuery);
if ($readData) {
    echo "Data Read";
} else {
    echo "Data Not Read";
}
?>
<!-- <script>
    console.log("YES");
</script> -->