<?php
include_once 'head.php';
?>
<!-- Tabela de clientes -->
<div class="row">
    <div class="col s10 m10 push-m1">
      <h3>Clientes</h3>
      <table>
        <thead>
          <tr> 
            <th> Nome</th>
            <th> Sobrenome</th>
            <th> CPF</th>  
            <th> Email</th>   
          </tr>
        </thead>
        <tbody>
          <?php
          $dados = $pdo->prepare("SELECT * FROM clientes");
          $dados->execute();
          $item = $dados->fetchAll(PDO::FETCH_ASSOC);
          foreach ($item as $info) :
          ?>

            <tr>
              <td>
                <?php echo $info['nome']; ?>
              </td>

              <td>
                <?php echo $info['sobrenome']; ?>
              </td>

              <td>
                <?php echo $info['cpf']; ?>
              </td>

              <td>
                <?php echo $info['email']; ?>
              </td>
              <td><a href="#modal<?php echo $info['id']; ?>" class="btn-floating red modal-trigger"> <i class="material-icons">delete</i>Remover</a></td>

              <!-- Modal Structure -->
              <div id="modal<?php echo $info['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Opa!</h4>
                  <p>Tem certeza que deseja exluir esse item?</p>
                </div>
                <div class="modal-footer">
                  

                  <form action="remover.php" method="POST";>
                    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red"> Sim, quero excluir</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  </form>
                </div>
              </div>
            </tr>
          <?php endforeach; ?>
          <td><a href="cadastro.php" class="btn green"> Cadastrar Novo Cliente</a></td>
        </tbody>
      </table>
      <br>
    </div>
  </div>
<?php
include_once 'footer.php';
?>