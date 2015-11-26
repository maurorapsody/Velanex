<?php

namespace AppBundle\Entity;

/**
 * Hijo
 */
class Hijo
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
     * @var string
     */
    private $escolaridad;

    /**
     * @var boolean
     */
    private $subsidiado;


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
     * @return Hijo
     */
    public function setnumeroIdentificacion($numeroIdentificacion)
    {
        $this->numeroIdentificacion = $numeroIdentificacion;

        return $this;
    }

    /**
     * Get numeroIdentificacion
     *
     * @return string
     */
    public function getnumeroIdentificacion()
    {
        return $this->numeroIdentificacion;
    }

    /**
     * Set tipoIdentificacion
     *
     * @param string $tipoIdentificacion
     *
     * @return Hijo
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
     * @return Hijo
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
     * @return Hijo
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
     * @return Hijo
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
     * @return Hijo
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
     * @return Hijo
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
     * @return Hijo
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
     * Set escolaridad
     *
     * @param string $escolaridad
     *
     * @return Hijo
     */
    public function setEscolaridad($escolaridad)
    {
        $this->escolaridad = $escolaridad;

        return $this;
    }

    /**
     * Get escolaridad
     *
     * @return string
     */
    public function getEscolaridad()
    {
        return $this->escolaridad;
    }

    /**
     * Set subsidiado
     *
     * @param boolean $subsidiado
     *
     * @return Hijo
     */
    public function setSubsidiado($subsidiado)
    {
        $this->subsidiado = $subsidiado;

        return $this;
    }

    /**
     * Get subsidiado
     *
     * @return boolean
     */
    public function getSubsidiado()
    {
        return $this->subsidiado;
    }
}

