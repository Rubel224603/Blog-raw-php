<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-1">Add Blog Post</h5>
            <a href="post-list.php" class="btn btn-primary">See Posts</a>
        </div>

        <form method="POST" action="" class="mt-3">

            <!-- Title -->
            <div class="mb-2">
                <label class="fw-semibold">
                    Post Title <span class="text-danger">*</span>
                </label>
                <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
            </div>

            <!-- Slug -->
            <div class="mb-2">
                <label class="fw-semibold">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="auto generate or set manually">
            </div>

            <!-- Category -->
            <div class="mb-2">
                <label class="fw-semibold">Category</label>
                <select name="category_id" class="form-select">
                    <option value="">Select Category</option>
                    <option value="1">Technology</option>
                    <option value="2">Travel</option>
                    <option value="3">Lifestyle</option>
                </select>
            </div>

            <!-- Featured Image -->
            <div class="mb-2">
                <label class="fw-semibold">Featured Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <!-- Content -->
            <div class="mb-2">
                <label class="fw-semibold">
                    Content <span class="text-danger">*</span>
                </label>
                <textarea name="content" rows="5" class="form-control" placeholder="Write your post content..." required></textarea>
            </div>

            <!-- Status -->
            <div class="mb-2">
                <label class="fw-semibold">Status</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="1" checked>
                        <label class="form-check-label">Published</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="0">
                        <label class="form-check-label">Draft</label>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Save</button>
                <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
            </div>

        </form>
    </div>
</div>