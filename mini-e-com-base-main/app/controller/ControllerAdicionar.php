<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewAdicionar;

class ControllerAdicionar extends ControllerPadrao
{

    protected function processPage()
    {
        $sTitle = 'Adicionar produto';

        $sContent = ViewAdicionar::render([
           
            'adicionarContent' => ViewAdicionar::formulario([])
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Seja bem vindo !!!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    
}
