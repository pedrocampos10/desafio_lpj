# Desafio Técnico LPJ
Este repositório foi criado para desenvolver o desafio LPJ
## Linguagens
O desafio foi realizado utilizando:
- PHP (Laravel na versão 7)
- Mysql (banco de dados)
- Blade (para frontend)
- Template: coreui
## Estrutura 
Para desenvolver o projeto, utilizei do MVC, utilizando ainda mais duas camadas de abstração, sendo elas:
- Repository: uso esta camada para comunicar o controller ao model
- Request: uso esta camada para validação de campos

## Procedimentos para Execução
- git clone : https://github.com/pedrocampos10/desafio_lpj.git
- Composer install 
- Importar o banco de dados localizado em bd
- duplicar .env.example para .env, configurando as devidas configurações
- php artisan key:generate
- php artisan config:cache
- php artisan migrate (caso queira utilizar migrations)
- php artisan serve

Após estes processos o ambiente está preparado para teste

## Informações relevantes
Para não criar usuário basta usar :
Usuário: teste@gmail.com
Senha: teste123