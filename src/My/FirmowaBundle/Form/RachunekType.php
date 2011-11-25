<?php

namespace My\FirmowaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RachunekType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('data_wystawienia')
            ->add('numer_rachunku')
            ->add('nazwa_usugi')
            ->add('kwota')
            ->add('zamowienie')
        ;
    }

    public function getName()
    {
        return 'my_firmowabundle_rachunektype';
    }
}
