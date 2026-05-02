<div class="card border-0 shadow-sm mx-auto" style="max-width: 500px;">
    <div class="card-body p-4">
        <h5 class="mb-4">Change Password</h5>

        <form action="password-update.php" method="POST">
            <!-- Current Password -->
            <div class="mb-3">
                <label class="form-label small fw-bold">Current Password</label>
                <input type="password" class="form-control" name="current_password" required>
            </div>

            <hr class="my-4 text-muted">

            <!-- New Password -->
            <div class="mb-3">
                <label class="form-label small fw-bold">New Password</label>
                <input type="password" class="form-control" name="new_password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <label class="form-label small fw-bold">Confirm New Password</label>
                <input type="password" class="form-control" name="confirm_password" required>
            </div>

            <!-- Buttons -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Update Password</button>
                <a href="profile.php" class="btn btn-light">Cancel</a>
            </div>
        </form>
    </div>
</div>