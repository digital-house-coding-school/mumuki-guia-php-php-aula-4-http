O usuário preenche um formulário em HTML com o seguinte formato:

``` html
<form method="POST" action="cadastrar.php">
  <input type="email" name="email" required>
  <input type="text" name="usuario" required>
</form>
```

Sua função `bemVindo()` deve pegar as informações do formulário e retornar uma string que diz:

**Bem-vindo, NOMEUSUARIO. Foi registrado com o email EMAIL**

Neste texto, NOMEUSUARIO e EMAIL devem ser substituídos pelas informações fornecidas pelo usuário no formulário.