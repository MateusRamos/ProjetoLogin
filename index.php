<?php 

require_once("vendor/autoload.php"); //Trazendo as dependencias do vender

use \Slim\Slim;			//Chamando as dependencias necessarias;
use \CountPay\Page;		//Chamando as dependencias necessarias;

$app = new Slim();		//Incia as rotas da aplicação Slim apartir do que vem na URL;

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();
	
	$page->setTpl("index");
});

$app->run();	//Roda toda a aplicação depois de lida e formulada;

 ?>