<?php require_once ROOT . 'include/style.php'; ?>
<?php require_once ROOT . 'admin/layout/topMenu.php'; ?>

<!--Header or Top menu-->
<?php //require_once 'topMenu.php'; 
?>

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