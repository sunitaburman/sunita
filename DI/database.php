<?php
class database {

    protected static $instance;

    public static function getInstance(){

        if(!static ::$instance){

            static ::$instance = new self;
        }

        return static ::$instance;
    }

    public function query($sql)
    {
       echo $sql;
    }
}
?>