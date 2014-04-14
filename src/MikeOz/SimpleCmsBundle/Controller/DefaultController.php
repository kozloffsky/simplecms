<?php

namespace MikeOz\SimpleCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
