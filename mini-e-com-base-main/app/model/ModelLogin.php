<?php

namespace App\Model;
use App\Client\Session;
use App\Db\Connection;

class ModelLogin extends Session
{
   
    function getTable()
    {
        return 'login';
    }

    function formlogin (){
        $oConnection = Connection::get();

        $usuário = $this->usuário;
        $senha = $this->senha;
        $tipousuário = $this->tipousuário;

        $oSelect = "SELECT * FROM ". $this->getTable() . " WHERE usuário = '" . $usuário . "' and senha = '" . $senha . "' and tipousuário ='".$tipousuário."' ";
        $oResult = pg_query($oConnection, $oSelect);

        $row = pg_num_rows($oResult);

        if($row == 1){
            return parent::login([
                'userid' => $usuário
                
            ]);
            }
        else
        {
            return "Usuario ou senha invalidos!";
        }
    }
    }



