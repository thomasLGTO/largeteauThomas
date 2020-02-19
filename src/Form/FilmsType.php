<?php

namespace App\Form;

use App\Entity\Films;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class, [
                'label' => 'Saisir le titre du Film',
                'required'=>false,
                'attr' => [
                    'placeholder' => 'entrez-le ici !'
            ]])
            ->add('affiche',TextType::class, [
                'label' => 'L\'affiche du film',
                'required'=>false,
                'attr' => [
                    'placeholder' => 'entrer l\'url de l\'affiche ici  !'
            ]])
            ->add('realisateur',TextType::class, [
                'label' => 'Saisir le réalisateur',
                'required'=>false,
                'attr' => [
                    'placeholder' => 'juste ici !'
            ]])
            ->add('recompense',TextType::class, [
                'label' => 'Récompense pour le film',
                'required'=>false,
                'attr' => [
                    'placeholder' => 'ex : Palme d\'or'
            ]])
            ->add('sorti',DateType::class, [
                'years' => range('1900', date('2020')),
                'format' => 'dd MM yyyy',
            ])
            ->add('synopsis',TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Bla bla bla'
            ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Films::class,
        ]);
    }
}
