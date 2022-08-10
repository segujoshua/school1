<?php
/**
 *  main app file
 */
class App
{
    protected string $controller =  "home";
    protected string $method =  "index";
    protected array $params =  array();


    public function __construct()
    {
        // code...
        print_r($this->getURL());


        function getURL(): void
        {

            print_r($_GET);
        }
    }
}

