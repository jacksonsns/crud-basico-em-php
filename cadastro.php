<?php
    include_once 'head.php';
?>

    <div class="container" style="padding: 25px;">
        <div class="row">
            <form action="cad.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nome" id="nome" type="text" class="nome" name="nome">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="sobrenome" type="text" class="sobrenome" name="sobrenome">
                        <label for="sobrenome">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="cpfOuCnpj" name="cpf">
                        <label for="cpf">CPF</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="email" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="password" class="senha" name="senha">
                        <label for="senha">Senha</label>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="btn-adicionar">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>