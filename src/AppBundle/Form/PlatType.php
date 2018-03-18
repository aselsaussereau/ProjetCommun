<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class PlatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idPlat', IntegerType::class, array(
            'label' => 'Identifiant Plat',
        ))
            ->add('nomPlat', TextType::class, array(
                'label' => 'Nom plat',
            ))
            ->add('categoriePlat', TextType::class, array(
                'label' => 'Categorie plat',
            ))
            ->add('descriptionPlat', TextType::class, array(
                'label' => 'Description plat',
            ))
            ->add('dureeValide', DateTimeType::class, array(
                'label' => 'Duree de validité du plat',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy hh:mm:ss',
            ))
            ->add('creeA', DateTimeType::class, array(
                'label' => 'Plat crée',
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy hh:mm:ss',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Plat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_plat';
    }


}
