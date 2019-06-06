O formulário que iremos receber via POST tem esse input:

```html
  <input type="text" name="idade">
```

Sua tarefa é completar a função `validaIdade` que deve retornar true se o valor enviado for um número inteiro e maior ou igual a 18, ou deve retornar false se o valor for menor que 18.

Você poderia usar a função [is_integer](http://php.net/manual/en/function.is-integer.php)