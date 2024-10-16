<?php


require_once("header.php");
require_once("student.php");

$error = false;
$success=false;

if (isset($_GET['success'])) {
    $success = $_GET['success'];
}

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}


$studentObj = new Student();
$students = $studentObj->getAllStudents();
?>

<div class="container mt-5">
    <!-- <?php if ($success == 'added'): ?>
        <div class="alert alert-success">Student added successfully!</div>
    <?php elseif ($success == 'updated'): ?>
        <div class="alert alert-success">Student updated successfully!</div>
    <?php elseif ($success == 'deleted'): ?>
        <div class="alert alert-success">Student deleted successfully!</div>
    <?php endif; ?>

    <?php if ($error == 'add'): ?>
        <div class="alert alert-danger">There was an error adding the student.</div>
    <?php elseif ($error == 'update'): ?>
        <div class="alert alert-danger">There was an error updating the student.</div>
    <?php elseif ($error == 'delete'): ?>
        <div class="alert alert-danger">There was an error deleting the student.</div>
    <?php endif; ?> -->

    <div class="box1 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Add Student
        </button>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($students): ?>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['id']); ?></td>
                        <td><?php echo htmlspecialchars($student['name']); ?></td>
                        <td><?php echo htmlspecialchars($student['age']); ?></td>
                        <td><?php echo htmlspecialchars($student['class']); ?></td>
                        <td><?php echo htmlspecialchars($student['email']); ?></td>
                        <td>
                        
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $student['id']; ?>">
                                Update
                            </button>

                        
                            <div class="modal fade" id="updateModal<?php echo $student['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel<?php echo $student['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="update.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateModalLabel<?php echo $student['id']; ?>">Update Student</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                          
                                                <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

                               
                                                <div class="form-group mb-3">
                                                    <label for="name<?php echo $student['id']; ?>"> Name</label>
                                                    <?php 
                                                        $nameParts = explode(' ', $student['name'], 2);
                                                        $name = $nameParts[0];
                                                      
                                                    ?>
                                                    <input type="text" name="name" class="form-control" placeholder=" Name" value="<?php echo htmlspecialchars($name); ?>" required>
                                                </div>
                          
                                               
                                 
                                                <div class="form-group mb-3">
                                                    <label for="age<?php echo $student['id']; ?>">Age</label>
                                                    <input type="number" name="age" class="form-control" placeholder="Age" value="<?php echo htmlspecialchars($student['age']); ?>" required>
                                                </div>
                               
                                                <div class="form-group mb-3">
                                                    <label for="class<?php echo $student['id']; ?>">Class</label>
                                                    <input type="text" name="class" class="form-control" placeholder="Class" value="<?php echo htmlspecialchars($student['class']); ?>" required>
                                                </div>
                             
                                                <div class="form-group mb-3">
                                                    <label for="email<?php echo $student['id']; ?>">Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-success" name="update_student" value="Update">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                        <td>
           
                            <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
                                <input type="submit" class="btn btn-danger" name="delete_student" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No students found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>


    <form action="insert_data.php" method="POST">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group mb-3">
                            <label for="name">First Name</label>
                            <input type="text" name="name" class="form-control" placeholder="First Name" required>
                        </div>

                       
    
                        <div class="form-group mb-3">
                            <label for="age">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Age" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="class">Class</label>
                            <input type="text" name="class" class="form-control" placeholder="Class" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" name="add_students" value="Add">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php require_once("footer.php"); ?>
