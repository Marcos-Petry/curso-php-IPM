<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Model\ModelRegistrar;
use App\Db\Connection;
use App\View\ViewRegistrar;

class ControllerRegistrar extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto = new ModelRegistrar;

        $a = $oModelProduto->getAll();

        $sTitle = 'Jovens Talentos- Criar conta';
        
        $sContent = ViewRegistrar::render([

            'registrar' => ViewRegistrar::formregistrar($a)

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
    protected function processInsert()
    {
        $usuário = $_POST['usuario'];
        $senha = $_POST['senha'];
        $tipousuário = $_POST['tipousuário'];
        
        $oModelRegistrar = new modelRegistrar;

        $oModelRegistrar->usuário = $usuário;
        $oModelRegistrar->senha = $senha;
        $oModelRegistrar->tipousuário = $tipousuário;

        $oModelRegistrar->insertProduto();
        
        header('location: index.php?pg=');
    }
}