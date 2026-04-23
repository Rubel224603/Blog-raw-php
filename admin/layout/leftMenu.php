<!--left menu-->


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

        <!-- Categories  -->
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
                        <a href="category/list.php" class="nav-link link-dark py-1">
                            <i class="bi bi-list me-2"></i> All Categories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="category-create.php" class="nav-link link-dark py-1">
                            <i class="bi bi-plus-circle me-2"></i>Create Category
                        </a>
                    </li>
                </ul>
            </div>
        </li>
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
                        <a href="create-post.php" class="nav-link link-dark py-1">
                            <i class="bi bi-plus-circle me-2"></i> Create Post
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



<!--left menu end-->