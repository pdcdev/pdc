<?php
    function get_my_option() {

        $var = get_option('blogname');
        echo json_encode($var);

        exit();
    }
?>