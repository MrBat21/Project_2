<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="description"	content="COS10026 Assignment Part 2 manage page">
	<meta name="keywords"		content="Swinburne COS10026 Assignment Part 2 manage page">	
	<title>Code Crafters</title>
</head>
<body>


<?php
include 'settings.php';

$connection = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>

<?php
// Check for form submissions:
    if(isset($_POST['list_all'])) {
        $result = mysqli_query($connection, "SELECT * FROM eoi");
        displayResults($result);
    }
    
    if(isset($_POST['list_by_job'])) {
        $ref_num = mysqli_real_escape_string($connection, $_POST['ref_num']);
        $result = mysqli_query($connection, "SELECT * FROM eoi WHERE Job Reference number='$ref_num'");
        displayResults($result);
    }
    
    if(isset($_POST['list_by_name'])) {
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        $result = mysqli_query($connection, "SELECT * FROM eoi WHERE First name='$first_name' OR Last name='$last_name'");
        displayResults($result);
    }
    
    if(isset($_POST['change_status'])) {
        $eoi_number = mysqli_real_escape_string($connection, $_POST['eoi_number']);
        $status = mysqli_real_escape_string($connection, $_POST['status']);
        mysqli_query($connection, "UPDATE eoi SET Status='$status' WHERE EOInumber='$eoi_number'");
        echo "Status updated successfully!";
    }
    
    if(isset($_POST['delete_by_job'])) {
        $del_ref_num = mysqli_real_escape_string($connection, $_POST['del_ref_num']);
        mysqli_query($connection, "DELETE FROM eoi WHERE Job Reference number='$del_ref_num'");
        echo "EOIs deleted successfully!";
    }
    
    // Function to display the results in a table:


    function displayResults($result) {
        global $connection;  // This allows access to $connection inside the function
    
        echo "<table border='1'>
        <tr>
        <th>EOI Number</th>
        <th>Job Reference Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <!-- Add other columns as needed -->
        </tr>";
        
        if ($result) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['EOInumber'] . "</td>";
                echo "<td>" . $row['Job Reference number'] . "</td>";  // Consider renaming columns without spaces
                echo "<td>" . $row['First name'] . "</td>";             // Consider renaming columns without spaces
                echo "<td>" . $row['Last name'] . "</td>";              // Consider renaming columns without spaces
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
        echo "</table>";  // Closing table tag
    }
    
?>

</body>
</html>