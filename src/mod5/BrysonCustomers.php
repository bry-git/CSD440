<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>

<h2>All Customers Information</h2>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Phone Number</th>
    </tr>

    <?php
    require_once 'Functions.php';
    $customers = get_all_customers();

    generate_customer_table($customers);
    unset($customers);
    ?>
</table>
<h2>Customers who are old enough to rent car Information</h2>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Phone Number</th>
    </tr>

    <?php
    require_once 'Functions.php';

    $customers = get_all_customers();

    $filtered = array_filter($customers, function ($customer) {
        return $customer['age'] > 25;
    });

    generate_customer_table($filtered);
    unset($customers);

    ?>
</table>
<h2>Alphabetized Customers Information</h2>
<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Phone Number</th>
    </tr>

    <?php

    $customers = get_all_customers();

    sort($customers);

    generate_customer_table($customers);

    unset($customers);
    ?>
</table>

</body>
</html>


