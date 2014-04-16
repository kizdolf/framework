<?php 

namespace jburet\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\response;

/**
*  Class "web" ->projet framework 1.
*/
class webController extends Controller
{

public function indexAction()
{
	return $this->render('jburetwebBundle:web:index.html.twig');
}

public function loginAction()
{
	if ($this->get('request')->getMethod() == 'POST')
	{
		$logs = $this->getRequest()->request->all();
		$mailer = $this->get('mailer');

		$message = \Swift_Message::newInstance()
		->setSubject('Contact me')
		->setFrom('jules.buret@gmail.com')
		->setTo('jules.buret@gmail.com')
		->setBody(implode(' -> ',$logs));

		$mailer->send($message);
		return new Response('Email sent!');

	}
	else
		return $this->render('jburetwebBundle:web:login.html.twig');
}

public function adminAction()
{
	return $this->render('jburetwebBundle:web:admin.html.twig');
}

public function contactAction()
{

	return $this->render('jburetwebBundle:web:contact.html.twig');
}

public function navAction($id)
{
	return $this->render('jburetwebBundle:web:nav.html.twig', array(
		'id' => $id
		));
}

}
?>