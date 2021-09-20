# produtos

[![NPM](https://img.shields.io/npm/l/react)](https://github.com/horanerd/Pega-preco/blob/main/LICENSE)

### Sobre o projeto

Sistema em laravel de cadastro de produto

Como utilizar este sistema:

Inicie o migrations de database.
Inicie o server laravel.

Foi realizado a criação dos migrations Produtos e Perguntas. Para iniciar os migrations é necessário usar o código php artisan migrate

Foi realizado a criação dos Models Pergunta e Produto.
Criado os controllers PerguntaController e ProdutosController
Criado as viwers dentro de produtos create e visualização

Adicionado parâmetros nas rotas para funcionar corretamente no teste.

Para realizar o teste será necessário iniciar o servidor em php artisan serve e acessar o link http://localhost/produtos/novo para cadastro de produto e http://localhost/produtos/visualizacao para cadastro de visualização.

Não foi realizado parâmetros para validar se existem produtos cadastrados na visualização caso seja necessário irei adicionar tais parâmetros.

Qualquer dúvida pode me perguntar
