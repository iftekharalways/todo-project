<?php 

include './include/header.php';
$errors = $_SESSION['errors']  ?? [];
$old = $_SESSION['old'] ?? null;
?>

    <!--nav  -->
    <!-- container -->
      <div class="container mt-3 d-flex justify-content-center align-items-center">

    <div class="card shadow-lg border-0" style="width: 500px;">

        <!-- Card Header -->
        <div class="card-header   text-center py-3">
            <h3 class="mb-0">📝 Todo List</h3>
        </div>

        <!-- Card Body -->
        <div class="card-body p-4">

            <form action="./controller/TodoStore.php" method="POST">

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">
                        Title
                    </label>
                    <input
                        value="<?= $old['title'] ?? '' ?>"
                        type="text"
                        class="form-control <?= isset($errors['title_error']) ? 'is-invalid' : '' ?> "
                        id="title"
                        name="title"
                        placeholder="Enter your title"
                        
                    >
                    <span class="text-danger"><?= $errors['title_error'] ?? null ?></span>
                </div>

                <!-- Description -->
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">
                        Description
                    </label>
                    <input  value="<?= $old['description'] ?? '' ?>"
                        class="form-control  <?= isset($errors['description_error']) ? 'is-invalid' : '' ?>"
                        id="description"
                        name="description"
                        rows="4"
                        placeholder="Write your description...">
                      <span class="text-danger"><?= $errors['description_error'] ?? null ?></span>
                </div>

                <!-- Deadline -->
                <div class="mb-4">
                    <label for="deadline" class="form-label fw-semibold">
                        Deadline
                    </label>
                    <input
                     value="<?= $old['deadline'] ?? '' ?>"
                        type="date"
                        class="form-control"
                        id="deadline"
                        name="deadline"
                    >
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        ➕ Add Todo
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>
    <!-- container -->
   
<?php
include './include/footer.php';

?>