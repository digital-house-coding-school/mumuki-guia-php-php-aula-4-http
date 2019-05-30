Agora o usuário digita `http://digitalecommerce.com/buscador.php?busca=XXX` onde XXX é o termo procurado pelo usuário :mag:

O problema é que às vezes o usuário escolhe classificar os resultados por alguns critérios. Nesse caso, a URL é assim:
`http://digitalecommerce.com/buscador.php?busca=XXX&ordenar=YYY` onde YYY é por exemplo, "data" ou "pontuação".

Sua função chamada `buscador()`  deve retornar uma ** string ** que diz "O termo de pesquisa é XXX", embora, se o campo de ordenar existir, ele diga "O termo buscado foi XXX ordenado por YYY". (Não esqueça os espaços!)

Recomendamos usar a função [isset](http://php.net/manual/en/function.isset.php) para validar se o campo ordenar existe.

Boa Sorte!