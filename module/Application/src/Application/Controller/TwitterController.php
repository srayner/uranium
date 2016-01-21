<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TwitterController extends AbstractActionController
{
    public function indexAction()
    {
        $form = $this->getServiceLocator()->get('twitter_form');
        $service = $this->getServiceLocator()->get('settings_service');
        $twitter = $service->load('twitter');
        $form->setData($twitter);
        $request = $this->getRequest();
        if($request->isPost()){
            $form->setData($request->getPost());
            if ($form->isValid())
            {
                $data = $form->getData();
                unset($data['send']);
                
                $service->persist('twitter', $data);
                return $this->redirect()->toRoute('home');
            }
        }
        
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    public function quoteAction()
    {
        $service = $this->getServiceLocator()->get('settings_service');
        $quotes = $service->load('quotes');
        $key = array_rand($quotes, 1);
        return new ViewModel(array(
            'quote' => $quotes[$key]
        ));
    }
}