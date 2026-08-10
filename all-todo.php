<?php 
include './include/header.php';
include "database/env.php";
$query ="SELECT * FROM `todos`";
$res = mysqli_query($conn,$query);
$todos = mysqli_fetch_all($res, 1);

?>
<div class="container my-5">
  <div class="row">
   
  <?php 
  foreach($todos as $todo){
    ?>
     <div class="col-lg-4 mb-3">
      <div class="card">
      <div class="card-header"><?= $todo['title'] ?> - 
      <span class="badge bg-success-subtle text-success"> <?= $todo['it_complete'] ? 'Completed' : 'Pending' ?> </span> 
    </div>
      <div class="card-body">
        <p><?= $todo['description'] ?></p>
        <b> <?= $todo['deadline'] ?></b>
      </div>
      <div class="card-footer">
       <a class="btn btn-sm btn-primary" href="">Complete</a>
       <a class="btn btn-sm btn-warning" href="">Edit</a>
       <a class="btn btn-sm btn-danger" href="">Delete</a>
      </div>

      </div>
    </div>
    <?php
  }

  ?>
   
  </div>
</div>

<?php
include './include/footer.php';
?>