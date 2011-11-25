<?php

namespace My\FirmowaBundle\Entity;

use Doctrine\ORM\Mapping\Id;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use My\FirmowaBundle\Entity\Zamowienie;


/**
 * My\FirmowaBundle\Entity\Klient
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Klient
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $imie
     *
     * @ORM\Column(name="imie", type="string", length=50)
     */
    private $imie;

    /**
     * @var string $nazwisko
     *
     * @ORM\Column(name="nazwisko", type="string", length=50)
     */
    private $nazwisko;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=128)
     */
    private $email;

    /**
     * @var string $telefon
     *
     * @ORM\Column(name="telefon", type="string", length=20)
     */
    private $telefon;

    /**
     * @var string $ulica
     *
     * @ORM\Column(name="ulica", type="string", length=100)
     */
    private $ulica;

    /**
     * @var string $nr_domu
     *
     * @ORM\Column(name="nr_domu", type="string", length=10)
     */
    private $nr_domu;

    /**
     * @var string $kod
     *
     * @ORM\Column(name="kod", type="string", length=6)
     */
    private $kod;

    /**
     * @var string $miejscowosc
     *
     * @ORM\Column(name="miejscowosc", type="string", length=50)
     */
    private $miejscowosc;

    /**
     * @var string $nip
     *
     * @ORM\Column(name="nip", type="string", length=14)
     */
    private $nip;


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
     * Set imie
     *
     * @param string $imie
     */
    public function setImie($imie)
    {
        $this->imie = $imie;
    }

    /**
     * Get imie
     *
     * @return string 
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
    }

    /**
     * Get nazwisko
     *
     * @return string 
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * Set telefon
     *
     * @param string $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set ulica
     *
     * @param string $ulica
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
    }

    /**
     * Get ulica
     *
     * @return string 
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Set nr_domu
     *
     * @param string $nrDomu
     */
    public function setNrDomu($nrDomu)
    {
        $this->nr_domu = $nrDomu;
    }

    /**
     * Get nr_domu
     *
     * @return string 
     */
    public function getNrDomu()
    {
        return $this->nr_domu;
    }

    /**
     * Set kod
     *
     * @param string $kod
     */
    public function setKod($kod)
    {
        $this->kod = $kod;
    }

    /**
     * Get kod
     *
     * @return string 
     */
    public function getKod()
    {
        return $this->kod;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;
    }

    /**
     * Get miejscowosc
     *
     * @return string 
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set nip
     *
     * @param string $nip
     */
    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    /**
     * Get nip
     *
     * @return string 
     */
    public function getNip()
    {
        return $this->nip;
    }
    /**
     * @ORM\OneToMany(targetEntity="Zamowienie", mappedBy="klient")
     */
    protected $klienci;
    
    public function __construct(){
    	$this->klienci=new ArrayCollection();
    }
    public function getKlienci() {
    	return (string)$this->klienci;
    }
    public function __toString() {
    	return $this->id.'.  '.$this->imie.' '.$this->nazwisko;
    }
    
}