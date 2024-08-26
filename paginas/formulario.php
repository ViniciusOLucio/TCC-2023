<!-- main -->
<div class="container">
  <h1>Envie um Formulário para tornar-se um Apoiador</h1>
  <div class="formulario-usu">
    <form action="" method="post">
      <input class="text" type="text" name="nome_empresa" id="nome_empresa" placeholder="Digite o Nome da Empresa" required="">

      <input class="text" type="text" name="endereco" id="endereco" placeholder="Digite seu Endereço" required="">

      <input class="text" type="text" name="cidade" id="cidade" placeholder="Digite sua Cidade" required="">

      <input class="text" type="text" name="descricao" id="descricao" placeholder="Breve descrição sobre" required="">

      <div class="fileUpload btn btn-primary">
        <span>Logo SVG</span>
        <input type="file" class="upload" />
      </div>
      <input type="submit" class="btn-enviar-form-usu" onclick="myFunction()" value="Enviar Formulario">
    </form>
  </div>
</div>
<script>
function myFunction() {
  alert("Formulário Enviado!");
}
</script>


</body>


</html>