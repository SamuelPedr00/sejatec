<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>FallBack</title>
</head>

<body>

    <header>
        <nav class="navbar col-11 m-auto navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/Logo.png " class="imgLogo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Suporte</a>
                        </li>


                    </ul>

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="mt-4">
        <div class="container-fluid">
            <div class="row col-11 mx-auto">
                <div class="col-md-8 mb-3">

                    <img src="img/Lost.png">

                </div>
                <div class="col-md-4 mb-3">

                    <h1 class="card-title">A pagina que você esta tentando acessar consta como inexistente, volte para a pagina principal ou contate o Suporte</h1>

                    <a href="#" class="btn btn-secondary">Home</a> <a href="#" class="btn btn-secondary">Suporte</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>