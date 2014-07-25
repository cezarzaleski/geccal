<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\LoginForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $form = new LoginForm();
        $form->setAttribute('action',
        $this->getRequest()->getBaseUrl().'/application/index/login');
        $messages = "";
        if($this->flashMessenger()->getMessages()){
            $messages = implode(',', $this->flashMessenger()->getMessages());
        }
        return array('form'=>$form,'messages'=>  $messages);
    }
}
