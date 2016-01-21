<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TwitterController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('twitter_form');
        $request = $this->getRequest();
        if($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid())
            {
                $data = $form->getData();
                unset($data['send']);
                $service = $this->getServiceLocator()->get('settings_service');
                $service->persist('twitter', $data);
                return $this->redirect()->toRoute('home');
            }
        }
        
        return new ViewModel(array(
            'form' => $form
        ));
    }
}