# introducao_phpunit

## Configurar o composer
* Instalar o composer no computador
* Site composer: [https://getcomposer.org]
* Executar, no terminal dentro da pasta do projeto, o comando: 

  `composer init`
  
* Adicionar o seguinte trecho ao arquivo composer.json

`"autoload": {
  "psr-4": {"App\\": "app/"}
 }`  
 
* Executar, no terminal dentro da pasta do projeto, o comando:

`composer update`

## Intalar o phpunit
*Executar o comando

`composer require --dev phpunit/phpunit ^7`

* Criar no diretório principal do projeto o arquivo phpunit.xml e adicionar o código abaixo

`<phpunit bootstrap="vendor/autoload.php">  
  <testsuites>
    <testsuite name="testes">
      <directory>tests</directory>
    </testsuite>
  </testsuites>
</phpunit>`

## Testes em Banco de dados:
*Executar o comando
`composer require --dev phpunit/dbunit`

## Executar o PHPUnit:
`vendor/bin/phpunit` ou `./vendor/bin/phpunit` ou `vendor\bin\phpunit` ou `.\vendor\bin\phpunit`

## Documentação:
[https://phpunit.readthedocs.io/pt_BR/latest/]
