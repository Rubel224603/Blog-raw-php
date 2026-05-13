<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Common CSS  -->
    <?php require_once ROOT . 'include/style.php'; ?>

</head>

<body>

    <!-- HEADER  -->

    <?php require_once ROOT . 'include/menu.php'; ?>



    <!--  MAIN WRAPPER -->
    <div class="main-wrapper">

        <main class="content">

            <!--  PAGE CONTENT   -->
            <?php include $contentFile; ?>

        </main>

    </div>
    <!-- END MAIN WRAPPER -->

    <!--FOOTER -->
    <?php require_once ROOT . 'include/footer.php'; ?>

    <!-- Common JS -->
    <?php require_once ROOT . 'include/script.php'; ?>




</body>

</html>