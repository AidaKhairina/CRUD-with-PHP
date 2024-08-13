<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Homepage</title>
</head>

<body>
    <div class="card border-light mb-3" style="margin: 30px;">
        <div class="card-header bg-transparent border-light">
            <h5 style="text-align: center;">Student Data</h5>
        </div>
        <div class="card-body text-light">
            <tbody class="table-group-divider border-light">
                <table class="table" width='80%' border=1>
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Update</th>
                        </tr>
                    </thead>
                    <?php
                    while ($user_data = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['name'] . "</td>";
                        echo "<td>" . $user_data['email'] . "</td>";
                        echo "<td class='text-center'>" . $user_data['mobile'] . "</td>";
                        echo "<td class='text-center'><a href='edit.php?id=$user_data[id]' class='btn btn-link text-light text-decoration-none'><i class='bi bi-pencil-square'></i> Edit</a> | <a href='delete.php?id=$user_data[id]' class='btn btn-link text-light text-decoration-none'><i class='bi bi-trash'></i> Delete</a></td></tr>";
                    }
                    ?>
                </table>
                <div class="text-center">
                    <a href="add.php" class="btn btn-custom">Add New User</a><br>
                </div>
            </tbody>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
