<!DOCTYPE html>
<html lang="en">

<?php
    include 'header.inc';
?>

<body class="manage-body">
    <?php 
        include 'menu.inc';
    ?>
    <?php
        require_once "settings.php";
        $conn = @mysqli_connect($host, $username, $password, $sql_db); 

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
    <table border="1" style="color: black; margin: 7%; background-color:rgb(255, 255, 255); text-align: center; border-radius: 20px; padding: 4px;" >
        <caption style="color: black; font-size: 2em;">Members information</caption>
        <?php
            echo "<tr>";
            echo "<th>EOI Number</th> <th>Job Reference Number</th> <th>First Name</th> <th>Last Name</th> <th>DOB</th> <th>Gender</th> <th>Street Address</th> <th>Suburb/town</th> <th>State</th> <th>Postcode</th> <th>Email</th> <th>Phone</th> <th>Skills</th> <th>Other skills</th> <th>Status</th>" ;
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
                echo "</tr>";
            }
        ?>
    </table> 
    </div>
    <div class="search_mem_info">
        <h2>Search for eoi by job reference number</h2>
        <form method="POST" action="manage.php">
            <label for="search_eoi_by_job_ref">Please enter a job reference number here:</label>
            <input type="text" name="search_eoi_by_job_ref"><br>
            <h2>Search for eoi by name</h2>
            <label for="search_eoi_by_name">Please enter a name here:</label>
            <input type="text" name="search_eoi_by_name"><br>
            <input type="submit" value="Search">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search_eoi_by_job_ref = htmlspecialchars(trim($_POST['search_eoi_by_job_ref']));
                $search_eoi_by_name = htmlspecialchars(trim($_POST['search_eoi_by_name']));
                require_once "settings.php";
                $conn = @mysqli_connect($host, $user, $pwd, $sql_db);
                
                if ($conn) { 
                    $query = "SELECT * FROM eoi WHERE job_ref_num = '$search_eoi_by_job_ref'";
                    $stmt = mysqli_prepare($conn, $query);
                    mysqli_stmt_bind_param($stmt, "s", $search_eoi_by_job_ref);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_query($conn, $query);
                }
                elseif (!empty($search_eoi_by_name)) {
                    $query = "SELECT * FROM eoi WHERE first_name LIKE ? OR last_name LIKE ?";
                    $stmt = mysqli_prepare($conn, $query);
                    $search_eoi_by_name = "%" . $search_eoi_by_name . "%";
                    mysqli_stmt_bind_param($stmt, "ss", $search_eoi_by_name, $search_eoi_by_name);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);    
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
                                    echo "<td>". htmlspecialchars($row["job_ref_num"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["first_name"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["last_name"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["dob"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["gender"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["street"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["suburb"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["urstate"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["postcode"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["email"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["phone"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["skills"]) ."</td>";    
                                    echo "<td>". htmlspecialchars($row["other_skills"]) ."</td>";
                                    echo "<td>". htmlspecialchars($row["status"]) ."</td>";
                                    echo "</tr>";
                                }
                                echo "</table></div>";
                            } else {
                                echo "<p>There is no information to display</p>";
                            }
                    
                    mysqli_close($conn);
                } 
                else {
                    echo "<p>Database connection failed.</p>";
                }
        ?>
    </div>
    <?php   
        include 'footer.inc';
    ?>
</body>
</html>