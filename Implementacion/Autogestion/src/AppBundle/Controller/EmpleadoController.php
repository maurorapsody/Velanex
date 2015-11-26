<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Empleado;
use Symfony\Component\Validator\Constraints\Date;

class EmpleadoController extends Controller
{
	/**
	 * @Route("/Empleado",name="Empleado")
	 */
	public function EmpleadoAction(){
		$em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:Empleado')->findAll();
		return $this->render('empleado/empleado.html.twig',array('users' => $users));
	}
	
	/**
	 * @Route("/EmpleadoNew",name="newEmpleado")
	 */
	public function newEmpleadoAction(Request $request){
		if ($request->getMethod()=="POST"){
			$numeroIdentificacion=$request->get("numeroDocumento");
			$tipoIdentificacion=$request->get("tipoDocumento");
			$user=$this->getDoctrine()->getRepository('AppBundle:Empleado')->findOneBy(array("numeroIdentificacion"=>$numeroIdentificacion,"tipoIdentificacion"=>$tipoIdentificacion));
			if ($user){
				$this->get('session')->getFlashBag()->add('mensaje', 'Empleado existente');
				return $this->render('empleado/create.html.twig');
			}else {
				$empleado = new Empleado();
				$empleado->setNumeroIdentificacion($numeroIdentificacion);
				$empleado->setTipoIdentificacion($tipoIdentificacion);
				$empleado->setPrimerNombre($request->get("primerNombre"));
				$empleado->setSegundoNombre($request->get("segundoNombre"));
				$empleado->setPrimerApellido($request->get("primerApellido"));
				$empleado->setSegundoApellido($request->get("segundoApellido"));
				$empleado->setGenero($request->get("genero"));
				//$empleado->setFechaNacimiento(new Date());
				$empleado->setCargo($request->get("cargo"));
				//$empleado->setFechaIngreso(new Date());
				$empleado->setEstadoCivil($request->get("estadoCivil"));
				$empleado->setDireccion($request->get("direccion"));
				$empleado->setBarrio($request->get("barrio"));
				$empleado->setEstrato($request->get("estrato"));
				$empleado->setTelefono($request->get("telefono"));
				$empleado->setCelular($request->get("celular"));
				$empleado->setEmail($request->get("email"));
				$empleado->setTipoContrato($request->get("tipoContrato"));
				$empleado->setEps($request->get("eps"));
				$empleado->setFondoPensiones($request->get("fondoPensiones"));
				$empleado->setFondoCesantias($request->get("fondoCesantias"));
				$empleado->setTipoVivienda($request->get("tipoVivienda"));
				
				$em = $this->getDoctrine()->getManager();
				
				$em->persist($empleado);
				$em->flush();
				$this->get('session')->getFlashBag()->add('mensaje', 'Empleado creado');
				return $this->render('empleado/create.html.twig');
			}
		}
		$em = $this->getDoctrine()->getManager();
		$areas = $em->getRepository('AppBundle:Area')->findAll();
		$em = $this->getDoctrine()->getManager();
		$cargos = $em->getRepository('AppBundle:Cargo')->findAll();
		return $this->render('empleado/create.html.twig',array('areas' => $areas,'cargos' => $cargos));
	}
	
	/**
	 * @Route("/DeleteEmpleado/{id}",name="deleteEmpleado")
	 */
	public function deleteEmpleadoAction($id){			
		$empleado = $this->getDoctrine()->getRepository('AppBundle:Empleado')->find($id);
		$em = $this->getDoctrine()->getManager();
		$em->remove($empleado);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('mensaje', 'Empleado borrado');
		$users = $em->getRepository('AppBundle:Empleado')->findAll();
		return $this->render('empleado/empleado.html.twig',array('users' => $users));
	}
	
	/**
	 * @Route("/RetrieveEmpleado",name="retrieveEmpleado")
	 */
	public function retrieveEmpleadoAction(Request $request){
		if ($request->getMethod()=="POST"){
			$numeroIdentificacion=$request->get("numeroDocumento");
			$tipoIdentificacion=$request->get("tipoDocumento");
			$user=$this->getDoctrine()->getRepository('AppBundle:Empleado')->findOneBy(array("numeroIdentificacion"=>$numeroIdentificacion,"tipoIdentificacion"=>$tipoIdentificacion));
			if (!$user){
				$nombreEmpleado=$request->get("nombreEmpleado");
				$user=$this->getDoctrine()->getRepository('AppBundle:Empleado')->findOneBy(array("nombreEmpleado"=>$nombreEmpleado));
				if (!$user){
					$this->get('session')->getFlashBag()->add('mensaje', 'Empleado inexistente');
					return $this->render('empleado/retrieve.html.twig');
				}
			}
			return $this->redirectToRoute('updateEmpleado', array('user'=>$user));
		}
		return $this->render('empleado/retrieve.html.twig');
	}
	
	/**
	 * @Route("/UpdateEmpleado",name="updateEmpleado")
	 */
	public function updateEmpleadoAction(Request $request, $user){
		if ($request->getMethod()=="POST"){
			$em = $this->getDoctrine()->getManager();
			$empleado = $em->getRepository('AppBundle:Product')->findOneBy(array("nombreEmpleado"=>$request->get("nombreEmpleado")));
			$empleado->setPrimerNombre($request->get("primerNombre"));
			$empleado->setSegundoNombre($request->get("segundoNombre"));
			$empleado->setPrimerApellido($request->get("primerApellido"));
			$empleado->setSegundoApellido($request->get("segundoApellido"));
			$this->get('session')->getFlashBag()->add('mensaje', 'Empleado actualizado');
		}
		return $this->render('empleado/update.html.twig',array('user' => $user));
	}
}
