<?php

namespace Organizer\OrganizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Organizer\OrganizerBundle\Entity\Users;

class UsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrganizerBundle:Users:index.html.twig', array('name' => 'Teddy'));
    }

    public function registerAction()
    {
    	return $this->render('OrganizerBundle:Users:register.html.twig', array('name' => 'Teddy'));
    }
}
