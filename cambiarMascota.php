<?php
    if (isset($_POST['quitar'])) {
        $quitar=$_POST['quitar'];
        print_r($quitar);
    } else {
        $agregar=$_POST['agregar'];
        print_r($agregar);
    }
?>
