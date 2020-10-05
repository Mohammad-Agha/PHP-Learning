<?php
    $name = $email = $website = $gender = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filterData($_POST['name']);
        $email = filterData($_POST['email']);
        $website = filterData($_POST["website"]);
        $gender = filterData($_POST['gender']);
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
    </style>
    <title>Form Validation</title>
</head>

<body>
    <form method="post" action="
    <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter you name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter you email">
        </div>
        <div>
            <label for="website">Website</label>
            <input type="text" name="website" id="website" placeholder="Website's URL">
        </div>
        <div>
            <label for="">Gender</label>
            <label for="female"><input type="radio" value="female" id="female" name="gender">Female</label>
            <label for="male"><input type="radio" value="male" id="male" name="gender">Male</label>
        </div>
        </label>

        <button type="submit">Submit</button>
    </form>
</body>

</html>