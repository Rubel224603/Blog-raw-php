<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo BASE_URL . 'index.php'; ?>">BLOG_SYS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navRes">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navRes">
            <ul class="navbar-nav ms-auto">
                <a class="nav-link" href="<?php echo BASE_URL . 'index.php'; ?>">
                    Home
                </a>
                <li class="nav-item"><a class="nav-link" href="#">Articles</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL . 'pages/category.php'; ?>">Categories</a>


                </li>
                <li class="nav-item"><a class="btn btn-primary btn-sm ms-lg-3 text-white" href="<?php echo BASE_URL . 'pages/'; ?>login.php">Admin Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>