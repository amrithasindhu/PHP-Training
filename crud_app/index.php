
<?php
include("header.php");
include("dbcon.php");

?>
<div class="box1">
<button type="button" class="btn btn-primary" data-bs-toggle ="modal" data-bs-target="#exampleModal">
Add Students
</button>
  </div>
    <table class="table table-hover table-bordered table-striped" >
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>

            </tr>
    
        </tr>
        </thead>
        <tbody>
            <?php

        $query="SELECT * FROM `students`";
        $result=$connection->query($query);
        if(!$result)
        {
            die("query failed");
        }

        else{
            while($row=$result->fetch(PDO::FETCH_ASSOC)){
                ?>
        <tr>
            <td><?php echo htmlspecialchars( $row['id']);?> </td>
            <td> <?php echo htmlspecialchars ($row['first_name']);?> </td>
            <td> <?php echo htmlspecialchars ($row['last_name']);?> </td>
            <td> <?php echo  htmlspecialchars ($row['age']);?> </td>
            <td><a href="update.php ?id=<?php echo htmlspecialchars( $row['id']);?>" class="btn btn-success">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a></td>
        

        </tr>
                <?php
        }
    }
       ?>    
        

        </tbody>
        </table>
        <?php
          if(isset($_GET['delete_msg']))
          {
            echo "<h6>".$_GET['delete_msg']."</h6>";
          }  
        ?>
        <form  action="insert_data.php" method="POST">

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row mb-3">
            <div class="col-md-6">
        <div class="form-group">
       
            <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="First Name"><br>
    </div>

        <div class="form-group">
        <label for="lname">Last Name</label>
    <input type="text" name="lname" placeholder="Last Name"><br>
    </div>

        <div class="form-group">
        <label for="age">Age</label>
    <input type="number" name="age" placeholder="Age">
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_students" value="Add">
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
</form>
        <?php include("footer.php"); ?>