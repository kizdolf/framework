<?php

namespace Smia\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Smia\WorkBundle\Entity\Login;
use Sdz\BlogBundle\Entity\Tag;


class WebController extends Controller
{
    public function indexAction()
    {
    	$user_form = new Login();
    	$formbuilder = $this->createFormBuilder($user_form);
    	$formbuilder
    	->add('login',		'text')
    	->add('mail',		'email')
    	->add('passwd',		'password');
    	$form = $formbuilder->getForm();
    	$request = $this->get('request');
    	$session = $this->get('session');
    	if ($request->getMethod() == 'POST')
    	{
    		$form->bind($request);
    		if ($form->isValid()) {
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($user_form);
    			$em->flush();
    			$session->set('user_id', $user_form->getId());
    		}
    	}
        return $this->render('SmiaWorkBundle:Web:index.html.twig');
    }

    public function loginAction()
    {
    	$user_form = new Login();
    	$formbuilder = $this->createFormBuilder($user_form);
    	$formbuilder
    	->add('login',		'text')
    	->add('mail',		'email')
    	->add('passwd',		'password');
    	$form = $formbuilder->getForm();
    	$menu = array('contact' => "lien vers page contact", 'main' => "lien vers l'index", 'log_status' => "VOUS ETES LOG");
    	$session = $this->get('session');
    	if (!$session->has('user_id'))
    		$menu = array('contact' => "lien vers page contact", 'main' => "lien vers l'index", 'log_status' => "C'est le moment de creer un compte!");
    	return $this->render('SmiaWorkBundle:Web:login.html.twig', array('liste' => $menu, 'form' => $form->createView()));
 		/*$request = $this->getRequest();
 		$request->request->get('tag');

 		$mail = $this->get('mailer');
 		$mess = \Swift_Message::newInstance()
 			->setSubject('welcome')
 			->setFrom('jburet@student.42.fr')
 			->setTo('jules.buret@gmail.com')
 			->setBody('Un mail... ');
 		
 		$session->getFlashBag()->add('info', 'tu est bien enregistré');
 		*/
    }

    public function contactAction()
    {
    	
        return $this->render('SmiaWorkBundle:Web:contact.html.twig');
    }

}