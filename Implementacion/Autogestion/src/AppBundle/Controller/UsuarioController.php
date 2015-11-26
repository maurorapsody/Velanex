<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Usuario;
use Symfony\Component\Validator\Constraints\Date;

class UsuarioController extends Controller
{
	/**
	 * @Route("/Usuario",name="Usuario")
	 */
	public function UsuarioAction(){
		$em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:Usuario')->findAll();
		return $this->render('usuario/usuario.html.twig',array('users' => $users));
	}
	
	/**
	 * @Route("/UsuarioNew",name="newUsuario")
	 */
	public function newUsuarioAction(Request $request){
		if ($request->getMethod()=="POST"){
			$numeroIdentificacion=$request->get("numeroDocumento");
			$tipoIdentificacion=$request->get("tipoDocumento");
			$user=$this->getDoctrine()->getRepository('AppBundle:Usuario')->findOneBy(array("numeroIdentificacion"=>$numeroIdentificacion,"tipoIdentificacion"=>$tipoIdentificacion));
			if ($user){
				$this->get('session')->getFlashBag()->add('mensaje', 'Usuario existente');
				return $this->render('usuario/create.html.twig');
			}elseif ($request->get("contrasenha") != $request->get("confirmarContrasenha")) {
				$this->get('session')->getFlashBag()->add('mensaje', 'Contrasenas no concuerdan');
				return $this->render('usuario/create.html.twig');
			}else {
				$usuario = new Usuario();
				$usuario->setNumeroIdentificacion($numeroIdentificacion);
				$usuario->setTipoIdentificacion($tipoIdentificacion);
				$usuario->setNombreUsuario($request->get("nombreUsuario"));
				$usuario->setPrimerNombre($request->get("primerNombre"));
				$usuario->setSegundoNombre($request->get("segundoNombre"));
				$usuario->setPrimerApellido($request->get("primerApellido"));
				$usuario->setSegundoApellido($request->get("segundoApellido"));
				$usuario->setGenero($request->get("genero"));
				//$usuario->setFechaNacimiento(new Date());
				$usuario->setContrasenha($request->get("contrasenha"));
				$usuario->setRol("U");
				$em = $this->getDoctrine()->getManager();
				
				$em->persist($usuario);
				$em->flush();
				$this->get('session')->getFlashBag()->add('mensaje', 'Usuario creado');
				return $this->render('usuario/create.html.twig');
			}
		}
		return $this->render('usuario/create.html.twig');
	}
	
	/**
	 * @Route("/DeleteUsuario/{id}",name="deleteUsuario")
	 */
	public function deleteUsuarioAction($id){			
		$usuario = $this->getDoctrine()->getRepository('AppBundle:Usuario')->find($id);
		$em = $this->getDoctrine()->getManager();
		$em->remove($usuario);
		$em->flush();
		
		$this->get('session')->getFlashBag()->add('mensaje', 'Usuario borrado');
		$users = $em->getRepository('AppBundle:Usuario')->findAll();
		return $this->render('usuario/usuario.html.twig',array('users' => $users));
	}
	
	/**
	 * @Route("/RetrieveUsuario",name="retrieveUsuario")
	 */
	public function retrieveUsuarioAction(Request $request){
		if ($request->getMethod()=="POST"){
			$numeroIdentificacion=$request->get("numeroDocumento");
			$tipoIdentificacion=$request->get("tipoDocumento");
			$user=$this->getDoctrine()->getRepository('AppBundle:Usuario')->findOneBy(array("numeroIdentificacion"=>$numeroIdentificacion,"tipoIdentificacion"=>$tipoIdentificacion));
			if (!$user){
				$nombreUsuario=$request->get("nombreUsuario");
				$user=$this->getDoctrine()->getRepository('AppBundle:Usuario')->findOneBy(array("nombreUsuario"=>$nombreUsuario));
				if (!$user){
					$this->get('session')->getFlashBag()->add('mensaje', 'Usuario inexistente');
					return $this->render('usuario/retrieve.html.twig');
				}
			}
			return $this->redirectToRoute('updateUsuario', array('user'=>$user));
		}
		return $this->render('usuario/retrieve.html.twig');
	}
	
	/**
	 * @Route("/UpdateUsuario",name="updateUsuario")
	 */
	public function updateUsuarioAction(Request $request, $user){
		if ($request->getMethod()=="POST"){
			$em = $this->getDoctrine()->getManager();
			$usuario = $em->getRepository('AppBundle:Product')->findOneBy(array("nombreUsuario"=>$request->get("nombreUsuario")));
			$usuario->setPrimerNombre($request->get("primerNombre"));
			$usuario->setSegundoNombre($request->get("segundoNombre"));
			$usuario->setPrimerApellido($request->get("primerApellido"));
			$usuario->setSegundoApellido($request->get("segundoApellido"));
			$usuario->setGenero($request->get("genero"));
			//$usuario->setFechaNacimiento(new Date());
			$usuario->setRol("U");
			$this->get('session')->getFlashBag()->add('mensaje', 'Usuario actualizado');
		}
		return $this->render('usuario/update.html.twig',array('user' => $user));
	}
}
