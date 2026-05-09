<?php
    include 'config.php';

    if (isset($_SESSION['user_id'])) {
        header("Location: " . BASE_URL . "admin/index.php");
        exit();
    }

    $msg = '';
    if (isset($_POST['loginBtn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $checkEmail = "select * from users where email ='$email'";
        $result = mysqli_query($db, $checkEmail);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                header("Location: " . BASE_URL . "admin/index.php");
                exit();
            } else {
                $msg = "Password Invalid";
            }
        } else {
            $msg = "Email Invalid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'include/style.php'; ?>
</head>

<body>

    <?php if ($msg): ?>
        <div class="alert alert-danger text-center"><?= $msg ?></div>
    <?php endif; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-1">Login</h4>
                        <p class="text-muted small mb-4">Welcome back! Please sign in.</p>

                        <form method="POST" action="login.php">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="you@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label class="form-check-label small" for="remember">Remember me</label>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" name='loginBtn' class="btn btn-primary">Login</button>
                            </div>
                        </form>

                        <p class="text-center small text-muted mb-0">
                            Don't have an account?
                            <a href="register.php" class="text-decoration-none">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'include/script.php'; ?>
</body>

</html>