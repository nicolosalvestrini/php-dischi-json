<?php
require_once 'function.php';
$dischi = getDischi();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background:#1f2d3a;
        }
        header {
            background:#061722;
        }
        .logo {
            width:45px;
        }
        .album-card {
            background:#102131;
            border:none;
            transition:.2s;
        }
        .album-card:hover {
            transform:translateY(-5px);
        }
        .album-cover {
            width:100%;
            aspect-ratio:1/1;
            object-fit:cover;
        }
    </style>
</head>

<body>
<header class="py-3 mb-5">
    <div class="container">
        <img
            class="logo"
            src="img/spotify-logo.png"
            alt="Spotify">
    </div>
</header>

<main>
    <div class="container">
        <div class="row g-5 justify-content-center">

            <?php foreach ($dischi as $disco): ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card album-card text-white h-100 p-4 text-center">

                        <img
                            class="album-cover mb-4"
                            src="<?php echo $disco['cover']; ?>"
                            alt="cover">

                        <h4 class="fw-bold">
                            <?php echo $disco['title']; ?>
                        </h4>

                        <p class="text-light mb-2">
                            <?php echo $disco['artist']; ?>
                        </p>

                        <h5 class="fw-bold">
                            <?php echo $disco['year']; ?>
                        </h5>

                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>

    <form action="server.php" method="POST" class="m-5">

        <div class="row g-3">

            <div class="col-md-6">
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="Default Title"
                    class="form-control"
                    placeholder="Titolo"
                    required>
            </div>

            <div class="col-md-6">
                <input
                    type="text"
                    name="artist"
                    id="artist"
                    value="Default Artist"
                    class="form-control"
                    placeholder="Artista"
                    required>
            </div>

            <div class="col-md-6">
                <input
                    type="text"
                    name="cover"
                    id="cover"
                    value="https://via.placeholder.com/300x300.png?text=Default+Cover"
                    class="form-control"
                    placeholder="URL Cover"
                    required>
            </div>

            <div class="col-md-3">
                <input
                    type="number"
                    name="year"
                    id="year"
                    value="Default Year"
                    class="form-control"
                    placeholder="Anno"
                    required>
            </div>

            <div class="col-md-3">
                <input
                    type="text"
                    name="genre"
                    id="genre"
                    value="Default Genre"
                    class="form-control"
                    placeholder="Genere"
                    required>
            </div>

            <div class="col-12">
                <button class="btn btn-success">
                    Aggiungi Disco
                </button>
            </div>

        </div>

    </form>
</main>

</body>
</html>