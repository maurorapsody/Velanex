<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CertificadoController extends Controller
{
	/**
	 * @Route("/Certificado",name="Certificado")
	 */
	public function CertificadoAction(){
		return $this->render('certificado/certificado.html.twig');
	}
}
