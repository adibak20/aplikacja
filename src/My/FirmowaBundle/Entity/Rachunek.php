<?php

namespace My\FirmowaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\FirmowaBundle\Entity\Rachunek
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rachunek
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
     * @var date $data_wystawienia
     *
     * @ORM\Column(name="data_wystawienia", type="date")
     */
    private $data_wystawienia;

    /**
     * @var string $numer_rachunku
     *
     * @ORM\Column(name="numer_rachunku", type="string", length=255)
     */
    private $numer_rachunku;

    /**
     * @var text $nazwa_usugi
     *
     * @ORM\Column(name="nazwa_usugi", type="text")
     */
    private $nazwa_usugi;

    /**
     * @var decimal $kwota
     *
     * @ORM\Column(name="kwota", type="decimal")
     */
    private $kwota;


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
     * Set data_wystawienia
     *
     * @param date $dataWystawienia
     */
    public function setDataWystawienia($dataWystawienia)
    {
        $this->data_wystawienia = $dataWystawienia;
    }

    /**
     * Get data_wystawienia
     *
     * @return date 
     */
    public function getDataWystawienia()
    {
        return $this->data_wystawienia;
    }

    /**
     * Set numer_rachunku
     *
     * @param string $numerRachunku
     */
    public function setNumerRachunku($numerRachunku)
    {
        $this->numer_rachunku = $numerRachunku;
    }

    /**
     * Get numer_rachunku
     *
     * @return string 
     */
    public function getNumerRachunku()
    {
        return $this->numer_rachunku;
    }

    /**
     * Set nazwa_usugi
     *
     * @param text $nazwaUsugi
     */
    public function setNazwaUsugi($nazwaUsugi)
    {
        $this->nazwa_usugi = $nazwaUsugi;
    }

    /**
     * Get nazwa_usugi
     *
     * @return text 
     */
    public function getNazwaUsugi()
    {
        return $this->nazwa_usugi;
    }

    /**
     * Set kwota
     *
     * @param decimal $kwota
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;
    }

    /**
     * Get kwota
     *
     * @return decimal 
     */
    public function getKwota()
    {
        return $this->kwota;
    }
    /**
    * @ORM\OneToOne(targetEntity="Zamowienie")
    * @ORM\JoinColumn(name="zamowienie", referencedColumnName="id")
    */
    protected $zamowienie;
    
    public function getZamowienie(){
    	return $this->zamowienie;	
    }
    public function setZamowienie($zamowienie){
    	$this->zamowienie=$zamowienie;
    }
}