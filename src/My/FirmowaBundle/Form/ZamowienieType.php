<?php

namespace My\FirmowaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ZamowienieType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('data_przyjecia')
            ->add('data_odbioru')
            ->add('Usterka')
            ->add('numer_zamowienia')
            ->add('klienci')
        ;
    }

    public function getName()
    {
        return 'my_firmowabundle_zamowienietype';
    }
}
