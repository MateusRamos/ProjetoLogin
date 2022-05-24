<?php

namespace CountPay;      //Mesma coisa, nomeia no space CountPay;

use Rain\Tpl;           //Mesma coisa, Chama o Rain Tpl;

class PageAdmin extends Page {  //Como essa class vai ser a msm coisa do class Page, podemos chamar ela 
                                //Como classe filha pra poder acessar tudo qeu a classe pai tem;
    public function __construct($opts = array(), $tpl_dir = "/views/admin/") {
        //Passa $opts com as dados de opção do Rain Tpl e $tpl_dir agora apontando para o HTML do adm;

        parent::__construct($opts, $tpl_dir);   //Chama a função construtora da class pai (Page);

    }

}





?>