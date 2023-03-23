<?php

        function testfun()
        {
            echo $_POST['search-bar'];
        }

        if (array_key_exists('button1', $_POST)) {
            testfun();
        }
        if (array_key_exists('button2', $_POST)) {
            echo "add user btn clicked";
        }

        ?>