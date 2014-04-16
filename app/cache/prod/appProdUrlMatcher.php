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

        // jburetweb_accueil
        if ($pathinfo === '/web') {
            return array (  '_controller' => 'jburet\\webBundle\\Controller\\webController::indexAction',  '_route' => 'jburetweb_accueil',);
        }

        // jburetweb_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'jburet\\webBundle\\Controller\\webController::loginAction',  '_route' => 'jburetweb_login',);
        }

        // jburetweb_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'jburet\\webBundle\\Controller\\webController::adminAction',  '_route' => 'jburetweb_admin',);
        }

        // jburetweb_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'jburet\\webBundle\\Controller\\webController::contactAction',  '_route' => 'jburetweb_contact',);
        }

        // jburetweb_navig
        if (0 === strpos($pathinfo, '/nav') && preg_match('#^/nav/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jburetweb_navig')), array (  '_controller' => 'jburet\\webBundle\\Controller\\webController::navAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
