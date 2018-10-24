# FOCEM ABDI

## Configuração - API
- Ir até o diretório `api/` e abrir o arquivo `env.php`
- Editar conforme servidor de banco de dados e de e-mail.
``` bash
define('DB_TYPE', 'mysql');
define('DB_HOST', 'HOST DATABASE');
define('DB_USER', 'HOST USER');
define('DB_PASS', 'HOST PASSWORD');
define('DB_NAME', 'DATABASE NAME');

define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_USER', 'xxx@xxx.com.br');
define('MAIL_PASSWORD', 'xxxx');
define('MAIL_USER_NAME', 'Focem - ABDI');
define('MAIL_NOTIFICATION_ADMIN', 'xxxx@abdi.com.br');
```

## Configuração - Banco de dados
- Fazer importação ***com banco de dados*** do arquivo *`database.sql`* que está no diretório *`api/`*

## Configuração - Site
- Abrir arquivo `prod.env.js` no diretório `config/`
- Na linha onde existe **API_URL** deverá ser trocado para a url da aplicação
> exemplo **`API_URL:  '"http://focem.abdi.com.br/"'`**

## Deploy de produção
- Na pasta raiz do projeto, rode os comandos abaixo **na ordem**
```
$ git pull origin master
$ npm install
$ npm run build
```