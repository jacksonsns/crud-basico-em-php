<?php
    include_once 'header.php';
?>

    <div class="container" style="padding: 25px;">
        <div class="row">
            <form action="cad.php" method="post" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nome" id="nome" type="text" class="nome" name="nome">
                       
                    </div>
                    <div class="input-field col s6">
                        <input id="sobrenome" type="text" class="sobrenome" name="sobrenome">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="cpf" type="text" class="cpfOuCnpj" name="cpf">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="senha" type="password" class="senha" name="senha">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
