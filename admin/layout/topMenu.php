<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow" style="height: 56px;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold border border-secondary px-2 rounded" href="#">BLOG PANEL</a>
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white-50 me-3 d-none d-sm-block small">Hello,
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo $_SESSION['user_name'];
                } else {
                    echo "Mr Jon";
                }
                ?>
            </span>
            <!-- <a href="../logout.php" class="btn btn-sm btn-danger px-3">Logout</a> -->
            <a href="<?php echo BASE_URL; ?>admin/logout.php" class="btn btn-sm btn-danger px-3">Logout</a>

        </div>
    </div>
</nav>