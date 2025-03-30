<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="styles/manage_style.css">
    <title>Management</title>
    </head>
    <style>
    </style>

<?php
    include 'header.inc';
?>
<body class="manage-body">
    <?php 
        include 'menu.inc';
    ?>
    <hr>

    <h1 style="font-size:40px; text-align: center; justify-content: center;" class="Mana">Management Page</h1>
    <?php
        require_once "settings.php";
        $conn = @mysqli_connect($host, $username, $password, $sql_db); 

        error_reporting(0);
        ini_set('display_errors', 0);

        if ($conn) { 
            $query = "SELECT * FROM eoi"; 
            $result = mysqli_query($conn, $query); 

        if ($result) { 
    
        } else {
            echo "<p>There is no information to display</p>";
        }

        mysqli_close($conn); 
        } else {
        echo "<p>Unable to connect to the db.</p>"; 
        }
    ?>
    <div class="phpmeminfo">
    <div class="editForm" id="editForm" style="display:none;">
    <h2>Edit Record</h2>
    <form method="POST">
        <input type="hidden" id="edit_id" name="edit_id">
        <label>First Name: <input type="text" id="edit_first_name" name="edit_first_name" required></label><br>
        <label>Last Name: <input type="text" id="edit_last_name" name="edit_last_name" required></label><br>
        <label>Email: <input type="email" id="edit_email" name="edit_email" required></label><br>
        <label>Phone: <input type="text" id="edit_phone" name="edit_phone" required></label><br>
        <label>Status:
            <select class="edit_status" id="edit_status" name="edit_status" required>
                <option value="New">New</option>
                <option value="Current">Current</option>
                <option value="Final">Final</option>
            </select>
        </label><br>
        <input class="btn" type="submit" name="update" value="Update">
        <button class="btn" type="button" onclick="document.getElementById('editForm').style.display='none';">Cancel</button>
    </form>
    </div>

    <table border="1" class="table" >
        <caption class="meminfo" style="font-size: 30px; color: white; padding-bottom: 10px;">Members information</caption>
        <?php
            echo "<tr>";
            echo "<th>EOI Number</th> 
                <th>Job Reference Number</th>
                <th>First Name</th> 
                <th>Last Name</th> <th>DOB</th> 
                <th>Gender</th> 
                <th>Street Address</th> 
                <th>Suburb/town</th> 
                <th>State</th> 
                <th>Postcode</th> 
                <th>Email</th> 
                <th>Phone</th>
                <th>Skills</th> 
                <th>Other skills</th> 
                <th>Status</th>
                <th>Actions</th>" ;
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $row["EOInumber"] ."</td>";
                echo "<td>". $row["JobReferenceNumber"] ."</td>";
                echo "<td>". $row["FirstName"] ."</td>";    
                echo "<td>". $row["LastName"] ."</td>";
                echo "<td>". $row["DateOfBirth"] ."</td>";
                echo "<td>". $row["Gender"] ."</td>";
                echo "<td>". $row["StreetAddress"] ."</td>";
                echo "<td>". $row["Suburb"] ."</td>";    
                echo "<td>". $row["State"] ."</td>";
                echo "<td>". $row["Postcode"] ."</td>";
                echo "<td>". $row["EmailAddress"] ."</td>";
                echo "<td>". $row["PhoneNumber"] ."</td>";
                echo "<td>". $row["Skill1"] ."</td>";    
                echo "<td>". $row["OtherSkills"] ."</td>";
                echo "<td>". $row["Status"] ."</td>";

                echo "<td>
            <div class = 'action-buttons'>
             <form method='POST' style='display:inline-block;'>
                <input type='hidden' name='delete_id' value='" . $row["EOInumber"] . "'>
                <input type='submit' class='delete-btn'  name='delete' value='Delete' onclick='return confirm(\"Are you sure?\")'>
            </form>
            <button class='edit-btn' onclick='editRecord(" . $row["EOInumber"] . ", \"" . $row["FirstName"] . "\", \"" . $row["LastName"] . "\", \"" . $row["EmailAddress"] . "\", \"" . $row["PhoneNumber"] . "\", \"" . $row["Status"] . "\")'>Edit</button>
            <div>
            </td>";
                echo "</tr>";
            }
        ?>
    </table> 
    </div>
    <div class="search_mem_info">
        <form method="POST" action="manage.php">
            <div class="search-wrapper">
            <div class="search-box">
            <h2>Search for memeber by job reference number</h2>
            <label for="search_eoi_by_job_ref">Please enter a job reference number here:</label>
            <input type="text" class="search-container" name="search_eoi_by_job_ref"><br>
            </div>
        
            <div class="search-box">
            <h2>Search for member by name</h2>
            <label for="search_eoi_by_name">Please enter a name here:</label>
            <input type="text" class="search-container name-box" name="search_eoi_by_name"><br>
            </div>
            </div>
            <input type="submit" class="search-container button" value="Search">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search_eoi_by_job_ref = isset($_POST['search_eoi_by_job_ref']) ? htmlspecialchars(trim($_POST['search_eoi_by_job_ref'])) : '';
                $search_eoi_by_name = isset($_POST['search_eoi_by_name']) ? htmlspecialchars(trim($_POST['search_eoi_by_name'])) : '';
                
                require_once "settings.php";
                $conn = @mysqli_connect($host, $username, $password, $sql_db);

                if (!$conn) {
                    die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
                }
                $result = null;
                
                if (!empty($search_eoi_by_job_ref)) { 
                    $query = "SELECT * FROM eoi WHERE JobReferenceNumber = ?";
                    $stmt = mysqli_prepare($conn, $query);
                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "s", $search_eoi_by_job_ref);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result( $stmt);
                }   else {
                    die("<p>Query preparation failed: " . mysqli_error($conn) . "</p>");
                    }
                }
                if (!empty($search_eoi_by_name)) {
                    $query = "SELECT * FROM eoi WHERE FirstName LIKE ? OR LastName LIKE ?";
                    $stmt = mysqli_prepare($conn, $query);
                    if ($stmt) {
                    $search_eoi_by_name = "%" . $search_eoi_by_name . "%";
                    mysqli_stmt_bind_param($stmt, "ss", $search_eoi_by_name, $search_eoi_by_name);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);    
                } else {
                    die("<p>Query preparation failed: " . mysqli_error($conn). "</p>");
                }
            }       
                    if ($result && mysqli_num_rows($result) > 0) { 
                        echo "<table border='1'>
                                <tr>
                                    <th>EOI Number</th>
                                    <th>Job Ref Num</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Street</th>
                                    <th>Suburb</th>
                                    <th>State</th>
                                    <th>Postcode</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Skills</th>
                                    <th>Other Skills</th>
                                    <th>Status</th>
                                </tr>";
                        
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>". htmlspecialchars($row["EOInumber"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["JobReferenceNumber"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["FirstName"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["LastName"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["DateOfBirth"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["Gender"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["StreetAddress"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["Suburb"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["State"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["Postcode"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["EmailAddress"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["PhoneNumber"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["Skill1"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["OtherSkills"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["Status"]) ."</td>";
                                    echo "</tr>";
                                }
                                echo "</table></div>";
                            } else {
                                echo "<p>There is no information to display</p>";
                            }
                    
                    mysqli_close($conn);
                } 
        ?>
    </div>
    <div class="delete_mem">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        require_once "settings.php"; // Reconnect to database
        $conn = @mysqli_connect($host, $username, $password, $sql_db);
    
        if (!$conn) {
            die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
        }


    $delete_id = intval($_POST['delete_id']);

    $query = "DELETE FROM eoi WHERE EOInumber = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $delete_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>alert('Record deleted successfully'); window.location.href='your_manage_page.php';</script>";
        } else {
            echo "<script>alert('Error deleting record');</script>";
        }
    }
    }
    ?>
    </div>
    <div class="edit_info">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
            require_once "settings.php"; // Reconnect to database
            $conn = @mysqli_connect($host, $username, $password, $sql_db);

            if (!$conn) {
                die("<p>Database connection failed: " . mysqli_connect_error() . "</p>");
            }
            
            $edit_id = intval($_POST["edit_id"]);
            $first_name = htmlspecialchars(trim($_POST["edit_first_name"]));
            $last_name = htmlspecialchars(trim($_POST["edit_last_name"]));
            $email = htmlspecialchars(trim($_POST["edit_email"]));
            $phone = htmlspecialchars(trim($_POST["edit_phone"]));
            $status = htmlspecialchars(trim($_POST["edit_status"]));
        
            $query = "UPDATE eoi SET FirstName=?, LastName=?, EmailAddress=?, PhoneNumber=?, Status=? WHERE EOInumber=?";
            $stmt = mysqli_prepare($conn, $query);
        
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssssi", $first_name, $last_name, $email, $phone, $status ,$edit_id);
                mysqli_stmt_execute($stmt);
        
                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    echo "<script>alert('Record updated successfully'); window.location.href='manage.php';</script>";
                } else {
                    echo "<script>alert('No changes were made');</script>";
                }
            }
        }
        ?>
    </div>

    <?php
            include('footer.inc')
            ?>

<script>
function editRecord(id, firstName, lastName, email, phone) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_first_name').value = firstName;
    document.getElementById('edit_last_name').value = lastName;
    document.getElementById('edit_email').value = email;
    document.getElementById('edit_phone').value = phone;
    document.getElementById('edit_status').value = status;

    document.getElementById('editForm').style.display = 'block';
}
</script>
</body>
</html>