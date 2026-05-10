<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- Common CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">

    

</head>

<body class="page-<?= $pageSlug ?? 'default' ?>">

    <!-- ===== HEADER ===== -->
    <?php include 'include/header.php'; ?>

    <!-- ===== MAIN WRAPPER ===== -->
    <div class="main-wrapper">

        <?php if ($showSidebar ?? false): ?>
          
            <aside class="sidebar">
                <?php include 'include/sidebar.php'; ?>
            </aside>
            <main class="content with-sidebar">
            <?php else: ?>
                <main class="content full-width">
                <?php endif; ?>

                <!-- ===== PAGE CONTENT — এখানে প্রতিটা page এর content আসবে ===== -->
                <?php include $contentFile; ?>

                </main>

    </div>
    <!-- ===== END MAIN WRAPPER ===== -->

    <!-- ===== FOOTER ===== -->
    <?php include 'include/footer.php'; ?>

    <!-- Common JS -->
    <script src="assets/js/main.js"></script>

  
</body>

</html>