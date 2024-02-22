<?php
include("header.php");
?>
<section class="relative flex flex-col justify-center overflow-hidden rounded-b-[3rem] pb-20 pt-40 shadow-2xl md:rounded-b-[4rem] min-h-screen md:max-h-[50rem]">
    <div class="relative overflow-hidden bg-black-100 mb-n2">
        <video autoplay muted loop class="video-container  object-cover object-center">
            <source src="assets/images/banner/banner-principal.mp4" type="video/mp4">
        </video>
        <div class="text-container absolute top-0 left-0 w-full h-full flex items-center justify-center py-5">
            <div class="container mx-auto alinhamento-text">
                <div class="col-md-6 ">
                    <article id="banner" class="text-white">
                        <h1 class="title-text text-[calc(2rem_+_1vw)] ">Nossa missão é assegurar que você tenha um<br>
                            <span class="text-warning">
                                <span id="texto_digitando"></span>
                                <span class="pointer ml-1 inline-block h-1 w-5 rounded-full bg-primary"></span>
                            </span>
                        </h1>
                    </article>
                </div>               
            </div>
        </div>
    </div>
</section>
<section id="">
    <article class="container">
        <div class="row mb-0 justify-content-center align-items-center">
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="assets/images/apresentacao/parte-americana.jpeg" class="img-fluid part-historia-a rounded mx-auto d-block" alt="">
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-xl-6 mb-4 mb-lg-0 my-5">
                <h2 class="text-dark mb-4 mt-4 font">
                    A Lupa Tecnologia
                </h2>
                <p class="mb-4 text-dark font">
                    A Lupa Tecnologia foi fundada em 12 de maio de 1965 por quatro notáveis ​​visionários: Roberto Ārya e Marcos Lixa, engenheiros brasileiros do ITA, e Richard Thompson e Michael Foster, cientistas americanos do MIT. Durante a tensa era da guerra fria, estes talentosos profissionais decidiram combinar as suas competências e conhecimentos para criar uma empresa inovadora que se tornar um pilar do desenvolvimento tecnológico.
                    <br><br>
                    Roberto Ārya e Marcos Lixa, que se realçaram no ITA, expedir uma perspectiva única sobre engenharia aeroespacial e sistemas avançados. Sua paixão pela pesquisa e excelência técnica norteia a Lupa Tecnologia desde o início.
                    <br><br>
                    Do lado americano, Richard Thompson e Michael Foster, com sua vasta experiência no MIT, contribuíram para o desenvolvimento da empresa com suas habilidades em engenharia eletrônica e sistemas complexos. Uma visão global permite à Lupa expandir suas atividades para atender às necessidades globais de governos e empresas de diversos setores.
                    <br><br>
                    Desde a sua criação, a Lupa Tecnologia tem sido um farol de inovação, provendo sistemas e peças de alta tecnologia para governos e empresas em todo o mundo. O legado destes quatro fundadores continua a inspirar a empresa que se mantém na vanguarda da tecnologia, procurando sempre soluções inovadoras para os desafios modernos.
                </p>
            </div>
        </div>
    </article>
</section>
<section class="bg-dark py-4" id="diferencial">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-text text-start text-white">O que nos diferencia !</h1>
            </div>
        </div>
        <!-- NOSSO DIFERENCIAL -->
        <div class="row my-4">
            <div class="col-md-3 col-12">
                <div class="diferencial-item ">
                    <div class="mt-2">
                        <p class="text btn">Inovação Sustentável</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="diferencial-item ">
                    <div class="w-100">
                        <p class="text btn">Abordagem Humanizada na Tecnologia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="diferencial-item ">
                    <div class="w-100">
                        <p class="text btn">Capacidade de Adaptação e Resiliência </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="diferencial-item ">
                    <div class="w-100">
                        <p class="text btn">Colaboração e Cultura Empresarial Forte</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center ">
            <button type="button" class="saiba-mais">
                <span class="fw-bold">Saiba mais!</span>
            </button>
        </div>
    </div>
