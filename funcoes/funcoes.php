<?php
function template($name){
        $ordem = array("topo.php", "menu.php", $name,"footer.php");

        $caminho = "../modelos/";
        $arquivos = scandir($caminho);

        $arq_assoc = array();

        foreach( $arquivos as $arq ):
            if ($arq != '.' and $arq != '..'):
                $arq_assoc[$arq] = $arq;
            endif;
        endforeach;
        
        foreach( $ordem as $valor ):
            require_once("../modelos/" .$arq_assoc[$valor]);
        endforeach;
    }
    function template_adm($name){
        $ordem = array("topo_adm.php", $name, "footer_adm.php");

        $caminho = "../modelos/";
        $arquivos = scandir($caminho);

        $arq_assoc = array();

        foreach( $arquivos as $arq ):
            if ($arq != '.' and $arq != '..'):
                $arq_assoc[$arq] = $arq;
            endif;
        endforeach;
        
        foreach( $ordem as $valor ):
            require_once("../modelos/" .$arq_assoc[$valor]);
        endforeach;
    }

    function template_usuario($name){
        $ordem = array("topo_usuario.php", $name, "footer_usuario.php");

        $caminho = "../modelos/";
        $arquivos = scandir($caminho);

        $arq_assoc = array();

        foreach( $arquivos as $arq ):
            if ($arq != '.' and $arq != '..'):
                $arq_assoc[$arq] = $arq;
            endif;
        endforeach;
        
        foreach( $ordem as $valor ):
            require_once("../modelos/" .$arq_assoc[$valor]);
        endforeach;
    }




   
    ?>