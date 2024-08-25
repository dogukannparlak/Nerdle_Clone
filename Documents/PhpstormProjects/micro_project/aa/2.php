<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['b'])) {
        $c = $_POST['b'];

    }
    echo $c;
}
