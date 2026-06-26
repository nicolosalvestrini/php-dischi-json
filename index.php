<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#1f2d3a;
        }

        header{
            background:#061722;
        }

        .logo{
            width:45px;
        }

        .album-card{
            background:#102131;
            border:none;
            transition:.2s;
        }

        .album-card:hover{
            transform:translateY(-5px);
        }

        .album-cover{
            width:100%;
            aspect-ratio:1/1;
            object-fit:cover;
        }
    </style>
</head>

<body>

    <!-- HEADER -->

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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card album-card text-white h-100 p-4 text-center">
                        <img
                            class="album-cover mb-4"
                            src="https://via.placeholder.com/300"
                            alt="cover">
                        <h4 class="fw-bold">
                            Titolo Album
                        </h4>
                        <p class="text-light mb-2">
                            Nome Artista
                        </p>
                        <h5 class="fw-bold">
                            2024
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>