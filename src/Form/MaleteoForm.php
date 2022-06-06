<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Maleteo;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class MaleteoForm extends AbstractType
{


    //En esta clase definimos que campos van a tener nuestro formulario
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', HiddenType::class);
        $builder->add('nombre');
        $builder->add('email', EmailType::class);
        $builder->add('horario');
        $builder->add('ciudad', ChoiceType::class, [
            "choices"=>[
                "Madrid" => "Madrid",
                "Barcelona" => "Barcelona",
                "Herencia" => "Herencia"
            ]
        ]);
        $builder->add("politica_privacidad", CheckboxType::class,[
            "required"=> "true"
        ]);
        $builder->add('enviar', SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class" => Maleteo::class
        ]);
    }

}