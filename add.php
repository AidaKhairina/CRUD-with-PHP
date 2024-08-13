<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/add.css">
    <title>Add User</title>
</head>

<body>
    <form action="add.php" method="post" name="form1">
        <div class="card border-light mb-3" style="margin-right:100px; margin-left:100px; margin-top:40px;">
            <div class="card-header bg-transparent border-light">
                <h5 style="text-align: center;">Input Data</h5>
            </div>
            <div class="card-body text-success">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control border-light" id="name" name="name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control border-light" id="email" name="email" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="phonenumber" class="col-sm-2 col-form-label form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control border-light" id="mobile" name="mobile" required>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2" style="justify-content: center; text-align: center;">
                    <button class="btn btn-warning" name="submit" style="width: 20rem; border-radius: 20px;" type="submit">Submit</button>
                    <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $mobile = $_POST['mobile'];

                            include_once("config.php");

                            $result = mysqli_query($mysqli, "INSERT INTO user(name,email,mobile) VALUES('$name','$email','$mobile')");

                            echo "<p style='color: #d4af37;'>User Added Successfully</p>";
                        }
                    ?>
                    <div>
                        <a href="index.php" class="text-light">Back To Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
