<?php

namespace App;

class Response
{
    public static function redirect(? array $params = null){
        $url = "index.php";

        if($params){

            $url = "?";

            foreach ($params as $paramName=>$paramValue){

                $newParam = $paramName."=".$paramValue."&";
                $url.=$newParam;
            }
        }

        header("Location: ${url}");
        exit();

    }
}