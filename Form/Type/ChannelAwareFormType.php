<?php
namespace Oro\Bundle\EmbeddedFormBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ChannelAwareFormType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oro_channel_aware_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'channel',
            $options['channel_form_type'],
            [
                'class' => 'OroIntegrationBundle:Channel',
                'property' => 'name',
            ]
        );
    }
}
