<?php
    $name = $email = $website = $gender = "";
    $nameError = $emailError = $websiteError = $genderError = "";


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])) {
            $nameError = "Name is required";
        }
        else {
            $name = filterData($_POST['name']);
            // name should only contain letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameError = "Only letters and white space allowed";
              }
        }

        if(empty($_POST['email'])) {
            $emailError = "Email is required";
        }
        else {
            $email = filterData($_POST['email']);
             // Email should be well formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }

        if(empty($_POST['website'])) {
            $websiteError = "Website is required";
        }
        else {
            $website = filterData($_POST['website']);
            // URL Validation
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteError = "Invalid URL"; 
            }
        }

        if(empty($_POST['gender'])) {
            $genderError = "Gender is required";
        }
        else {
            $gender = filterData($_POST['gender']);
        }
    }

    function filterData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div {
            margin-bottom: 20px;
        }
        span {
            color: red;
        }
    </style>
    <title>Form Validation</title>
</head>

<body>
    <form method="post" action="
    <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter you name">
            <span class="error">* <?php echo $nameError; ?></span>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter you email">
            <span class="error">* <?php echo $emailError; ?></span>
        </div>
        <div>
            <label for="website">Website</label>
            <input type="text" name="website" id="website" placeholder="Website's URL">
            <span class="error">* <?php echo $websiteError; ?></span>
        </div>
        <div>
            <label for="">Gender</label>
            <label for="female"><input type="radio" value="female" id="female" name="gender">Female</label>
            <label for="male"><input type="radio" value="male" id="male" name="gender">Male</label>
            <span class="error">* <?php echo $genderError; ?></span>
        </div>
        </label>

        <button type="submit">Submit</button>
    </form>
</body>

</html>