<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-1">Add Category Form </h5>
            <a href="category-list.php" class="btn btn-primary">See list</a>
            </hr>
        </div>

        <form method="POST" action="" class="mt-3">

            <!-- Category Name -->
            <div class="mb-2">
                <label class="fw-semibold">
                    Category Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" class="form-control" placeholder="Category name" required>
            </div>

            <!-- Slug -->
            <div class="mb-2">
                <label class="fw-semibold">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" placeholder="set or auto genarate">
            </div>

            <!-- Status -->
            <div class="mb-1">
                <label class="fw-semibold">Status</label>
                <div class="d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="active" value="1" checked>
                        <label class="form-check-label" for="active">Active </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
                        <label class="form-check-label" for="inactive"> Inactive
                        </label>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-2">
                <label class="fw-semibold">Description</label>
                <textarea name="description" rows="3" class="form-control" placeholder="description"></textarea>
            </div>

            <!-- Buttons -->
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary px-4">Save</button>
                <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
            </div>

        </form>
    </div>
</div>