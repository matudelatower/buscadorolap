<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Herramienta
 *
 * @ORM\Table(name="herramienta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HerramientaRepository")
 */
class Herramienta
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
     * @ORM\Column(name="empresa", type="string", length=255, nullable=true)
     */
    private $empresa;

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
     * @return Herramienta
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
     * Set empresa
     *
     * @param string $empresa
     * @return Herramienta
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set libre
     *
     * @param integer $libre
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
     * @return Herramienta
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
