<?php

namespace App\Form;

use App\DTO\ContactFormDTO;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactFormDTOType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name', TextType::class, [ 'attr' => ['class' => 'form-control'], 'required' => false, 'label' => 'Név' ])
            ->add('Email', TextType::class, [ 'attr' => ['class' => 'form-control'], 'required' => false, 'label' => 'E-mail'])
            ->add('Note', TextareaType::class, [ 'attr' => ['class' => 'form-control', 'rows' => 3], 'required' => false, 'label' => 'Üzenet' ])
            ->add('save', SubmitType::class, [ 'attr' => ['class' => 'btn btn-primary '],'label' => 'Küldés' ])
			
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactFormDTO::class,
        ]);
    }
}
