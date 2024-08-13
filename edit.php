<?php
include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = mysqli_query($mysqli, "UPDATE user SET name='$name', email='$email', mobile='$mobile' WHERE id=$id");

    header("Location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <div class="container">
        <div class="card border-light">
            <div class="card-header border-light">
                <h5 class="text-center">Edit User</h5>
            </div>
            <div class="card-body border-light">
                <form name="update_user" method="post" action="edit.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control border-light" name="name" id="name" value="<?php echo $name;?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control border-light" name="email" id="email" value="<?php echo $email;?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Phone Number</label>
                        <input type="text" class="form-control border-light" name="mobile" id="mobile" value="<?php echo $mobile;?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <div class="d-grid gap-2" style="justify-content: center; text-align: center;">
                        <button type="submit" name="update" class="btn btn-warning" style="width: 20rem; border-radius: 20px;">Update</button>
                        <div>
                            <a href="index.php" class="text-light">Back To Homepage</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-lW+4p1AL4x/1pVMygBpDii/2DmEnCzRl/xFV5uFE3SW6JCC1jGdW0JqUzFJm0I1d" crossorigin="anonymous"></script>
</body>
</html>
