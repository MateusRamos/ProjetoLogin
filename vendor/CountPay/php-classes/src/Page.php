<?php

namespace CountPay;

use Rain\Tpl;

class Page  {

    private $tpl;               //Criando variavel tpl para passsar os dados pela classe toda desde o construct;
    private $options = [];      //Criando Variavel options como array default;
    private $defaults = [       //Criando variavel defaults como data em default para merge;
        "data"=>[]
    ];

    public function __construct($opts = array(), $tpl_dir = "/views/")   {  //Construct criando o header da pagina a ser mostrado;

        $this->options = array_merge($this->defaults, $opts);  //Sobrepondo array de data criado como defualt;


        $config = array(        //Criando array que passa as confings para o rain tpl;
            "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir,         //Apontando para a pasta onde terá o HTML;
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",   //Apontando para a pasta onde terá os cache;
            "debug"         => false                                        //Negando geração de arquivos de debug;
        );

        Tpl::configure( $config );  //Passnado comandos do array config par ao Rain Tpl;

        $this->tpl = new Tpl;   //Setando a variavel Tpl como conexão com o Rain Tpl;

        $this->setData($this->options["data"]);  //Função repetida(SetData);

        $this->tpl->draw("header");    //Mostrando o Header da página no browser;
    }
    //----------------------------------------------------------------------------------//
    private function setData($data = array())   {   //Função para passar os dados do php para o Rain tpl;
        foreach($data as $key => $value)   {
            $this->tpl->assign($key, $value);
        }
    }
    //----------------------------------------------------------------------------------//
    public function setTpl($name, $data = array(), $returnHTML = false) {   //Função para mostrar o conteudo central da pagina;
        
        $this->setData($data);

        $this->tpl->draw($name, $returnHTML);   //Mostrando o conteudo central($name é o nome do arquivo hmtl);
    }
    //----------------------------------------------------------------------------------//
    public function __destruct()    {   //Função para mostrar o footer da pagina;

        $this->tpl->draw("footer");

    }



}




?>