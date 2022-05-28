<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewProduto;
use App\Model\ModelProduto;

use App\Db\Connection;


class ControllerProduto extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelProduto = new ModelProduto;

        $a = $oModelProduto->getAll();

        $sTitle = 'Jovens Talentos - Produtos';
        
        $sContent = ViewProduto::render([

            'tabelaProduto' => viewProduto::getHTMLTabelaProdutos($a)

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

    function ProcessDelete()
    {
        $id =  $_GET['proid'] ??= '';

        $oModelProduto = new ModelProduto;
        $oModelProduto->id = $id;

        $oModelProduto->deleteProduto();
       return $this->processPage();
    }

    protected function processInsert()
    {
        $equipe = $_POST['equipe'];
        $preço = $_POST['preço'];
        $tamanho = $_POST['tamanho'];
        $genero = $_POST['genero'];
        $file = $_FILES['imagem'];
        $imgdir = 'app/view/imagens';
        $descrição = $_POST['descrição'];
        $imagemD = "$imgdir/" .$file['name'];
        move_uploaded_file($file["tmp_name"], $imagemD);

        $oModelProduto = new ModelProduto;

        $oModelProduto->equipe = $equipe;

        $oModelProduto->preço = $preço;

        $oModelProduto->tamanho = $tamanho;

        $oModelProduto->genero = $genero;

        $oModelProduto->imagemD = $imagemD;

        $oModelProduto->descrição = $descrição;

        $oModelProduto->insertProduto();
        return $this->processPage();
    }

}
