<?php

namespace App\Model;

use App\Db\Connection;
use App\Model\ModelLogin;

abstract class ModelPadrao
{
    abstract function getTable();
    

    function getAll()
    {
        $oConnection = Connection::get();

        $oSelect = "SELECT * FROM ". $this->getTable();

        $oResult = pg_query($oConnection, $oSelect);

        $aData = [];

        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }
        
        return $aData;
    }

    

    protected function insert($aValues)
    {
        $oConnection = connection::get();

        $sSQL = 'insert into ' . $this->getTable(). ' ('.implode(',',array_keys($aValues)).') values ('.implode (',',array_values($aValues)).')
            ';
            
        
        return pg_query($oConnection, $sSQL);
            //var_dump($sSQL);
    }

    protected function delete($aWhere)
    {
        $oConnection = Connection::get();
        
        $sSQL = ' 
            delete from ' . $this->getTable(). ' where 1=1
            ';
        
        foreach($aWhere as $sNomeColuna => $sValor){
            $sSQL .= ' and ' . $sNomeColuna . ' = ' .$sValor;
        }

        return pg_query($oConnection, $sSQL);
    
    }

    protected function update($aValues, $aWhere)
    {
        // Implementar
    }

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue)
    {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }

            return $xValue;
        }

        return 'NULL';
    }

    /*function login (){
        $oConnection = Connection::get();

     $oSelect = "SELECT * FROM . $this->getTable() WHERE usuario='$usuario'";

        $oResult = pg_query($oConnection, $oSelect);

        $aData = [];

        while($aResultado = pg_fetch_assoc($oResult)){
            $aData[] = $aResultado;
        }
        
        return $aData;
    }*/
}
