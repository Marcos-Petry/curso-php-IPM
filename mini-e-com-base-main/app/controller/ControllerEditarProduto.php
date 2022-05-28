<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewEditarProduto;
use App\Model\ModelProduto;

use App\Db\Connection;

class ControllerEditarProduto extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto = new ModelProduto;

        $a = $oModelProduto->getAll();

        $sTitle = 'Jovens Talentos - Produtos';
        
        $sContent = ViewEditarProduto::render([

            'inputEditar' => viewEditarProduto::getHTML($a)

        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5></h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );

    }


}
