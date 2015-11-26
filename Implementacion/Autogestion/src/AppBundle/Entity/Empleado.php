<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numeroIdentificacion;

    /**
     * @var string
     */
    private $tipoIdentificacion;

    /**
     * @var string
     */
    private $primerNombre;

    /**
     * @var string
     */
    private $segundoNombre;

    /**
     * @var string
     */
    private $primerApellido;

    /**
     * @var string
     */
    private $segundoApellido;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $genero;

    /**
     * @var Cargo
     */
    private $cargo;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var string
     */
    private $estadoCivil;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $barrio;

    /**
     * @var integer
     */
    private $estrato;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $celular;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $tipoContrato;

    /**
     * @var string
     */
    private $eps;

    /**
     * @var string
     */
    private $fondoPensiones;

    /**
     * @var string
     */
    private $fondoCesantias;

    /**
     * @var string
     */
    private $tipoVivienda;

    /**
     * @var string
     */
    private $conyugue;

	/**
	 * @var Collection
	 */
    private $hijos;
    
    
    public function __construct()
    {
    	$this->hijos = new ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroIdentificacion
     *
     * @param string $numeroIdentificacion
     *
     * @return Empleado
     */
    public function setNumeroIdentificacion($numeroIdentificacion)
    {
        $this->numeroIdentificacion = $numeroIdentificacion;

        return $this;
    }

    /**
     * Get numeroIdentificacion
     *
     * @return string
     */
    public function getNumeroIdentificacion()
    {
        return $this->numeroIdentificacion;
    }

    /**
     * Set tipoIdentificacion
     *
     * @param string $tipoIdentificacion
     *
     * @return Empleado
     */
    public function setTipoIdentificacion($tipoIdentificacion)
    {
        $this->tipoIdentificacion = $tipoIdentificacion;

        return $this;
    }

    /**
     * Get tipoIdentificacion
     *
     * @return string
     */
    public function getTipoIdentificacion()
    {
        return $this->tipoIdentificacion;
    }

    /**
     * Set primerNombre
     *
     * @param string $primerNombre
     *
     * @return Empleado
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get primerNombre
     *
     * @return string
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set segundoNombre
     *
     * @param string $segundoNombre
     *
     * @return Empleado
     */
    public function setSegundoNombre($segundoNombre)
    {
        $this->segundoNombre = $segundoNombre;

        return $this;
    }

    /**
     * Get segundoNombre
     *
     * @return string
     */
    public function getSegundoNombre()
    {
        return $this->segundoNombre;
    }

    /**
     * Set primerApellido
     *
     * @param string $primerApellido
     *
     * @return Empleado
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get primerApellido
     *
     * @return string
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set segundoApellido
     *
     * @param string $segundoApellido
     *
     * @return Empleado
     */
    public function setSegundoApellido($segundoApellido)
    {
        $this->segundoApellido = $segundoApellido;

        return $this;
    }

    /**
     * Get segundoApellido
     *
     * @return string
     */
    public function getSegundoApellido()
    {
        return $this->segundoApellido;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Empleado
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return Empleado
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set cargo
     *
     * @param Cargo $cargo
     *
     * @return Empleado
     */
    public function setCargo(Cargo $cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Empleado
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     *
     * @return Empleado
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empleado
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set barrio
     *
     * @param string $barrio
     *
     * @return Empleado
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return string
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set estrato
     *
     * @param integer $estrato
     *
     * @return Empleado
     */
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;

        return $this;
    }

    /**
     * Get estrato
     *
     * @return integer
     */
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Empleado
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tipoContrato
     *
     * @param string $tipoContrato
     *
     * @return Empleado
     */
    public function setTipoContrato($tipoContrato)
    {
        $this->tipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return string
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }

    /**
     * Set eps
     *
     * @param string $eps
     *
     * @return Empleado
     */
    public function setEps($eps)
    {
        $this->eps = $eps;

        return $this;
    }

    /**
     * Get eps
     *
     * @return string
     */
    public function getEps()
    {
        return $this->eps;
    }

    /**
     * Set fondoPensiones
     *
     * @param string $fondoPensiones
     *
     * @return Empleado
     */
    public function setFondoPensiones($fondoPensiones)
    {
        $this->fondoPensiones = $fondoPensiones;

        return $this;
    }

    /**
     * Get fondoPensiones
     *
     * @return string
     */
    public function getFondoPensiones()
    {
        return $this->fondoPensiones;
    }

    /**
     * Set fondoCesantias
     *
     * @param string $fondoCesantias
     *
     * @return Empleado
     */
    public function setFondoCesantias($fondoCesantias)
    {
        $this->fondoCesantias = $fondoCesantias;

        return $this;
    }

    /**
     * Get fondoCesantias
     *
     * @return string
     */
    public function getFondoCesantias()
    {
        return $this->fondoCesantias;
    }

    /**
     * Set tipoVivienda
     *
     * @param string $tipoVivienda
     *
     * @return Empleado
     */
    public function setTipoVivienda($tipoVivienda)
    {
        $this->tipoVivienda = $tipoVivienda;

        return $this;
    }

    /**
     * Get tipoVivienda
     *
     * @return string
     */
    public function getTipoVivienda()
    {
        return $this->tipoVivienda;
    }

    /**
     * Set conyugue
     *
     * @param Conyugue $conyugue
     *
     * @return Empleado
     */
    public function setConyugue(Conyugue $conyugue)
    {
        $this->conyugue = $conyugue;

        return $this;
    }

    /**
     * Get conyugue
     *
     * @return \Conyugue
     */
    public function getConyugue()
    {
        return $this->conyugue;
    }
    
    /**
     * Get hijos
     * 
     * @return Collection
     */
    public function getHijos($hijos) {
    	return $this->hijos;
    }
}

