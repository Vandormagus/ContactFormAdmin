<?php
namespace App\Form;

use App\DTO\UserDTO;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserDTOType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['attr' => ['class' => 'form-control'], 'required' => false, 'label' => 'Név' ])
            ->add('password', PasswordType::class, [ 'attr' => ['class' => 'form-control'], 'required' => false, 'label' => 'Jelszó' ] )
            ->add('save', SubmitType::class, [ 'attr' => ['class' => 'btn btn-primary '],'label' => 'Mentés' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserDTO::class,
        ]);
    }
}
