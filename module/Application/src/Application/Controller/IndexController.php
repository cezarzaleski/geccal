<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\LoginForm;

class IndexController extends AbstractActionController {

    private $form;
    private $view;

    public function __construct()
    {
        $this->form = new LoginForm();
        $request = $this->getRequest();
        if($request->isPost()){
            $data = $request->getPost();
            $this->form->setData($data);
        }
    }

    public function indexAction()
    {
        
        $this->form->setAttribute('action', $this->getRequest()->getBaseUrl() . '/application/index/login');
        $messages = "";
        $configHtmlHelper = $this->configHelper();
        if ($this->flashMessenger()->getMessages()) {
            $messages = implode(',', $this->flashMessenger()->getMessages());
        }
        return array('form' => $this->form, 'messages' => $messages,
            'configHtmlHelper' => $configHtmlHelper);
    }

    public function loginAction()
    {
        $this->__construct();
        
        
        
        return $this->redirect()->toRoute('home');
        
    }

    protected function configHelper()
    {
        return array(
            'attributes' => array(
                'class' => 'form-group'
            )
        );
    }

}
