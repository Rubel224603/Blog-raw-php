<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <!-- Header -->
        <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-between mb-4 p-0">
            <h5 class="mb-0">Edit Profile Information</h5>
            <a href="profile.php" class="btn btn-outline-secondary btn-sm">Back to Profile</a>
        </div>

        <form action="profile-update.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <!-- Profile Picture Upload -->
                <div class="col-md-4 text-center border-end">
                    <div class="mb-3 position-relative">
                        <img src="https://via.placeholder.com/150" id="preview" class="rounded-circle img-thumbnail shadow-sm" alt="Profile Picture" style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="mb-3">
                        <label for="profile_image" class="form-label small fw-bold">Change Profile Photo</label>
                        <input class="form-control form-control-sm" type="file" id="profile_image" name="profile_image" onchange="previewImage(event)">
                    </div>
                    <div class="text-muted small">
                        Allowed JPG, PNG or GIF. Max size 2MB.
                    </div>
                </div>

                <!-- Form Fields -->
                <div class="col-md-8 ps-md-4">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label small fw-bold">Full Name</label>
                            <input type="text" class="form-control" name="full_name" value="John Doe" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label small fw-bold">Professional Title</label>
                            <input type="text" class="form-control" name="title" value="Full Stack Developer">
                        </div>
                       
                        <div class="col-sm-6">
                            <label class="form-label small fw-bold">Email Address</label>
                            <input type="email" class="form-control" name="email" value="john@example.com" required>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label small fw-bold">Location</label>
                            <input type="text" class="form-control" name="location" value="Dhaka, Bangladesh">
                        </div>
                        <div class="col-12">
                            <label class="form-label small fw-bold">Bio / About Me</label>
                            <textarea class="form-control" name="bio" rows="4">Passionate about building scalable web applications with PHP and Laravel. Always exploring new technologies like Docker and optimizing backend performance.</textarea>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4 d-flex justify-content-end gap-2">
                        
                        <button type="submit" class="btn btn-primary px-4">Update Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Simple JS for Image Preview -->
<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>