<?php

namespace Redking\Bundle\SonataUserBundle\Admin\Document;

use Sonata\UserBundle\Admin\Document\UserAdmin as BaseAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends BaseAdmin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper
            ->tab('Security')
                ->with('Keys')
                    ->add('oauth_client', null, array('required' => false, 'property' => 'name'))
                ->end()
            ->end()
        ;
    }
}
