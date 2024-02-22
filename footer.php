
    <!-- FOOTER -->
    <section class="footer-carbono py-4">
        <div class="direitos-autorais">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12 text-center">
                        <img src="assets/images/apresentacao/logo.png" class="logo-footer img-fluid" alt="">
                        <p class="text-white font-weight-bolder">Transformando o futuro, hoje</p>
                    </div>
                    <div class=" col-md-4 col-12">
                        <div class="footer-center text-center link-sublinar">
                            <div class="contact-info"class="link-sublinar">
                                <h5 class="pt-2 text-white"></i>Contate-nos</h5>
                                <p class="py-2"><i class="fa-brands fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=5511123456789" class="link-sublinar m-2">(11) 12345-6789</a>
                                <p class=""><i class="fa-solid fa-envelope"></i><a href="lupa_tecnologia@gmail.com" class="link-sublinar m-2">lupa_tecnologia@gmail.com</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 text-center pb-2">
                        <p class="paragrafo-direitos-autorais mb-0 text-2 text-white">©Todos os direitos reservados | <?=date('Y')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <script src="</assets/js/jquery-3.2.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="</assets/js/jquery-slim.min.js"><\/script>')</script>
    <script src="</assets/js/popper.min.js"></script>
    <script src="</assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/holder.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/language.js"></script>
    <script>
        var i = 0;
        var speed = 200;

        var texts = [
            'futuro promissor',
            'próspero',
            'inovador'
        ];

        function typeWriter(txt) {
            if (i < txt.length) {
                document.getElementById("texto_digitando").innerHTML += txt.charAt(i);
                i++;
                setTimeout(function() {
                    typeWriter(txt);
                }, speed);
            } else {
                setTimeout(function() {
                    // Remove o texto existente antes de mostrar o próximo
                    removeText(txt);
                }, speed * 2); // Intervalo antes de remover o texto
            }
            }

            function removeText(txt) {
                var displayText = document.getElementById("texto_digitando").innerHTML;
                if (displayText.length > 0) {
                    displayText = displayText.slice(0, -1); // Remove o último caractere
                    document.getElementById("texto_digitando").innerHTML = displayText;
                    setTimeout(function() {
                        removeText(txt);
                    }, speed / 2); // Intervalo antes de remover o próximo caractere
                } else {
                    // Após a remoção do texto anterior, inicia a exibição do próximo texto
                    i = 0; // Reinicia o índice para o próximo texto
                    var index = texts.indexOf(txt);
                    if (index < texts.length - 1) {
                        typeWriter(texts[index + 1]);
                    } else {
                        typeWriter(texts[0]); // Volta para o primeiro texto
                    }
                }
            }

            typeWriter(texts[0]); // Inicia a função com o primeiro texto
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var scrollingSection = document.getElementById("scrollingSection");

            // Função para verificar a posição da página e mostrar/ocultar a seção
            function checkScroll() {
                var scrollPosition = window.scrollY;
                var sectionPosition = scrollingSection.offsetTop;
                var windowHeight = window.innerHeight;

                if (scrollPosition > sectionPosition - (windowHeight / 2)) {
                    scrollingSection.style.opacity = 1;
                } else {
                    scrollingSection.style.opacity = 0;
                }
            }

            // Adiciona um ouvinte de evento de rolagem para chamar a função checkScroll
            window.addEventListener("scroll", checkScroll);

            // Chama a função checkScroll quando a página carrega para verificar a posição inicial
            checkScroll();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.saiba-mais').click(function() {
                $('#formulario').show(); // Exibe o formulário quando o botão é clicado
                $('html, body').animate({
                    scrollTop: $('#formulario').offset().top // Rola a página até o formulário
                }, 'slow');
            });
        });
    </script>


    </body>
</html>