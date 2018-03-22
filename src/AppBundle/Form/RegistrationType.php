<?php

namespace AppBundle\Form;

use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerTypeType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array(
            'label' => 'Nom',
        ))
            ->add('prenom', TextType::class, array(
                'label' => 'Prénom',
            ))
            ->add('dnaiss', BirthdayType::class, array(
                'label' => 'Date de naissance (jj/mm/aaaa)',
                'placeholder' => 'Sélectionner une valeur',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
            ))
            ->add('tel', TextType::class, array(
                'label' => 'Numéros de téléphone (ex : 06.45.34.52.32)',
                'data_class' => null,
            ))
            ->add('genre', ChoiceType::class, array(
                'choices' => array(
                    'Femme' => 0,
                    'Homme' => 1,
                ),
                'expanded' => true,
            ))
            ->add('imageUser', FileType::class, array(
                'label' => 'Image(JPG)',
                'data_class' => null,
            ));

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
/**
 * Created by PhpStorm.
 * User: zhaow
 * Date: 2018/3/3
 * Time: 10:35
 */