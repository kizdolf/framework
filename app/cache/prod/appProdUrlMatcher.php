<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // smia_work_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'smia_work_homepage');
            }

            return array (  '_controller' => 'Smia\\WorkBundle\\Controller\\WebController::indexAction',  '_route' => 'smia_work_homepage',);
        }

        // smia_work_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Smia\\WorkBundle\\Controller\\WebController::loginAction',  '_route' => 'smia_work_login',);
        }

        // smia_work_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Smia\\WorkBundle\\Controller\\WebController::contactAction',  '_route' => 'smia_work_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
