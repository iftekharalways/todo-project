<?php 
include './include/header.php';
include "database/env.php";
$query ="SELECT * FROM `todos` ORDER BY id DESC";
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
      <span class="badge bg-<?= $todo['it_complete'] ? 'success' : 'warning' ?>-subtle text-<?= $todo['it_complete'] ? 'success' : 'warning' ?>"> <?= $todo['it_complete'] ? 'Completed' : 'Pending' ?> </span> 
    </div>
      <div class="card-body">
        <p><?= $todo['description'] ?></p>
        <b> <?= $todo['deadline'] ?></b>
      </div>
      <div class="card-footer">
       <a class="<?= $todo['it_complete'] ? 'disabled' : ''  ?> btn btn-sm btn-primary" href="">Complete</a>
       <a class="<?= $todo['it_complete'] ? 'disabled' : ''  ?> btn btn-sm btn-warning" href="">Edit</a>
       <a class=" <?= $todo['it_complete'] ? 'disabled' : ''  ?> btn btn-sm btn-danger" href="">Delete</a>
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