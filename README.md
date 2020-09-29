# desafiobemol
Repositório voltado para o projeto do desafio bemol

O projeto possui arquivos:
* css - pasta "css"
* javascript - pasta js
* php - diretorio prinpal
* sql - diretorio principal
* txt - diretorio principal

## Como executar a aplicação

### Requisitos mínimos

Para executar a aplicação é necessário ter:
* banco de dados mysql
* servidor apache
Obs.: utilizei o wamp que já é um pacote com tudo que é necessário

### Executando a aplicação

1. Faça o clone do deste repositório
2. importe o arquivo **bd_desafiobemol.sql** para seu mysql
   Você deve confirmar que o banco de dados *bd_desafiobemol* e a tabela *usuarios* foram importados com sucesso
   obs.: uma unica linha está cadastrada
3. após importar o banco de dados ajuste as configurações do arquivo **conn.php** na linha:
~~~php
$conn = @mysql_connect('127.0.0.1','root','admin');
~~~
mude o usuario **root** e a senha **admin** para o usuario e senha do seu banco de dados

4. Para acessar a aplicação é bem simples. Acesse um navagador, de preferencia firefox e digite a seguinte url:
*http://localhost/desafioBemol/cadastro.php*

Pronto você já estará com tudo pronto para testá-la.

