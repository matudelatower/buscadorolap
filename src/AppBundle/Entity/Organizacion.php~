<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organizacion
 *
 * @ORM\Table(name="organizacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganizacionRepository")
 */
class Organizacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=255, unique=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="domicilio", type="string", length=255)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia_estado", type="string", length=255)
     */
    private $provinciaEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var int
     *
     * @ORM\Column(name="libre", type="integer")
     */
    private $libre;

    /**
     * @var int
     *
     * @ORM\Column(name="windows_xp", type="integer")
     */
    private $windowsXp;

    /**
     * @var int
     *
     * @ORM\Column(name="web", type="integer")
     */
    private $web;

    /**
     * @var int
     *
     * @ORM\Column(name="facilidad_instalacion", type="integer")
     */
    private $facilidadInstalacion;

    /**
     * @var int
     *
     * @ORM\Column(name="curva_aprendizaje", type="integer")
     */
    private $curvaAprendizaje;

    /**
     * @var int
     *
     * @ORM\Column(name="no_utiliza_sql", type="integer")
     */
    private $noUtilizaSql;

    /**
     * @var int
     *
     * @ORM\Column(name="extension_excel", type="integer")
     */
    private $extensionExcel;

    /**
     * @var int
     *
     * @ORM\Column(name="cliente_servidor", type="integer")
     */
    private $clienteServidor;

    /**
     * @var int
     *
     * @ORM\Column(name="ayuda_online", type="integer")
     */
    private $ayudaOnline;

    /**
     * @var int
     *
     * @ORM\Column(name="etl", type="integer")
     */
    private $etl;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Organizacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set cuit
     *
     * @param string $cuit
     * @return Organizacion
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     * @return Organizacion
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string 
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Organizacion
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provinciaEstado
     *
     * @param string $provinciaEstado
     * @return Organizacion
     */
    public function setProvinciaEstado($provinciaEstado)
    {
        $this->provinciaEstado = $provinciaEstado;

        return $this;
    }

    /**
     * Get provinciaEstado
     *
     * @return string 
     */
    public function getProvinciaEstado()
    {
        return $this->provinciaEstado;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Organizacion
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set libre
     *
     * @param integer $libre
     * @return Organizacion
     */
    public function setLibre($libre)
    {
        $this->libre = $libre;

        return $this;
    }

    /**
     * Get libre
     *
     * @return integer 
     */
    public function getLibre()
    {
        return $this->libre;
    }

    /**
     * Set windowsXp
     *
     * @param integer $windowsXp
     * @return Organizacion
     */
    public function setWindowsXp($windowsXp)
    {
        $this->windowsXp = $windowsXp;

        return $this;
    }

    /**
     * Get windowsXp
     *
     * @return integer 
     */
    public function getWindowsXp()
    {
        return $this->windowsXp;
    }

    /**
     * Set web
     *
     * @param integer $web
     * @return Organizacion
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return integer 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set facilidadInstalacion
     *
     * @param integer $facilidadInstalacion
     * @return Organizacion
     */
    public function setFacilidadInstalacion($facilidadInstalacion)
    {
        $this->facilidadInstalacion = $facilidadInstalacion;

        return $this;
    }

    /**
     * Get facilidadInstalacion
     *
     * @return integer 
     */
    public function getFacilidadInstalacion()
    {
        return $this->facilidadInstalacion;
    }

    /**
     * Set curvaAprendizaje
     *
     * @param integer $curvaAprendizaje
     * @return Organizacion
     */
    public function setCurvaAprendizaje($curvaAprendizaje)
    {
        $this->curvaAprendizaje = $curvaAprendizaje;

        return $this;
    }

    /**
     * Get curvaAprendizaje
     *
     * @return integer 
     */
    public function getCurvaAprendizaje()
    {
        return $this->curvaAprendizaje;
    }

    /**
     * Set noUtilizaSql
     *
     * @param integer $noUtilizaSql
     * @return Organizacion
     */
    public function setNoUtilizaSql($noUtilizaSql)
    {
        $this->noUtilizaSql = $noUtilizaSql;

        return $this;
    }

    /**
     * Get noUtilizaSql
     *
     * @return integer 
     */
    public function getNoUtilizaSql()
    {
        return $this->noUtilizaSql;
    }

    /**
     * Set extensionExcel
     *
     * @param integer $extensionExcel
     * @return Organizacion
     */
    public function setExtensionExcel($extensionExcel)
    {
        $this->extensionExcel = $extensionExcel;

        return $this;
    }

    /**
     * Get extensionExcel
     *
     * @return integer 
     */
    public function getExtensionExcel()
    {
        return $this->extensionExcel;
    }

    /**
     * Set clienteServidor
     *
     * @param integer $clienteServidor
     * @return Organizacion
     */
    public function setClienteServidor($clienteServidor)
    {
        $this->clienteServidor = $clienteServidor;

        return $this;
    }

    /**
     * Get clienteServidor
     *
     * @return integer 
     */
    public function getClienteServidor()
    {
        return $this->clienteServidor;
    }

    /**
     * Set ayudaOnline
     *
     * @param integer $ayudaOnline
     * @return Organizacion
     */
    public function setAyudaOnline($ayudaOnline)
    {
        $this->ayudaOnline = $ayudaOnline;

        return $this;
    }

    /**
     * Get ayudaOnline
     *
     * @return integer 
     */
    public function getAyudaOnline()
    {
        return $this->ayudaOnline;
    }

    /**
     * Set etl
     *
     * @param integer $etl
     * @return Organizacion
     */
    public function setEtl($etl)
    {
        $this->etl = $etl;

        return $this;
    }

    /**
     * Get etl
     *
     * @return integer 
     */
    public function getEtl()
    {
        return $this->etl;
    }
}
