<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'contact.firstname'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'contact.lastname'
            ])
            ->add('mail', TextType::class, [
                'label' => 'contact.mail'
            ])
            ->add('phone', TextType::class, [
                'label' => 'contact.phone'
            ])
            ->add('project', TextareaType::class, [
                'label' => 'contact.project'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
