<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GithubController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('github_form');
        return new ViewModel(array(
            'form' => $form
        ));
    }
}