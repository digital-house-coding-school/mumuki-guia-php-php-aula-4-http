Agora o usuário digita `http://digitalecommerce.com/buscador.php?busca=XXX` onde XXX é o termo procurado pelo usuário :mag:

O problema é que às vezes o usuário escolhe classificar os resultados por alguns critérios. Nesse caso, o URL é assim:
`http://digitalecommerce.com/buscador.php?busca=XXX&ordenar=YYY` onde YYY é por exemplo, "data" ou "pontuação".

Sua função chamada  deve retornar uma ** string ** que diz "O termo de pesquisa é XXX", embora, se o campo de classificação existir, ele diga "O termo de pesquisa é XXX ordenado por YYY". (Não esqueça os espaços da oração!)

Recomendamos usar a função [isset] (http://php.net/manual/en/function.isset.php) para validar se o campo de classificação existe.

Sucessos!