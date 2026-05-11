<?php
// session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: " . BASE_URL . "pages/login.php");
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once ROOT . 'include/style.php'; ?>
</head>

<body>

    <!--Header or Top menu-->
    <?php require_once ROOT . 'admin/layout/topMenu.php'; ?>
    <!--Header or Top menu-->

    <div class="container-fluid">
        <div class="row vh-100 overflow-hidden" style="margin-top: -56px; padding-top: 56px;">


            <!--left side menu-->

            <nav class="col-md-3 col-lg-2 bg-dark-subtle border-end d-none d-md-flex flex-column p-0 h-100">
                <?php require_once 'leftMenu.php'; ?>
            </nav>
            <!--left side menu-->

            <!--content Section-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 h-100 overflow-auto">
                <?php require_once  $content; ?>
            </main>
            <!--content Section-->

        </div>
    </div>

    <?php require_once ROOT . 'include/script.php'; ?>

</body>

</html>