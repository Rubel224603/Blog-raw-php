<?php
require_once 'config.php';

$msg = "";

if (isset($_POST['registerBtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($password === $confirm_password) {

        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $insertQuery = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        $runQuery = mysqli_query($db, $insertQuery);

        if ($runQuery) {
            $msg = "Registration Successful!";
            $msg_type = "success";
        } else {
            $msg = "Error: " . mysqli_error($db);
            $msg_type = "danger";
        }
    } else {
        $msg = "Password does not match!";
        $msg_type = "danger";
    }
} ?>

<?php  
    include('include/style.php');
    include('include/menu.php');
 ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border">
                <div class="card-body p-4">
                    <h4 class="card-title mb-1">Register</h4>
                    <?php if ($msg != "") { ?>
                        <div class="alert alert-<?php echo $msg_type; ?> alert-dismissible fade show" role="alert">
                            <?php echo $msg; ?>
                        </div>
                    <?php } ?>
                    <p class="text-muted small mb-4">Create your account to get started.</p>

                    <form method="POST" action="register.php">
                        <div class="mb-3">
                            <label class="form-label">Full name</label>
                            <input type="text" name="name" class="form-control" placeholder="Rahim Khan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Min. 8 characters" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Repeat your password" required>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" name="registerBtn" class="btn btn-primary">Create account</button>
                        </div>
                    </form>

                    <p class="text-center small text-muted mb-0">
                        Already have an account? <a href="login.php" class="text-decoration-none">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/script.php'; ?>