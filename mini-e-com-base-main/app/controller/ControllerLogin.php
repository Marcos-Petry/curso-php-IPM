<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\View\ViewLogin;
use App\Model\ModelLogin;

class ControllerLogin extends ControllerPadrao
{

    protected function processPage()
    {

        $sTitle = 'Login';

        $sContent = ViewLogin::render([
           
            'login' => ViewLogin::formLogin([])
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '<h5>Welcome!</h5>'
        ];

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }

    

    public function Processlogin(){
        $usuário = $_POST['usuario'];
        $senha = $_POST['senha'];
        $tipousuário = $_POST['tipousuário'];

        $oModelLogin = new ModelLogin;

        $oModelLogin->usuário = $usuário;

        $oModelLogin->senha = $senha;

        $oModelLogin->tipousuário = $tipousuário;
        $oModelLogin->formlogin();
        
        return $this->processPage();
        return header('location: index.php?pg=produtos');
    }
}
