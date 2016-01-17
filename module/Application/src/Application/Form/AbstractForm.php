<?php

namespace Application\Form;

use Zend\Form\Form;

abstract class AbstractForm extends Form
{
    public function __construct()
    {
        parent::__construct();
        $this->addElements();
        
        $this->add(array(
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => array(
                'value' => 'Update',
                'class' => 'btn btn-primary'
            ),
        ));
    }
    
    protected abstract function addElements();
}
