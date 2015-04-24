<?php

namespace Organizer\OrganizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$securityContext = $this->container->get('security.context');

    	if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') ){

        return $this->render('FOSUserBundle:Profile:show.html.twig');

    	}
    	else {

    		return $this->redirect($this->generateUrl('fos_user_security_login'));
    	}
    }
}
