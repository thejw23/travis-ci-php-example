<?php

class HelloWorld
{
	$storage = NULL;
	
    public function __construct()
    {
    }

    public function hello($what = 'World')
    {
        $this->storage = $what;
        return "Hello $what";
    }


    public function what()
    {
        return $this->storage;
    }
}
