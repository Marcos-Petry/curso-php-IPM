<?php

/**
 * Rederiza o conteúdo da página solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
            break;
        case 'produtos':
            return(new App\Controller\ControllerProduto)->render();
            break;
        case 'adicionar':
            return(new App\Controller\ControllerAdicionar)->render();
            break;
        case 'editarProduto':
            return(new App\Controller\ControllerEditarProduto)->render();
            break;
            case 'login':
                return(new App\Controller\ControllerLogin)->render();
                break;
        case 'registrar':
                return(new App\Controller\ControllerRegistrar)->render();
                break;

    }
    
    return 'Página não encontrada!';
}
