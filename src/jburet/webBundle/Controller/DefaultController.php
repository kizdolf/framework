<?php

namespace jburet\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('jburetwebBundle:Default:index.html.twig', array('name' => $name));
    }
}
