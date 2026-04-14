<?php
  include 'config.php';
    if(!isset($_SESSION['user_id'])){
        header("location:login.php");
        exit;
        //print_r($_COOKIE);
      
    } else {
        echo "success " . $_SESSION['user_id'].$_SESSION['user_name'];

        echo "You are loggin!";
    }
?>
<?php 
  include('include/header.php');
   

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow" style="height: 56px; z-index: 1030;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold border border-secondary px-2 rounded" href="#">BLOG PANEL</a>
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white-50 me-3 d-none d-sm-block small">Hello, Rubel Hosen</span>
            <a href="logout.php" class="btn btn-sm btn-danger px-3">Logout</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row overflow-hidden" style="height: calc(100vh - 56px);">

        <nav class="col-md-3 col-lg-2 bg-white border-end d-none d-md-flex flex-column p-0"
             style="height: calc(100vh - 56px);">

            
            <div class="px-3 pt-4 pb-2 border-bottom flex-shrink-0">
                <p class="fw-bold mb-0 small text-uppercase text-muted">Dashboard</p>
            </div>

            <div class="overflow-y-auto flex-grow-1 px-3 py-3">
                <ul class="nav nav-pills flex-column gap-2">
                    <li class="nav-item">
                        <a href="#" class="nav-link active shadow-sm">
                            <i class="bi bi-speedometer2 me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-file-earmark-text me-2"></i> All Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-plus-circle me-2"></i> New Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-chat-dots me-2"></i> Comments
                        </a>
                    </li>
                    <li><hr></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link link-dark">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4 overflow-y-auto"
              style="height: calc(100vh - 56px);">

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

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Your Main Content</h5>
                    <hr>
                    <div class="alert alert-primary">
                        <strong>Main Content</strong>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
