<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewProduto;
use App\Model\ModelProduto;
use App\Db\Connection;

class ControllerHome extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto = new ModelProduto;

        $a = $oModelProduto->getAll();

        $sTitle = 'Jovens Talentos - Produtos';
        
        $sContent = ViewHome::render([

            'tabelaProduto' => viewHome::getHTMLTabelaCompras($a)

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