<?php
// if (isset($_SESSION['user_id'])) {
//     print_r($_SESSION);
// }
// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../login.php");
//     exit();
// } 

$categories = "SELECT * from categories ";
$runQuery  = mysqli_query($db, $categories);
// echo "<pre>";
// var_dump($runQuery);
// echo "<pre>";
$rows  =  mysqli_num_rows($runQuery); //check how many rows are presenet  
//echo $row;
// if ($rows > 0) {
//     echo ' categories avaiable';
// }
//print_r(mysqli_fetch_assoc($runQuery)) ;// single row check
// echo "<pre>";
// print_r(mysqli_fetch_all($runQuery)) ; // multiple row check
// echo "<pre>";

// while ($row = mysqli_fetch_assoc($runQuery)) {
//     echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
// }


?>
<div class="card border-0 shadow-sm mb-5">
    <div class="card-body p-4">
        <div class="card-header d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0">Category List</h5>
            <a href="category-create.php" class="btn btn-primary">Add Category</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($runQuery)) {
                    ?>
                        <tr>
                            
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['slug']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td>
                                <?php if ($row['status'] == 1): ?>
                                    <span class="badge bg-success">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Inactive</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo date('d M Y', strtotime($row['created_at'])); ?></td>
                            <td>
                                <a href="" class="btn btn-success">edit</a>
                                <a href="" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    <?php
                    } 
                    ?>
                  
                </tbody>
            </table>
        </div>

    </div>
</div>