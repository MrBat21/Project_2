<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Management</title>
    </head>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
        }


        h2 {
            color:rgb(255, 255, 255);
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: #222;
            border: 2px solidrgb(255, 255, 255);
        }

        th, td {
            padding: 12px;
            border: 1px solidrgb(255, 255, 255);
            text-align: center;
        }

        th {
            background-color:rgb(255, 255, 255);
            color: black;
        }

        tr:hover {
            background-color: #444;
        }

        input[type="text"], input[type="email"], input[type="submit"] {
            width: 300px;
            padding: 10px;
            margin: 10px;
            border: 1px white;
            background: #333;
            color: white;
        }

        input[type="submit"] {
            cursor: pointer;
            background:rgb(255, 255, 255);
            color: black;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background:rgb(255, 255, 255);
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: gray;
        }
    </style>


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
    <h1 style="font-size:40px; text-align: center; justify-content: center;" class="Mana">Management Page</h1>

    <table border="1" class="table" >
        <caption class="meminfo" style="font-size: 20px; color: white;">Members information</caption>
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
        <h2>Search for memeber by job reference number</h2>
        <form method="POST" action="manage.php">
            <label for="search_eoi_by_job_ref">Please enter a job reference number here:</label>
            <input type="text" name="search_eoi_by_job_ref"><br>
            <h2>Search for member by name</h2>
            <label for="search_eoi_by_name">Please enter a name here:</label>
            <input type="text" name="search_eoi_by_name"><br>
            <input type="submit" value="Search">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search_eoi_by_job_ref = htmlspecialchars(trim($_POST['search_eoi_by_job_ref']));
                $search_eoi_by_name = htmlspecialchars(trim($_POST['search_eoi_by_name']));
                require_once "settings.php";
                $conn = @mysqli_connect($host, $username, $password, $sql_db);
                
                if ($conn) { 
                    $query = "SELECT * FROM eoi WHERE JobReferenceNumber = '$search_eoi_by_job_ref'";
                    $stmt = mysqli_prepare($conn, $query);
                    mysqli_stmt_bind_param($stmt, "s", $search_eoi_by_job_ref);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_query($conn, $query);
                }
                elseif (!empty($search_eoi_by_name)) {
                    $query = "SELECT * FROM eoi WHERE FirstName LIKE ? OR LastName LIKE ?";
                    $stmt = mysqli_prepare($conn, $query);
                    if (!$stmt) {
                    die("Query preparation failed: " . mysqli_error($conn));
                    }
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
    <?php   
        include 'footer.inc';
    ?>
</body>
</html>