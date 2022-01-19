# laravel_marketplace
Marketplace utilizando Laravel na Versão 6.x

## Projeto ainda em andamento!

### Instalação
- Faça o clone deste repositório para a sua máquina
- Rode o comando: `composer install`
- Renomeie o arquivo <b>.env.example</b> para <b>.env</b>
- Crie uma base de dados com o nome que desejar
- Depois altere o arquivo <b>.env</b> e insira as suas configurações de banco de dados nele, nas variáveis de ambiente que começam com DB_
- Depois esse: `php artisan key:generate`
- Rode o comando `php artisan migrate` para gerar as tabelas do banco de dados
- Rode o comando `php artisan db:seed` para popular as tabelas do banco com dados fictícios

### Para rodar o projeto
- Digite o comando: `php artisan serve`
