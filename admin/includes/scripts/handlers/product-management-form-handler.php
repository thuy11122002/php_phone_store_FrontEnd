<?php

        function testfun()
        {
            echo $_POST['button'];
        }

        if (array_key_exists('button1', $_POST)) {
            testfun();
        }
        if (array_key_exists('button3', $_POST)) {
            require_once("./includes/scripts/api/postProduct.php");
            $data=$_POST;
            unset($data['button3']);
            $data['productID']=4;
            var_dump(json_decode($data));
            echo '<br>';
            var_dump(json_decode($_POST));
           // postProduct(json_encode($data));
        }
        

        ?>