<?php

namespace Application\Form;

class GithubForm extends AbstractForm
{
    protected function addElements()
    {
        $this->add(array(
            'name' => 'github_account_name',
            'attributes' => array(
                'id' => 'account_input',
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Account Name',
            ),
            'type'  => 'Text',
        ));
        
        $this->add(array(
            'name' => 'github_full_name',
             'attributes' => array(
                'id' => 'name_input',
                 'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Full Name',
            ),
            'type'  => 'Text',
        ));
    }
    
}