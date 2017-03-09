<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SubscriptionType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('firstname', TextType::class)
                ->add('surname', TextType::class)
//                ->add('subdate')
                ->add('email', EmailType::class)
                ->add('subarea_id', ChoiceType::class, array(
                    'label' => 'Domain',
                    'choices' => array(
                        'History' => '1',
                        'Music' => '2',
                        'Literature' => '3',
                        'Painting' => '4'),
                    'placeholder' => 'Choose your domain'))
                ->add('save', SubmitType::class, array('label' => 'Subscribe', 'attr' => [
                        'class' => 'btn-success']));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Subscription'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_subscription';
    }

}
