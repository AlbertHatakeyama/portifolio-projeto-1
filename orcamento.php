<?php
include("header.php");
?>
<?php
// Verifica se o método de requisição é POST e se os campos foram preenchidos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['celular']) && isset($_POST['servico']) && isset($_POST['detalhes'])) {
    // Recuperando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $servico = $_POST['servico'];
    $detalhes = $_POST['detalhes'];
    $prazo = isset($_POST['prazo']) ? $_POST['prazo'] : '';

    // Aqui você pode adicionar a lógica para calcular o orçamento com base nos serviços selecionados, detalhes do projeto, prazo, etc.
    // Por simplicidade, vamos apenas exibir os dados recebidos
    echo "<h2>Orçamento Solicitado</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Celular:</strong> $celular</p>";
    echo "<p><strong>Serviço:</strong> $servico</p>";
    echo "<p><strong>Detalhes do Projeto:</strong> $detalhes</p>";
    echo "<p><strong>Prazo:</strong> $prazo</p>";
} else {
    // Caso os dados não tenham sido recebidos corretamente, exibe uma mensagem de erro
    echo "<h2>Ocorreu um erro</h2>";
    echo "<p>Por favor, preencha todos os campos do formulário.</p>";
}
?>



<section class="section-cirber text-white justify-content-start p-5">
    <div class="container">
        <div class="row">
            <div class=" col col-lg-12 py-3 fundo-forms">
            <form class="p-3" id="formulario" action="processa_orcamento.php" method="post">
                <h2>Solicite um Orçamento</h2>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                </div>
                <div>
                    <label for="celular">Celular</label>
                    <input type="tel" class="form-control" id="celular" name="celular" placeholder="+55(11)1234-4569" required>
                </div>
                <div class="form-group">
                    <label for="servico">Serviço</label>
                    <select class="form-control" id="servico" name="servico" required>
                        <option value="Desenvolvimento de Software Personalizado">Desenvolvimento de Software Personalizado</option>
                        <option value="Consultoria em Segurança Cibernética">Consultoria em Segurança Cibernética</option>
                        <option value="Desenvolvimento de Inteligência Artificial">Desenvolvimento de Inteligência Artificial</option>
                        <option value="Manutenção e Suporte Técnico">Manutenção e Suporte Técnico</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="detalhes">Detalhes do Projeto</label>
                    <textarea class="form-control" id="detalhes" name="detalhes" placeholder="Descreva seu projeto" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="prazo">Prazo (se aplicável)</label>
                    <input type="text" class="form-control" id="prazo" name="prazo" placeholder="Informe o prazo desejado">
                </div>
                <div class="form-group">
                    <div class="col-sm-1 mt-2" style="text-align:right;">
                        <input class="checkbox-contato" type="checkbox" required="" name="lgpd_aceite" value="ok" class="form-control" style="height:15px;">
                    </div>
                    <div class="col-sm-9" style="text-align:left;">
                        Ao enviar mensagem você autoriza a <a class="lgpd-bma-bt-saibamais text-decoration-none">Política de Privacidade</a> a coleta dos seus dados.
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col">
                        <button type="submit" class="botao-formulario-enviar">Enviar</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<?php
include("obrigado.php")
?>
<?php
include("footer.php")
?>