</section>
<!--Serviços -->
<section class="bg-white my-4">
    <div class="container">
        <div class="row">
            <div class="card-body col-md-6 col-12 d-flex align-items mb-4 justify-content-center">
                <a href="" class="text-decoration-none">
                    <div class="text-body p-3 p-md-4 border-ratius border shadow-lg ">
                        <div class="rounded mb-4 d-flex justify-content-center">
                            <img src="assets/images/apresentacao/desenvolvimento-de-software.jpg" alt="imagem" loading="lazy" class="img-fluid rounded img-produtos">
                        </div>
                        <h5 class="fw-bolder mb-0">
                            Desenvolvimento de Software Personalizado
                        </h5>            
                        <span class="d-block mt-3 fw-semibold text-primary hover_color">
                            <i class="fa-solid fa-hammer fa-fw"></i>
                            Criação de aplicativos e sistemas personalizados
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-body col-md-6 col-12 d-flex align-items mb-4 justify-content-center">
                <a href="" class="text-decoration-none">
                    <div class="text-body p-3 p-md-4 border-ratius border shadow-lg ">
                        <div class="rounded mb-4 d-flex justify-content-center">
                            <img src="assets/images/apresentacao/seguranca-cibernetica.jpg" alt="imagem" loading="lazy" class="img-fluid rounded img-produtos">
                        </div>
                        <h5 class="fw-bolder mb-0">
                            Consultoria em Segurança Cibernética
                        </h5>            
                        <span class="d-block mt-3 fw-semibold text-primary hover_color">
                            <i class="fa-solid fa-hammer fa-fw"></i>
                            Avaliação e fortalecimento da segurança
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-body col-md-6 col-12 d-flex align-items mb-4 justify-content-center">
                <a href="" class="text-decoration-none">
                    <div class="text-body p-3 p-md-4 border-ratius border shadow-lg ">
                        <div class="rounded mb-4 d-flex justify-content-center">
                            <img src="assets/images/apresentacao/inteligencia-artificial.jpg" alt="imagem" loading="lazy" class="img-fluid rounded img-produtos">
                        </div>
                        <h5 class="fw-bolder mb-0">
                            Desenvolvimento de Inteligência Artificial 
                        </h5>            
                        <span class="d-block mt-3 fw-semibold text-primary hover_color">
                            <i class="fa-solid fa-hammer fa-fw"></i>
                            Implementação de soluções baseadas em IA e ML
                        </span>
                    </div>
                </a>
            </div>
            <div class="card-body col-md-6 col-12 d-flex align-items mb-4 justify-content-center">
                <a href="" class="text-decoration-none">
                    <div class="text-body p-3 p-md-4 border-ratius border shadow-lg ">
                        <div class="rounded mb-4 d-flex justify-content-center">
                            <img src="assets/images/apresentacao/manutencao-suporte-tecnico.jpg" alt="imagem" loading="lazy" class="img-fluid rounded img-produtos">
                        </div>
                        <h5 class="fw-bolder mb-0">
                            Manutenção e Suporte Técnico
                        </h5>            
                        <span class="d-block mt-3 fw-semibold text-primary hover_color">
                            <i class="fa-solid fa-hammer fa-fw"></i>
                            Oferta de serviços de suporte técnico contínuo
                        </span>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center ">
            <button type="button" class="saiba-mais">
                <span class="fw-bold" >Saiba mais!</span>
            </button>
        </div>
    </div>
</section>
<?php include 
("obrigado.php");
?>
<section class="inovacoes my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Inovação</strong>
                        <h3 class="mb-0">Cirurgia do Futuro</h3>
                        <div class="mb-1 text-muted">Junho 2025</div>
                            <p class="card-text mb-auto">A Lupa Tecnologia, líder em inovação médica, desvenda a cirurgia do futuro: 100% robotizada.</p>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        <img src="assets/images/apresentacao/cirurgia.jpeg" class="img-inovacao" alt="Circle image">
                    </div>
                </div>
            </div>
        <div class="col-md-6 mt-4">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Inovação em andamento</strong>
                    <h3 class="mb-0">As Asas da Autonomia</h3>
                    <div class="mb-1 text-muted">Dezembro 2027</div>
                        <p class="mb-auto">A Lupa Tecnologia redefine os limites da aviação com seu avião autônomo.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="assets/images/apresentacao/aviacao-autonuma.png" class="img-inovacao" alt="Circle image">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="text-center">
            <button type="button" class="saiba-mais">
                <span class="fw-bold">Saiba mais!</span>
            </button>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>