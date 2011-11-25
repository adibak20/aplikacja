<?php

namespace My\FirmowaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class KlientType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('imie')
            ->add('nazwisko')
            ->add('email')
            ->add('telefon')
            ->add('ulica')
            ->add('nr_domu')
            ->add('kod')
            ->add('miejscowosc')
            ->add('nip')
        ;
    }

    public function getName()
    {
        return 'my_firmowabundle_klienttype';
    }
}
