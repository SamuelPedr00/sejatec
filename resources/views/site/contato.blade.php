<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>Seja Tec</title>
</head>

<body>

    <header>
        <nav class="navbar col-12 m-auto navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/Logo.png" class="imgLogo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="/contato">Contato</a>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="sistemas">Sistemas de Gestão</a></li>
                                <li><a class="dropdown-item" href="personalizados">Criação de Sistemas</a></li>
                                <li><a class="dropdown-item" href="suporte">Suporte de TI</a></li>
                                <li><a class="dropdown-item" href="infraestrutura">Infraestrutura de TI</a></li>
                            </ul>
                        </li>
                    </ul>
                    <img src="img/Ideia.png" class="imgLogo d-none d-lg-block">
                </div>
            </div>
        </nav>
    </header>
    <main class="mt-4 marginPerson">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="img/Contato.png" class="imgPrincipal img-fluid">
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Solicite Orçamento por Whatsapp</h5>
                                    <p class="card-text">Solicite seu orçamento através do WhatsApp no número (62) 99304-4064 ou clique no botão abaixo.</p>
                                    <a  href="https://api.whatsapp.com/send?phone=62993044064" target="_blank" class="btn btn-success">Vá para Whatsapp</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Solicite Orçamento por Email</h5>
                                    <p class="card-text">Solicite um orçamento através do nosso e-mail: vendas@sejatec.com.br</p>
                                    <button class="btn btn-secondary" onclick="copyLink()">Clique para Copiar o Email</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer bg-secondary text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-12 text-center-cellfone">
                    <img src="img/Logo.png" class="imgLogoFooter">
                </div>
                <div class="col-md-4 col-12 text-center-cellfone">
                    <h5 class="text-dark">Contato</h5>
                    <p>Telefone: (62) 99304-4064</p>
                    <p>Email: vendas@sejatec.com.br</p>
                </div>
                <div class="col-md-5 col-12 text-center-cellfone">
                    <h5 class="text-dark">Quem Somos</h5>

                    <p>Na Sejatec, transformamos ideias em inovação. Seja tecnológico. Sejatec.</p>
                    <p>Nosso objetivo é trazer o melhor da tecnologia para o seu mundo, adaptando-nos às suas necessidades individuais. Conte conosco para oferecer as melhores soluções tecnológicas, sob medida para você</p>
                </div>
            </div>
        </div>
    </footer>

</body>

<script>
function copyLink() {
  var copyText = "vendas@sejatec.com.br";
  navigator.clipboard.writeText(copyText).then(function() {
    alert("Email copiado para a área de transferência: " + copyText);
  }, function() {
    alert("Erro ao copiar o email.");
  });
}
</script>


</html>