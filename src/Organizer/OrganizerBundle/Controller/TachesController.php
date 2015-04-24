<?php

namespace Organizer\OrganizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Organizer\OrganizerBundle\Entity\Taches;
use Organizer\OrganizerBundle\Entity\Projets;
use Organizer\OrganizerBundle\Entity\UserXTaches;
use Organizer\OrganizerBundle\Entity\TachesTimeline;
use Organizer\OrganizerBundle\Form\TachesType;
use Organizer\OrganizerBundle\Form\TachesTimelineType;

class TachesController extends Controller
{
    public function indexAction()
    {
		return $this->render("OrganizerBundle:Projets:index.html.twig", array(
			'projets' => 'lol',
			));	  
    }

    public function createAction($projet_id)
    {
   		$user_session = $this->container->get('security.context')->getToken()->getUser();

    	$em = $this->getDoctrine()->getEntityManager();

    	$form = $this->createForm(new TachesType());
    	$form_timeline = $this->createForm(new TachesTimelineType());
    	$request = $this->getRequest();

		$taches_roles = new UserXTaches();

    		// var_dump($projet_roles); die();

    	if($request->isMethod('POST')) {
    		$form->handleRequest($request);
    		$data = $form->getData();

    		$em->persist($data);
    		$em->flush(); // Table Taches


    		$form_timeline->handleRequest($request);
    		$timeline_data = $form_timeline->getData();
    		$timeline_data->setXFkTacId($data->getId());
 
    		$em->persist($timeline_data);
    		$em->flush(); // Table Taches Timeline

    		$taches_roles->setXFkUsrIdUta($user_session->getId());
    		$taches_roles->setXFkTacIdUta($data->getId());
    		$taches_roles->setUsrRoleUta(2);

    		$em->persist($taches_roles);
    		$em->flush(); // Table User Taches
    		return $this->redirect($this->generateUrl("organizer_homepage_tache"));
    	}

    	return $this->render('OrganizerBundle:Taches:create.html.twig', array(
    		'form' => $form->createView(),
    		'form_timeline' => $form_timeline->createView(),
    		'id' => $projet_id,
    		)
    	);
    }
}
