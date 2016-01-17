<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TwitterController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('twitter_form');
        return new ViewModel(array(
            'form' => $form
        ));
    }
}