   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if(isset($_SESSION['msg'])){
  ?>
<script>
  Swal.fire({
  position: "top-end",
  icon: "<?= $_SESSION['msg']['type'] ?>",
  title: "<?= $_SESSION['msg']['msg'] ?>",
  showConfirmButton: false,
  timer: 1500
});
   </script>
   <?php
}

session_unset();
?>

   
</body>
</html>