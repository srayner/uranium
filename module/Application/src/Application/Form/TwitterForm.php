<?php

namespace Application\Form;

class TwitterForm extends AbstractForm
{         
    protected function addElements()
    {
        $this->add(array(
            'name' => 'twitter_consumer_key',
            'attributes' => array(
                'id' => 'consumer_key_input',
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Consumer Key',
            ),
            'type'  => 'Text',
        ));
        
        $this->add(array(
            'name' => 'twitter_consumer_secret',
            'attributes' => array(
                'id' => 'consumer_key_secret_input',
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Consumer Secret',
            ),
            'type'  => 'Text',
        ));
        
        $this->add(array(
            'name' => 'twitter_access_token',
            'attributes' => array(
                'id' => 'access_token_input',
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Access Token',
            ),
            'type'  => 'Text',
        ));
        
        $this->add(array(
            'name' => 'twitter_access_secret',
            'attributes' => array(
                'id' => 'access_secret_input',
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Access Token Secret',
            ),
            'type'  => 'Text',
        ));
    }
}