<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry Form</title>
</head>
<body>
<h1>Data Entry Form</h1>
<form method="post" action="process_form_data.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="birthdate">Birthdate:</label>
    <input type="date" id="birthdate" name="birthdate" required>

    <label for="height">Height (in cm):</label>
    <input type="number" id="height" name="height" required>

    <label for="is_student">Are you a student?</label>
    <input type="checkbox" id="is_student" name="is_student">

    <label for="favorite_color">Favorite Color:</label>
    <input type="color" id="favorite_color" name="favorite_color" required>

    <button type="submit">Submit</button>
</form>
</body>
</html>
