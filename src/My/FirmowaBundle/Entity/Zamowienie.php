<?php

namespace My\FirmowaBundle\Entity;

use My\FirmowaBundle\Entity\Klient;
use Doctrine\ORM\Mapping as ORM;

/**
 * My\FirmowaBundle\Entity\Zamowienie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Zamowienie
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
     * @var date $data_przyjecia
     *
     * @ORM\Column(name="data_przyjecia", type="date")
     */
    private $data_przyjecia;

    /**
     * @var date $data_odbioru
     *
     * @ORM\Column(name="data_odbioru", type="date")
     */
    private $data_odbioru;

    /**
     * @var text $Usterka
     *
     * @ORM\Column(name="Usterka", type="text")
     */
    private $Usterka;

    /**
     * @var string $numer_zamowienia
     *
     * @ORM\Column(name="numer_zamowienia", type="string", length=100)
     */
    private $numer_zamowienia;


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
     * Set data_przyjecia
     *
     * @param date $dataPrzyjecia
     */
    public function setDataPrzyjecia($dataPrzyjecia)
    {
        $this->data_przyjecia = $dataPrzyjecia;
    }

    /**
     * Get data_przyjecia
     *
     * @return date 
     */
    public function getDataPrzyjecia()
    {
        return $this->data_przyjecia;
    }

    /**
     * Set data_odbioru
     *
     * @param date $dataOdbioru
     */
    public function setDataOdbioru($dataOdbioru)
    {
        $this->data_odbioru = $dataOdbioru;
    }

    /**
     * Get data_odbioru
     *
     * @return date 
     */
    public function getDataOdbioru()
    {
        return $this->data_odbioru;
    }

    /**
     * Set Usterka
     *
     * @param text $usterka
     */
    public function setUsterka($usterka)
    {
        $this->Usterka = $usterka;
    }

    /**
     * Get Usterka
     *
     * @return text 
     */
    public function getUsterka()
    {
        return $this->Usterka;
    }

    /**
     * Set numer_zamowienia
     *
     * @param string $numerZamowienia
     */
    public function setNumerZamowienia($numerZamowienia)
    {
        $this->numer_zamowienia = $numerZamowienia;
    }

    /**
     * Get numer_zamowienia
     *
     * @return string 
     */
    public function getNumerZamowienia()
    {
        return $this->numer_zamowienia;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Klient", inversedBy="klienci")
     * @ORM\JoinColumn(name="klient_id", referencedColumnName="id")
     */
    protected  $klienci;
    
    public function getKlienci(){
    	return $this->klienci;
    }
    public function setKlienci($klienci){
    	$this->klienci=$klienci;
    }

    public  function __toString() {
        	return (string)$this->numer_zamowienia;
      }
    
    

    
    
}