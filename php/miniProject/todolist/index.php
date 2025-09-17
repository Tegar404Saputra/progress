<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="card shadow">
      <div class="card-body">
        <h1 class="card-title text-center mb-4">To-Do List</h1>

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="d-flex mb-3">
          <input type="text" name="task" id="task" class="form-control me-2" placeholder="Tambahkan tugas baru...">
          <button name="add" type="submit" class="btn btn-primary">Tambah</button>
        </form>

        <?php
        session_start();
        
        if (!isset($_SESSION["tasks"])) {
          $_SESSION["tasks"] = [];
        }

        if (isset($_POST["add"])) {
          $task = trim($_POST["task"]);
          if (!empty($task)) {
            $_SESSION["tasks"][] = $task;
          }
          header("Location: ". htmlspecialchars($_SERVER["PHP_SELF"]));
          //exit();
        }

        if (isset($_POST["delete"])) {
          $deleteIndex = $_POST["delete"];
          if ($_SESSION["tasks"]) {
            unset($_SESSION["tasks"][$deleteIndex]);
            $_SESSION["tasks"] = array_values($_SESSION["tasks"]);
          }
          header("Location: " . htmlspecialchars($_SERVER["PHP_SELF"]));
          exit();
        }
        ?>

        <ul class="list-group">
          <?php foreach ($_SESSION["tasks"] as $index => $task): ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= htmlspecialchars($task) ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="d-inline">
              <input type="hidden" name="delete" value="<?= $index ?>">
              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>