<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InformeController extends Controller
{
	/**
	 * @Route("/Informe",name="Informe")
	 */
	public function InformeAction(){
		return $this->render('informe/informe.html.twig');
	}
}
