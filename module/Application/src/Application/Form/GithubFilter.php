<?php

namespace Application\Form;

use Zend\InputFilter\InputFilter;

class GithubFilter extends InputFilter
{
    public function __construct()
    {
        // github account name
        $this->add(array(
            'name'       => 'github_account_name',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'max' => 64,
                    ),
                ),
            ),
            'filters'   => array(
                array('name' => 'StringTrim'),
            ),
        ));
        
         // github full name
        $this->add(array(
            'name'       => 'github_full_name',
            'required'   => true,
            'validators' => array(
                array(
                    'name'    => 'StringLength',
                    'options' => array(
                        'max' => 64,
                    ),
                ),
            ),
            'filters'   => array(
                array('name' => 'StringTrim'),
            ),
        ));
    }
}
