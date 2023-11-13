<?php

function get_all_customers(): array {
    return array(
        array('first_name' => 'John', 'last_name' => 'Doe', 'age' => 15, 'phone_number' => '123-456-7890'),
        array('first_name' => 'Jane', 'last_name' => 'Smith', 'age' => 30, 'phone_number' => '987-654-3210'),
        array('first_name' => 'Bob', 'last_name' => 'Johnson', 'age' => 50, 'phone_number' => '555-123-4567'),
        array('first_name' => 'Alice', 'last_name' => 'Williams', 'age' => 55, 'phone_number' => '111-222-3333'),
        array('first_name' => 'Charlie', 'last_name' => 'Brown', 'age' => 20, 'phone_number' => '444-555-6666'),
        array('first_name' => 'David', 'last_name' => 'Miller', 'age' => 45, 'phone_number' => '777-888-9999'),
        array('first_name' => 'Eva', 'last_name' => 'Taylor', 'age' => 23, 'phone_number' => '111-999-8888'),
        array('first_name' => 'Frank', 'last_name' => 'Harris', 'age' => 32, 'phone_number' => '222-888-7777'),
        array('first_name' => 'Grace', 'last_name' => 'Lee', 'age' => 47, 'phone_number' => '333-777-6666'),
        array('first_name' => 'Harry', 'last_name' => 'Martin', 'age' => 19, 'phone_number' => '444-666-5555'),
    );
}

function get_all_customers_over_thirty($customersArray): array {
    $filteredByAge = array_filter($customersArray, function ($customer) {
        return $customer['age'] > 25;
    });
    return $filteredByAge;
}

function get_alphabetized_customers($customerArray): array {
    return sort($customerArray);
}

function generate_customer_table($customersArray) {
    foreach ($customersArray as $customer) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($customer['first_name']) . "</td>";
        echo "<td>" . htmlspecialchars($customer['last_name']) . "</td>";
        echo "<td>" . htmlspecialchars($customer['age']) . "</td>";
        echo "<td>" . htmlspecialchars($customer['phone_number']) . "</td>";
        echo "</tr>";
    }
}
