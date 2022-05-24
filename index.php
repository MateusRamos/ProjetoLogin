<?php 

require_once("vendor/autoload.php"); //Trazendo as dependencias do vender

use \Slim\Slim;			//Chamando as dependencias necessarias;
use \CountPay\Page;		//Chamando as dependencias necessarias;
use \CountPay\PageAdmin; //Chamando as dependencias necessárias;

$app = new Slim();		//Incia as rotas da aplicação Slim apartir do que vem na URL;

$app->config('debug', true);

//Rota Dashboard:
$app->get('/', function() {
    
	$page = new Page();
	
	$page->setTpl("index");
});

//Rota Admin:
$app->get('/admin', function() {
    
	$page = new PageAdmin();
	
	$page->setTpl("index");
});


$app->run();	//Roda toda a aplicação depois de lida e formulada;

 ?>