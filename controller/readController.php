<?php
include 'db.php';
include './model/read.php';


if (count($results) > 0) {
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>";
    foreach ($results as $row) {
        echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['name'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['created_at'] . "</td>
            <td>
                <a href='update.php?id=" . $row['id'] . "'>Edit</a> |
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
