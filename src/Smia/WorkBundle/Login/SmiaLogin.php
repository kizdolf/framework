<?php 

namespace Smia\WorkBundle\Login;

use Smia\WorkBundle\Entity\Login;

/**
* Class de login pour le projet framework1.
*/
class SmiaLogin
{
	//useless
	public function isLoged($session)
	{
		if ($session->get('user_id'))
			return true;
		return false;
	}

	public function setUser(array $usr, $obj)
	{
		//enregistrer user en ligne
		$em = $obj->getDoctrine()->getManager();
		if (!$this->isRegistered($usr['login'], $usr['mail'], $em))
		{
			$user = new Login();
			$user->setMail($usr['mail']);
			$user->setLogin($usr['login']);
			$user->setPasswd($usr['passwd']);
			$user->setFrom42();
			$em->persist($user);
			$em->flush();
			$rep = $em->getRepository('SmiaWorkBundle:Login');
			$response = $rep->findOneByLogin($usr['login']);
			return $response;
		}
		return false;
	}

	public function getUser(string $login)
	{
		if (!array_key_exists('login', $usr))
			return false;
		else
			return true;
			//return SELECT FROM ... WHERE `login` = $login; 
	}

	private function isRegistered($login, $mail, $em)
	{
		
		$rep = $em->getRepository('SmiaWorkBundle:Login');
		if (!$rep->findBy(array('mail' => $mail)) && !$rep->findBy(array('login' => $login)))
			return false;
		return true;
	}
}