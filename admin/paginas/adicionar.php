<?php

$pag = 'adicionar';
?>







<h2>Cadastrar Bairro</h2>

<div class="cadastro-bairros container">
  <form action="./enviar.php" method="post">
    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa-brands fa-product-hunt"></i>&nbsp;&nbsp;Nome</span>
      <input type="text" name="bairro" id="bairro" class="form-control" placeholder="Informe o nome ..." required>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa-solid fa-registered"></i>&nbsp;&nbsp;Valor</span>
      <input type="text" name="valor" id="valor" class="form-control" placeholder="Informe o valor ..." required>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa-solid fa-spell-check"></i>&nbsp;&nbsp;Descrição</span>
      <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Informe a descricao ..." required>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text"><i class="fa-solid fa-sack-dollar"></i>&nbsp;&nbsp;Tipo</span>
      <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Informe o tipo ...">
    </div>

    <div class="input-group mb-3">
      <span class=""><i class="fa-solid fa-list-ol"></i>&nbsp;&nbsp;Foto - width='100%' </span>
      <input type="text" name="foto" id="foto" placeholder=" e height='450' no iframe " required>
    </div>


    <div>
      <input type="submit" class="submit" value="Salvar">
    </div>

</div>
</div>

</form>
</div>
</body>

</html>