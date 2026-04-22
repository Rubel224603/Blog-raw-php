<?php


include '../config.php';
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
    exit;
}
?>
<?php include('../include/style.php'); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow" style="height: 56px;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold border border-secondary px-2 rounded" href="#">BLOG PANEL</a>
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white-50 me-3 d-none d-sm-block small">Hello, Rubel Hosen</span>
            <a href="logout.php" class="btn btn-sm btn-danger px-3">Logout</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden" style="margin-top: -56px; padding-top: 56px;">


        <nav class="col-md-3 col-lg-2 bg-dark-subtle border-end d-none d-md-flex flex-column p-0 h-100">


            <div class="px-2 pt-4 pb-3 bg-dark-subtle">
                <div class="p-2 rounded-1 shadow-sm border-0 bg-dark d-flex align-items-center justify-content-center">
                    <i class="bi bi-grid-fill text-warning me-2"></i>
                    <span class="fw-bold text-white small text-uppercase" style="letter-spacing: 1.5px;">
                        Dashboard
                    </span>
                </div>
            </div>


            <div class="px-3  flex-grow-1 overflow-auto">
                <ul class="nav nav-pills flex-column gap-2">
                    <!-- Posts — submenu -->
                    <li class="nav-item">
                        <a href="#postsMenu"
                            class="nav-link d-flex justify-content-between align-items-center px-3 py-2 rounded-3 shadow-sm border text-dark"
                            data-bs-toggle="collapse"
                            role="button"
                            aria-expanded="false">
                            <span class="d-flex align-items-center fw-semibold">
                                Posts
                            </span>
                            <i class="bi bi-chevron-down small opacity-50"></i>
                        </a>
                        <div class="collapse" id="postsMenu">
                            <ul class="nav flex-column ms-3 mt-1 gap-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-list me-2"></i> All Posts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="category/create.php" class="nav-link link-dark py-1">
                                        <i class="bi bi-plus-circle me-2"></i> Create Post
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Categories — submenu -->
                    <li class="nav-item">
                        <a href="#categoriesMenu"
                            class="nav-link d-flex justify-content-between align-items-center px-3 py-2 rounded-3 shadow-sm border text-dark"
                            data-bs-toggle="collapse"
                            role="button"
                            aria-expanded="false">
                            <span class="d-flex align-items-center fw-semibold">
                                Categories
                            </span>
                            <i class="bi bi-chevron-down small opacity-50"></i>
                        </a>
                        <div class="collapse" id="categoriesMenu">
                            <ul class="nav flex-column ms-3 mt-1 gap-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-list me-2"></i> All Categories
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-plus-circle me-2"></i> New Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Comments — submenu -->
                    <li class="nav-item">
                        <a href="#commentsMenu"
                            class="nav-link d-flex justify-content-between align-items-center px-3 py-2 rounded-3 shadow-sm border text-dark"
                            data-bs-toggle="collapse"
                            role="button"
                            aria-expanded="false">
                            <span class="d-flex align-items-center fw-semibold">
                                Comments
                            </span>
                            <i class="bi bi-chevron-down small opacity-50"></i>
                        </a>
                        <div class="collapse" id="commentsMenu">
                            <ul class="nav flex-column ms-3 mt-1 gap-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-list me-2"></i> All Comments
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Settings — submenu -->
                    <li class="nav-item">
                        <a href="#settingsMenu"
                            class="nav-link d-flex justify-content-between align-items-center px-3 py-2 rounded-3 shadow-sm border text-dark"
                            data-bs-toggle="collapse"
                            role="button"
                            aria-expanded="false">
                            <span class="d-flex align-items-center fw-semibold">
                                Settings
                            </span>
                            <i class="bi bi-chevron-down small opacity-50"></i>
                        </a>
                        <div class="collapse" id="settingsMenu">
                            <ul class="nav flex-column ms-3 mt-1 gap-1">
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-person me-2"></i> Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link link-dark py-1">
                                        <i class="bi bi-lock me-2"></i> Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 h-100 overflow-auto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold h3">Dashboard Overview</h2>
                <button class="btn btn-primary shadow-sm rounded-pill px-3">
                    <i class="bi bi-plus-lg me-1"></i> Create Post
                </button>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm bg-primary-subtle text-primary-emphasis">
                        <div class="card-body py-4">
                            <h6 class="text-uppercase small fw-bold mb-1">Total Posts</h6>
                            <h2 class="mb-0 fw-bold">42</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm bg-success-subtle text-success-emphasis">
                        <div class="card-body py-4">
                            <h6 class="text-uppercase small fw-bold mb-1">Views</h6>
                            <h2 class="mb-0 fw-bold">2.8k</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm bg-warning-subtle text-warning-emphasis">
                        <div class="card-body py-4">
                            <h6 class="text-uppercase small fw-bold mb-1">Comments</h6>
                            <h2 class="mb-0 fw-bold">156</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-5">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Your Main Content</h5>
                    <hr>
                    <div class="alert alert-primary">
                        <strong>Main Content Area</strong>
                    </div>
                    <div style="height: 300px;" class="bg-light border text-center pt-5">
                        Scroll down to see independent movement...
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include '../include/script.php' ?>