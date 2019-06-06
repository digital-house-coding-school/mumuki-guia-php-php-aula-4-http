O formulário que iremos receber via POST tem esses inputs:

```html
  <input type="password" name="senha">
  <input type="password" name="confirmaSenha">
```

Sua tarefa é completar a função `validaSenha` que deve se comportar da seguinte maneira:

1. Se os dois campos estiverem vazios, você deve retornar o texto "Os dois campos de senha estão vazios"
2. Se apenas o campo "senha" estiver vazio, retorne o texto "A senha está vazia"
3. Se somente o campo 'confirmaSenha' estiver vazio, retorne o texto "O campo confirmar senha está vazio"
4. Se os dois campos estiverem completos, mas tiverem valores diferentes, retorne o texto "Senhas não coincidem"
5. Se tudo estiver correto, retorne o texto "Correto"