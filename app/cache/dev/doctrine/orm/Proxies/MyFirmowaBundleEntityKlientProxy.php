<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MyFirmowaBundleEntityKlientProxy extends \My\FirmowaBundle\Entity\Klient implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setImie($imie)
    {
        $this->__load();
        return parent::setImie($imie);
    }

    public function getImie()
    {
        $this->__load();
        return parent::getImie();
    }

    public function setNazwisko($nazwisko)
    {
        $this->__load();
        return parent::setNazwisko($nazwisko);
    }

    public function getNazwisko()
    {
        $this->__load();
        return parent::getNazwisko();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setTelefon($telefon)
    {
        $this->__load();
        return parent::setTelefon($telefon);
    }

    public function getTelefon()
    {
        $this->__load();
        return parent::getTelefon();
    }

    public function setUlica($ulica)
    {
        $this->__load();
        return parent::setUlica($ulica);
    }

    public function getUlica()
    {
        $this->__load();
        return parent::getUlica();
    }

    public function setNrDomu($nrDomu)
    {
        $this->__load();
        return parent::setNrDomu($nrDomu);
    }

    public function getNrDomu()
    {
        $this->__load();
        return parent::getNrDomu();
    }

    public function setKod($kod)
    {
        $this->__load();
        return parent::setKod($kod);
    }

    public function getKod()
    {
        $this->__load();
        return parent::getKod();
    }

    public function setMiejscowosc($miejscowosc)
    {
        $this->__load();
        return parent::setMiejscowosc($miejscowosc);
    }

    public function getMiejscowosc()
    {
        $this->__load();
        return parent::getMiejscowosc();
    }

    public function setNip($nip)
    {
        $this->__load();
        return parent::setNip($nip);
    }

    public function getNip()
    {
        $this->__load();
        return parent::getNip();
    }

    public function getKlienci()
    {
        $this->__load();
        return parent::getKlienci();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'imie', 'nazwisko', 'email', 'telefon', 'ulica', 'nr_domu', 'kod', 'miejscowosc', 'nip', 'klienci');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}