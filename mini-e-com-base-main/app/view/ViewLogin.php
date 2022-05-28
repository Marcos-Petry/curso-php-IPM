<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewLogin extends ViewPadrao
{
    static function formlogin(){
            $sHtml = '
                <form  method="POST" action="index.php?pg=produtos">
                    <input type="text" class="form-control" name="usuario" placeholder="Usuario" required ><br><br>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required><br><br>
                    <input type="password" class="form-control" name="tipousuario" placeholder="admin ou user" required>
                    <input type="submit" class="btn-primary btn" value="Entrar">
                    <p class="form control">Você não possui uma conta ? <a href="index.php?pg=registrar">Registre-se aqui</a>.
                <form>
            ';

            return $sHtml;
    }
}
