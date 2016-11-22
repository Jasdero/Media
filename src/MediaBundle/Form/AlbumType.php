<?php

namespace MediaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlbumType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreAlbum')
                ->add('artist')
                ->add('genre', ChoiceType::class, array(
                        'choices' =>array(
                        'HipHop'=>'HipHop',
                        'Soul'=>'Soul',
                        'Rock'=>'Rock'
                    ),
                        'choices_as_values' => true,)

                )
                ->add('support', ChoiceType::class, array(
                    'choices'=>array(
                        'Vinyl'=>'Vinyl',
                        'CD'=>'CD',
                        'Cassette'=>'Cassette'
                    ),
                        'choices_as_values' => true,)

                );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MediaBundle\Entity\Album'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mediabundle_album';
    }


}
