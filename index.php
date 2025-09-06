<?php

require_once __DIR__ . '/functions.php';

$discs = getDisch();

// var_dump($discs); 

?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Lista Dischi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">🎵 Dischi JSON</a>
        </div>
    </nav>

    <!-- Contenuto principale -->
    <main class="container">
        <div class="row g-4">


            <!-- Utilizzo del foreach (php) per ciclare i dischi; CARD ESEMPIO (saranno ripetute per ogni disco) -->

            <?php foreach ($discs as $disc) { ?>


                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img class="w-100" src="<?php echo $disc['cover'] ?>" alt="<?php echo $disc['titolo'] ?>"
                            class="card-img-top" alt="Cover disco">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">
                                <?php echo $disc['titolo'] ?>
                            </h5>
                            <p class="card-text text-muted">
                                <?php echo $disc['artista'] ?>
                            </p>
                            <div class="mt-auto">
                                <span class="badge bg-primary me-1">
                                    <?php echo $disc['genere'] ?>
                                </span>
                                <span class="badge bg-secondary">

                                    <?php echo $disc['anno'] ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FINE CARD -->

            <?php } ?>
        </div>
    </main>

    <!-- Bootstrap JS (opzionale se serve interattività) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>