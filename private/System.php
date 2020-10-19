<?php

class Connection

{

    function getConn()
    {
        $verification = false;
        try {

            $Conn = new PDO('mysql:host=127.0.0.1;dbname=teste', $username="root", $password="");
            $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (\Throwable $error) {
            echo "Erro. Code" . $error->getMessage();
        }

    }

}

?>
