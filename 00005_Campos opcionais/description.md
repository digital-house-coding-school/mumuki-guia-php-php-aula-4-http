O formulário é **muito similar** ao anterior

``` html
<form method="POST" action="cadastrar.php">
  <input type="email" name="email" required>
  <input type="text" name="usuario">
</form>
```

Mas o nome de usuário é opcional!

Sua função `bemVindo()` deve pegar as informações do formulário e retornar uma string que diz:

**Bem-vindo NOMEUSUARIO. Foi registrado com o e-mail EMAIL**

Se o usuário não digitar o **NOMEUSUARIO**, a função deve simplesmente retornar

**E-mail de boas-vindas**

Neste texto, NOMEUSUARIO e EMAIL devem ser substituídos pelas informações fornecidas pelo usuário no formulário.

Se você não tem certeza de como fazer, não hesite em fazer `var_dump($_POST); exit;` para ver o formato de como a informação chega.