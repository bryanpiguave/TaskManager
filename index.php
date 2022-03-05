<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<body>



<div class="container p-4">
<div class="row">
    <div class="col-md-4">

        <?php if(isset($_SESSION["message"])){ ?>
            <div class="alert alert-<?= $_SESSION["message_type"];?> success alert-dismissible fade show" role="alert">
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


    </div>
</div>
</div>
</body>
<?php include("includes/footer.php") ?>

</html>
