<?php
include("header.php");
?>
<section class="desenvolvimento-software">
    <div class="row">
        <div class="container fundo-slogan fundo-cab-portifolio ">
            <h1 class="text-white">Desenvolvimento de Software Personalizado</h1>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="bg-secondary col-md-12 col-12 text-white text-center rounded p-4">
                <h2 >Desenvolvimento de Software</h2>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <p>No mundo atual, onde a tecnologia desempenha um papel fundamental em todos os setores, ter um software que atenda às necessidades específicas do seu negócio é essencial. É por isso que oferecemos serviços de desenvolvimento de software personalizado, projetados para proporcionar soluções sob medida que se alinham perfeitamente aos seus objetivos e desafios únicos.</p>
            </div>
            <div class="col-md-4 col-12">
                <img src="assets/images/apresentacao/desenvolvedor-software.jpg" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>
</section>
<hr>
<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
        <div class="container mt-5">
  <h1 class="text-center mb-4">FAQ - Desenvolvimento de Software na Empresa</h1>

  <div id="accordion">

    <!-- Pergunta 1 -->
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Por que é importante investir em desenvolvimento de software na nossa empresa?
          </button>
        </h5>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          O desenvolvimento de software permite automatizar processos, aumentar a eficiência operacional, melhorar a comunicação interna e externa, além de possibilitar a criação de produtos e serviços inovadores para atender às necessidades do mercado.
        </div>
      </div>
    </div>

    <!-- Pergunta 2 -->
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Como o desenvolvimento de software pode contribuir para o crescimento da empresa?
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          Através do desenvolvimento de software personalizado, a empresa pode criar soluções específicas para os seus processos e necessidades, o que pode resultar em maior produtividade, redução de custos e maior competitividade no mercado.
        </div>
      </div>
    </div>

    <!-- Pergunta 3 -->
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Quais são os benefícios de ter uma equipe de desenvolvimento de software interna?
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          Ter uma equipe de desenvolvimento de software interna permite maior controle sobre o processo de desenvolvimento, facilita a comunicação entre os diferentes setores da empresa e possibilita uma resposta mais rápida às mudanças e demandas do mercado.
        </div>
      </div>
    </div>

  </div>
</div>
            
        </div>
    </div>
</section>
<script>
    const questionWrappers = document.querySelectorAll('.q-wrapper');
    questionWrappers.forEach((wrapper) => {
    wrapper.addEventListener('click', showAnswer);
    wrapper.addEventListener('keydown', (e) => {
        if (e.key == 'Enter') {
        showAnswer(e);
        }
    });
    });

    function showAnswer(e) {
    questionWrappers.forEach((wrapper) => {
        if (wrapper == e.currentTarget) {
        wrapper.firstElementChild.classList.toggle('h3-active');
        wrapper.lastElementChild.classList.toggle('svg-animation');
        wrapper.nextElementSibling.classList.toggle('p-visible');
        } else {
        wrapper.firstElementChild.classList.remove('h3-active');
        wrapper.lastElementChild.classList.remove('svg-animation');
        wrapper.nextElementSibling.classList.remove('p-visible');
        }
    });
    }
</script>

<?php
include("footer.php")
?>