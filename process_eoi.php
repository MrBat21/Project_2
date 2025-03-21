<!DOCTYPE html>
<html lang="en">
<head>
<title>Process EOI</title>

<meta charset="utf-8" />
<meta name="description" content="project2"  />
<meta name="keywords" content="process eoi" />

<?php
    
    require_once "settings.php";
    $conn = @mysqli_connect($host, $username, $password, $sql_db);
    
    //prevent direct access by url
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: apply.php");
        exit();
    }
    

    //Sanitize and validate input

    // Retrieve & sanitize input fields
    $job_ref = isset($_POST['reference_number']) ? htmlspecialchars(trim($_POST['reference_number'])) : "";
    $first_name = isset($_POST['f_name']) ? htmlspecialchars(trim($_POST['f_name'])) : "";
    $last_name = isset($_POST['l_name']) ? htmlspecialchars(trim($_POST['l_name'])) : "";
    $dob = isset($_POST['dob']) ? htmlspecialchars(trim($_POST['dob'])) : "";
    $gender = isset($_POST['gender']) ? htmlspecialchars(trim($_POST['gender'])) : "";
    $street = isset($_POST['street']) ? htmlspecialchars(trim($_POST['street'])) : "";
    $suburb = isset($_POST['suburb']) ? htmlspecialchars(trim($_POST['suburb'])) : "";
    $urstate = isset($_POST['state']) ? htmlspecialchars(trim($_POST['state'])) : "";
    $postcode = isset($_POST['postcode']) ? htmlspecialchars(trim($_POST['postcode'])) : "";
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : "";
    $phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : "";
    $skills = isset($_POST['skills']) ? implode(", ", $_POST['skills']) : "";
    $other_skills = isset($_POST['other-skills']) ? htmlspecialchars(trim($_POST['other-skills'])) : "";
    $status = "New";

    // ✅ Age calculation
    $age = 0;
    if (!empty($dob)) {
        $dob_date = DateTime::createFromFormat('Y-m-d', $dob);
        $current_date = new DateTime();
        if ($dob_date) {
            $age = $dob_date->diff($current_date)->y;
        }
    }
    
    // ✅ Validation
    $errors = [];
    
   // ✅ Job Reference Number: Exactly 5 alphanumeric characters
if (!preg_match("/^[a-zA-Z0-9]{5}$/", $job_ref)) {
    $errors[] = "Invalid Job Reference Number.";
}

// ✅ First & Last Name: 1-20 letters and spaces only
if (!preg_match("/^[a-zA-Z ]{1,20}$/", $first_name)) {
    $errors[] = "Invalid First Name.";
}
if (!preg_match("/^[a-zA-Z ]{1,20}$/", $last_name)) {
    $errors[] = "Invalid Last Name.";
}

// ✅ Age: Between 15 and 80
if ($age < 15 || $age > 80) {
    $errors[] = "Age must be between 15 and 80.";
}

// ✅ Gender: Must be selected
if (empty($gender)) {
    $errors[] = "You must select your Gender.";
}

// ✅ Street Address: 1-40 characters (letters, numbers, spaces, commas, hyphens)
if (!preg_match("/^[a-zA-Z0-9\s,.'-]{1,40}$/", $street)) {
    $errors[] = "Invalid Street Address.";
}

// ✅ Suburb: 1-40 letters, numbers, spaces allowed
if (!preg_match("/^[a-zA-Z0-9\s-]{1,40}$/", $suburb)) {
    $errors[] = "Invalid Suburb/Town.";
}

// ✅ State: Must be one of the valid states
$valid_states = ["VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT"];
if (!in_array($urstate, $valid_states)) {
    $errors[] = "Invalid State.";
}

// ✅ Postcode: Exactly 4 digits
if (!preg_match("/^\d{4}$/", $postcode)) {
    $errors[] = "Invalid Postcode.";
}

// ✅ Check if Postcode Matches State Rules
$state_postcode_rules = [
    "VIC" => "/^3\d{3}$/",
    "NSW" => "/^2\d{3}$/",
    "QLD" => "/^4\d{3}$/",
    "NT"  => "/^0\d{3}$/",
    "WA"  => "/^6\d{3}$/",
    "SA"  => "/^5\d{3}$/",
    "TAS" => "/^7\d{3}$/",
    "ACT" => "/^2\d{3}$/"
];

if (isset($state_postcode_rules[$urstate]) && !preg_match($state_postcode_rules[$urstate], $postcode)) {
    $errors[] = "Invalid Postcode for the selected State.";
}

// ✅ Email: Must be a valid email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid Email address.";
}

// ✅ Phone: Must be 8-12 digits (allows spaces, hyphens, +61 format)
if (!preg_match("/^(\+61\s?|0)[0-9]{8,12}$/", $phone)) {
    $errors[] = "Invalid Phone Number.";
}

// ✅ Skills: At least one must be provided
if (empty($skills) && empty($other_skills)) {
    $errors[] = "You must enter some skills.";
}

// 🔹 Display Errors if Any Exist
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    exit();
}

// ✅ If no errors, process the application
echo "<p>Form submitted successfully!</p>";{
    
    //adding process
    $sql_table = "eoi";
    $query = "INSERT INTO eoi (`JobReferenceNumber`, `FirstName`, `LastName`, `DateOfBirth`, `Gender`, `StreetAddress`, `Suburb`, `State`, `Postcode`, `EmailAddress`, `PhoneNumber`, `Skill1`, `OtherSkills`, `Status`) 
    VALUES ('$job_ref', '$first_name', '$last_name', '$dob', '$gender', '$street',
    '$suburb', '$urstate', '$postcode', '$email', '$phone', '$skills', '$other_skills', '$status')";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        echo "<p class=\"wrong\">Something in wrong with ", $query, "</p>";
    }   else {
        echo "<p class=\"ok\">Successfully added New member information</p>";
        echo "<p>You can see all the members's information <a href='manage.php'>here</a></p>";
        echo "<p>You can back to the main page <a href='index.php'>here</a></p>";
    }

    mysqli_close($conn);
}

?>
</body>