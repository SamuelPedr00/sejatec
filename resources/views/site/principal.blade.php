<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
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
                        <li class="nav-item dropdown mx-2">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Sistemas de Gestão</a></li>
                                <li><a class="dropdown-item" href="#">Criação de Sistemas</a></li>
                                <li><a class="dropdown-item" href="#">Suporte de TI</a></li>
                                <li><a class="dropdown-item" href="#">Infraestrutura de TI</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="/contato">Contato</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#">Suporte</a>
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
                    <img src="img/ImgPrincipal.png" class="imgPrincipal img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 my-3">
                            <a href="url_da_pagina_destino">
                                <div class="card text-bg-dark">
                                    <img src="img/Logo.png" class="card-img" alt="...">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title mb-4">Sistemas de Gestão Empresarial</h5>
                                        <p class="card-text text-on-notebook">Sistemas de Gestão Financeira e Juridica para Empresas.</p>
                                        <p class="card-text hide-on-notebook">Oferecemos sistemas de gestão empresarial para auxiliar no gerenciamento financeiro, jurídico da sua empresa. Conte conosco para simplificar a administração do seu negócio.</p>
                                        <p class="card-text"><small>Seja tecnológico. Sejatec.</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5 my-3">
                            <a href="url_da_pagina_destino">
                                <div class="card text-bg-dark">
                                    <img src="img/Logo.png" class="card-img" alt="...">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title mb-4">Criação de Sistemas Personalizados</h5>
                                        <p class="card-text text-on-notebook">Criação de Sistemas personalizados com base na necessidade do Cliente.</p>
                                        <p class="card-text hide-on-notebook">Desenvolvemos sistemas personalizados para atender às necessidades específicas do seu negócio, tanto para web quanto para dispositivos móveis. Conte conosco para criar soluções que se adequem perfeitamente às suas demandas.</p>
                                        <p class="card-text"><small>Seja tecnológico. Sejatec.</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5 my-3">
                            <a href="url_da_pagina_destino" class="text-decoration-none">
                                <div class="card text-bg-dark">
                                    <img src="img/Logo.png" class="card-img" alt="...">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title mb-4">Suporte de TI</h5>
                                        <p class="card-text text-on-notebook">Manutenção de Computadores, Instalação de cameras, Atendimento remoto e presencial.</p>
                                        <p class="card-text hide-on-notebook">Fornecemos suporte de TI completo, incluindo manutenção de computadores, instalação de câmeras de segurança e atendimento tanto presencial quanto remoto. Conte conosco para resolver suas necessidades tecnológicas de forma rápida e eficiente</p>
                                        <p class="card-text"><small>Seja tecnológico. Sejatec.</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-5 my-3">
                            <a href="url_da_pagina_destino">
                                <div class="card text-bg-dark">
                                    <img src="img/Logo.png" class="card-img" alt="...">
                                    <div class="card-img-overlay text-center">
                                        <h5 class="card-title mb-4">Infraestrutura de TI</h5>
                                        <p class="card-text text-on-notebook">Infraestrutura de Rede, Gerenciamento de servidores, Backup, Monitoramento e etc...</p>
                                        <p class="card-text hide-on-notebook">Planejamos e implementamos soluções completas de infraestrutura de TI para sua empresa, incluindo cabeamento estruturado, gerenciamento de servidores, backup, monitoramento e segurança da informação. Conte conosco para garantir a estabilidade e segurança do seu ambiente tecnológico.</p>
                                        <p class="card-text"><small>Seja tecnológico. Sejatec.</small></p>
                                    </div>
                                </div>
                            </a>
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

</html>