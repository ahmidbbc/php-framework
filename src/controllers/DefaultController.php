<?php

namespace m2i\project\controllers;

use m2i\framework\AbstractController;


class DefaultController extends AbstractController
{

    public function defaultAction()
    {
        echo "default";
    }

    public function loginAction()
    {
        echo "login";
    }


    public function helloAction($name)
    {
        $this->render("home/default", ["name" => $name]);
    }

}