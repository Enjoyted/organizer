<?php

namespace Organizer\OrganizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Organizer\OrganizerBundle\Entity\Projets;
use Organizer\OrganizerBundle\Entity\UserXProjet;
use Organizer\OrganizerBundle\Entity\PrjTimeline;
use Organizer\OrganizerBundle\Form\ProjetsType;
use Organizer\OrganizerBundle\Form\PrjTimelineType;

class ProjetsController extends Controller
{
    public function indexAction()
    {
    	$securityContext = $this->container->get('security.context');

		if( $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') ){
			$user_session = $this->container->get('security.context')->getToken()->getUser();

			$em = $this->getDoctrine()->getEntityManager();
			
			$user_projects = $em->getRepository("OrganizerBundle:UserXProjet")->findBy(array('xFkUsrIdUpr' => $user_session->getId() ) );
            // var_dump($user_projects); die();
            if(count($user_projects > 0)) {
                foreach($user_projects as $k=>$user_projet) {
                    $prj = $em->getRepository("OrganizerBundle:Projets")->find($user_projet->getId());
                    $prjTimeline = $em->getRepository("OrganizerBundle:PrjTimeline")->find($user_projet->getId());
                    $user_projects[$k]->prjNom = $prj->getPrjNom();
                    $user_projects[$k]->prjDescription = $prj->getPrjDescription();
                    $user_projects[$k]->prjCreated = $prj->getPrjCreated();
                    $user_projects[$k]->prjTimelineStartAt = $prjTimeline->getPrtStartAt();
                    $user_projects[$k]->prjTimelineEndAt = $prjTimeline->getPrjEndAt();
                }
            }
// var_dump($user_projects); die();
			return $this->render("OrganizerBundle:Projets:index.html.twig", array(
				'projets' => $user_projects,
				));	    
		}

      //  return $this->redirect($this->generateUrl('homepage'));    
    }

    public function createAction()
    {
    	$user_session = $this->container->get('security.context')->getToken()->getUser();

    	$em = $this->getDoctrine()->getEntityManager();

    	$form = $this->createForm(new ProjetsType());
    	$form_timeline = $this->createForm(new PrjTimelineType());
    	$request = $this->getRequest();

		$projet_roles = new UserXProjet();

    		// var_dump($projet_roles); die();

    	if($request->isMethod('POST')) {
    		$form->handleRequest($request);
    		$data = $form->getData();

    		$em->persist($data);
    		$em->flush(); // Table Projet


    		$form_timeline->handleRequest($request);
    		$timeline_data = $form_timeline->getData();
    		$timeline_data->setXFkPrjIdPrt($data->getId());
 
    		$em->persist($timeline_data);
    		$em->flush(); // Table Projet Timeline

    		$projet_roles->setXFkUsrIdUpr($user_session->getId());
    		$projet_roles->setXFkPrjIdUpr($data->getId());
    		$projet_roles->setUsrRoleUpr(2);

    		$em->persist($projet_roles);
    		$em->flush(); // Table User Projet

    		return $this->redirect($this->generateUrl("organizer_homepage_projet"));
    	}

    	return $this->render('OrganizerBundle:Projets:create.html.twig', array(
    		'form' => $form->createView(),
    		'form_timeline' => $form_timeline->createView(),
    		)
    	);
    }

    public function viewAction($id)
    {
        $user_session = $this->container->get('security.context')->getToken()->getUser();

        if($id === null OR $id < 1) {
            return $this->redirect($this->generateUrl("fos_user_profile_show"));
        }

        $em = $this->getDoctrine()->getEntityManager();
        $projet = $em->getRepository("OrganizerBundle:Projets")->find($id);
        $prj_infos = $em->getRepository("OrganizerBundle:PrjTimeline")->findBy(array('xFkPrjIdPrt' => $id));
        // var_dump($prj_infos); die();
        $projet->prjTimelineStartAt = $prj_infos[0]->getPrtStartAt();
        $projet->prjTimelineEndAt = $prj_infos[0]->getPrjEndAt();
        // var_dump($projet); die();

        // $projet_taches = $em->getRepository("OrganizerBundle:UserXTaches")->findBy(array('XFkUsrIdUta' => $user_session->getId()));
        // var_dump($projet_taches); die();


        return $this->render("OrganizerBundle:Projets:view.html.twig", array(
            'id' => $id,
            'projet' => $projet,
        ));
    }
}
