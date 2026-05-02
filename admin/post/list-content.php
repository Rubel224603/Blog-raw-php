<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <div class="card-header d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Post List</h5>
            <a href="post-create.php" class="btn btn-primary">Add Post</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Excerpt</th>
                        <th>Status</th>
                        <th>Published At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Laravel Basics</td>
                        <td>laravel-basics</td>
                        <td>Introduction to Laravel framework...</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>23 Apr 2026</td>
                        <td>
                            <a href="edit-post.php" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>PHP OOP Guide</td>
                        <td>php-oop-guide</td>
                        <td>Learn object-oriented programming in PHP...</td>
                        <td><span class="badge bg-secondary">Draft</span></td>
                        <td>22 Apr 2026</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>My Travel Story</td>
                        <td>my-travel-story</td>
                        <td>A journey through the hills and rivers...</td>
                        <td><span class="badge bg-success">Published</span></td>
                        <td>20 Apr 2026</td>
                        <td>
                            <a href="<>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            More posts coming soon...
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>