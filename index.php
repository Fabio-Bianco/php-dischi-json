<?php
require_once __DIR__ . '/functions.php';
$discs = getDisch();
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Lista Dischi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Stile custom -->
  <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">🎵 Dischi JSON</a>
    </div>
  </nav>

  <main class="container">

    <!-- Form centrato -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7">
        <form id="add-disc-form" action="add_disc.php" method="POST" class="mb-4">
          <div class="row g-2">
            <div class="col-md-6">
              <input type="text" name="titolo" class="form-control" placeholder="Titolo" required>
            </div>
            <div class="col-md-6">
              <input type="text" name="artista" class="form-control" placeholder="Artista" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="genere" class="form-control" placeholder="Genere" required>
            </div>
            <div class="col-md-4">
              <input type="number" name="anno" class="form-control" placeholder="Anno" required>
            </div>
            <div class="col-md-4">
              <input type="url" name="cover" class="form-control" placeholder="URL Copertina" required>
            </div>
          </div>
          <div class="mt-3 text-end">
            <button type="submit" class="btn btn-success">Aggiungi Disco</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Griglia dischi -->
    <div class="row g-4">
      <?php foreach ($discs as $disc) { ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 shadow-sm">
            <img src="<?php echo $disc['cover'] ?>" alt="<?php echo htmlspecialchars($disc['titolo']) ?>" class="card-img-top w-100">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php echo htmlspecialchars($disc['titolo']) ?></h5>
              <p class="card-text text-muted"><?php echo htmlspecialchars($disc['artista']) ?></p>
              <div class="mt-auto">
                <span class="badge bg-primary me-1"><?php echo htmlspecialchars($disc['genere']) ?></span>
                <span class="badge bg-secondary"><?php echo (int)$disc['anno'] ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
