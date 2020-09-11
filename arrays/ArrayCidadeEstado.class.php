<?php

class ArrayCidadeEstado
{

    function cidadeEstadoArray($c, $e)
    {

        $arrCE = [];

        foreach ($c as $k => $cid) {
            $cidadeFirstLetter = substr($cid, 0, 1);

            foreach ($e as $k => $est) {
                $estadoFirstLetter = substr($est, 0, 1);
                if ($cidadeFirstLetter == $estadoFirstLetter) {
                    $arrCE[] = ['estado' => $est, 'cidade' => $cid];
                }
            }
        }

        sort($arrCE);

        return $arrCE;
    }


    function returnDataPrinted($keys, $cidadeEstado)
    {
        foreach ($keys as $k) {
            echo $k . ' - ' . $cidadeEstado[$k]['estado'] . '-' . $cidadeEstado[$k]['cidade'] . "<br>";
        }
    }
}
