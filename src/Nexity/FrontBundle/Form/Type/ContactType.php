<?php

namespace Nexity\FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('civilite', ChoiceType::class, array(
           'choices'  => array(
               'Mlle' => 0,
               'Mme' => 1,
               'M.' => 2,
           ),
           'choices_as_values' => true,
            ))
           ->add('nom', null, ['label' => 'Nom'] )
           ->add('prenom')
           ->add('code_postal')
           ->add('email')
           ->add('telephone')
           ->add('optin_nexity', ChoiceType::class, array(
               'choices'  => array(
                   'Oui' => 1,
                   'Non' => 0,
               ),
               'choices_as_values' => true,
               'label' => 'Souhaitez-vous recevoir l\'actualité immobilière et les offres personnalisées de Nexity ?',
           ))
           ->add('optin_partenaire', ChoiceType::class, array(
               'choices'  => array(
                   'Oui' => 1,
                   'Non' => 0,
               ),
               'choices_as_values' => true,
               'label' => 'Souhaitez-vous recevoir les offres de nos partenaires',
           ))
           ->add('submit', 'submit')
           ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)//permet de deduire la dataclass en cas d'imbrication de formulaire
    {
        $resolver->setDefaults( ['data_class' => 'Nexity\BackBundle\Entity\Contact', 'csrf_protection' => false,] );
    }

    public function getName()
    {
        return 'contact_form';
    }
}