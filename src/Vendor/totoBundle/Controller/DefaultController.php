<?php

namespace Vendor\totoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('totoBundle:Default:index.html.twig', array('name' => $name));
    }
}
