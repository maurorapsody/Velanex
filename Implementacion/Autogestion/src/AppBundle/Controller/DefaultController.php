<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($request->getMethod()=="POST"){
	    	$userName=$request->get("user");
	    	$pass=$request->get("pass");
	    	$user=$this->getDoctrine()->getRepository('AppBundle:Usuario')->findOneBy(array("nombreUsuario"=>$userName,"contrasenha"=>$pass));
	    	if ($user){
	    		$session = $request->getSession();
	    		$session->set("nombre", $userName);
	    		return $this->redirectToRoute('Empleado');
	    	}
	    	else {
	    		$this->get('session')->getFlashBag()->add('mensaje', 'Los datos ingresados no son validos');
	    		return $this->render('default/index.html.twig');
	    	}
	    }
        return $this->render('default/index.html.twig');
    }
    
    
}
