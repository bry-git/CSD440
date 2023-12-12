<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postData = json_encode($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSONify your Form Data</title>
    <style>
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
<h2>JSONify your Form Data</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" required>
    <br>
    <label for="github">GitHub:</label>
    <input type="text" name="github" required>
    <br>
    <label for="programmingLanguage">Programming Language:</label>
    <input type="text" name="programmingLanguage">
    <br>
    <label for="operatingSystem">Operating System:</label>
    <input type="text" name="operatingSystem">
    <br>
    <label for="ide">IDE:</label>
    <input type="text" name="ide">
    <br>
    <label for="tabsOrSpaces">Tabs or Spaces:</label>
    <input type="text" name="tabsOrSpaces">
    <br>
    <label for="browser">Browser:</label>
    <input type="text" name="browser">
    <br>
    <label for="coffeeOrTea">Coffee or Tea:</label>
    <input type="text" name="coffeeOrTea">
    <br>
    <input type="submit" value="Submit">
</form>
<h2>Output</h2>
<?php if isset($postData) : ?>
    <pre>
        <code>
            <?php echo $postData ?>
        </code>
    </pre>
<?php else : ?>
    <pre>
        <code>
            <?php echo "no data" ?>
        </code>
    </pre>
<?php endif; ?>

</body>
</html>