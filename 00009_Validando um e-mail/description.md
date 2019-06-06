O formulário que iremos receber via POST tem esse input:

```html
  <input type="text" name="email">
```

Sua tarefa é concluir a função `validaEmail` que deve se comportar do seguinte modo:

1. Se o campo estiver vazio, você deve retornar o texto "O campo está vazio"
2. Se o campo estiver completo, mas não for um e-mail, você deve retornar o texto "O campo não é um e-mail"
3. Se o campo atender às duas condições, você deve retornar o texto "Correto"

Dica você pode utilizar a função: [filter_var](http://php.net/manual/en/function.filter-var.php) para validar se o email está correto