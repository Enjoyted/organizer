<?php

namespace Organizer\OrganizerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Organizer\OrganizerBundle\Entity\Sous_Taches;

class SousTachesController extends Controller
{
    public function indexAction()
    {
        return $this->render('B2o');
    }
}
