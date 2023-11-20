<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /** https://www.php.net/manual/en/filter.constants.php
     * check out these language level constants that will help you identify what
     * types of popular html form data can be sanitized without much procedural code
     * filter_input should return False or null depending on the error
     */

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $birthdate = filter_input(INPUT_POST, 'birthdate', FILTER_SANITIZE_STRING);
    $height = filter_input(INPUT_POST, 'height', FILTER_VALIDATE_FLOAT);
    $is_student = isset($_POST['is_student']) ? 'Yes' : 'No';
    $favorite_color = filter_input(INPUT_POST, 'favorite_color', FILTER_SANITIZE_STRING);


    if ($name && $age !== false && $email && $birthdate && $height !== false && $favorite_color) {

        echo "<h1>Data Summary</h1>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Birthdate:</strong> $birthdate</p>";
        echo "<p><strong>Height:</strong> $height cm</p>";
        echo "<p><strong>Student:</strong> $is_student</p>";
        echo "<p><strong>Favorite Color:</strong> <span style='color: $favorite_color;'>$favorite_color</span></p>";
    } else {

        echo "<h1>Error</h1>";
        echo "<p>Please fill out all fields with valid data.</p>";
    }
} else {

    header("Location: BrysonValidationForm.php");
    exit();
}
?>
