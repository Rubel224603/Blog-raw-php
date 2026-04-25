<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <div class="card-header d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Comment List</h5>
            <a href="../post/post-list.php" class="btn btn-primary">All Posts</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Post</th>
                        <th>User Name</th>
                        <th>Comment</th>
                        <th>Status</th>
                        <th>Commented At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Laravel Basics</td>
                        <td>Rahim</td>
                        <td>This is very helpful post. Thanks!</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>25 Apr 2026</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>PHP OOP Guide</td>
                        <td>Karim</td>
                        <td>I am confused about inheritance part...</td>
                        <td><span class="badge bg-secondary">Pending</span></td>
                        <td>24 Apr 2026</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success">Approve</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>My Travel Story</td>
                        <td>Jannat</td>
                        <td>Amazing story! I want to visit there.</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>23 Apr 2026</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            No more comments...
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>