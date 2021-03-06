<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<body>



<div class="container p-4">
<div class="row">
    <div class="col-md-4">

        <?php if(isset($_SESSION["message"])){ ?>
            <div class="alert alert-<?= $_SESSION["message_type"];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION["message"] ?>
          </div>
        <?php } session_unset()?>


        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name ="title" class="form-control" 
                    placeholder="Task title" autofocus>

                </div>
                <div class="form-group">
            <textarea name="description" rows="2" class="form-control"
            placeholder="Task Description" autofocus>  </textarea>
        </div>
        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task"> 
         
            </form>
        </div>

        
    </div>
    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>  
                    <th> Title </th>
                    <th> Description </th>
                    <th> Created at </th>
                    <th> Actions </th>
                    </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM task";
                $result_taks=mysqli_query($conn,$query);
                
                while($row=mysqli_fetch_array($result_taks)){ ?>
                    <tr> 
                        <td><?php echo $row["title"] ?> </td>
                        <td><?php echo $row["descrip"] ?> </td>   
                        <td><?php echo $row["created_at"] ?> </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>"class="btn btn-secondary" >
                                <i class="fas fa-marker"></i>
                </a> 
                <a href="delete_task.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                    <i class="fas fa-trash-alt" src="delete_task.php"></i>
                </a>              
                </tr>
                <?php }            ?>
        </tbody>
    </div>
</div>
</div>
</body>
<?php include("includes/footer.php") ?>

</html>
