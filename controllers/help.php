<?php


class Help extends Controller {

    function __construct()
    {
        parent::__construct();
        echo "We are inside help! </br>";
    }

    function other($arg=false){
        echo "We are inside other! ";
        echo "We are inside optional = " . $arg . "</br>";

        require 'models/help_model.php';
        $model = new Help_Model();
    }

}


?>