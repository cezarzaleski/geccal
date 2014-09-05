<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\LoginForm;
use Zend\Authentication\AuthenticationService;

class IndexController extends AbstractActionController {

    private $form;
    private $view;
    private $data;

    public function __construct()
    {
        $this->form = new LoginForm();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $data = $request->getPost();
            $this->form->setData($data);
        }
        $configHtmlHelper = $this->configHelper();
        $this->view = array('form' => $this->form,
            'configHtmlHelper' => $configHtmlHelper);
    }

    public function indexAction()
    {
        if ($this->getRequest()->isPost()) {
            $this->logar();
        }
        return $this->view;
    }

    private function configHelper()
    {
        return array(
            'attributes' => array(
                'class' => 'form-group'
            )
        );
    }

    private function populateData($form)
    {
        $data = $form->getData();
        $this->data = array('noLogin' => $data['noLogin'],
            'noSenha' => $data['noSenha']);
    }

    private function logar()
    {
        $this->__construct();
        if (!$this->form->isValid()) {
            return FALSE;
        }
        $adapter = $this->getServiceLocator()->get('Application\Auth\Adapter');
        $this->populateData($this->form);
        $adapter->setData($this->data);
        $adapter->ip = $this->getRequest()->getServer()->get('REMOTE_ADDR');
        $result = $adapter->authenticate();
        if ($result) {
            $this->flashMessenger()->clearMessages();
            return $this->redirect()->toUrl('/admin/funcao-atividade/listar');
        }
        $this->flashMessenger()
                ->addErrorMessage('Usuário ou Senha não conferem.');
    }

    /**
     * Metodo para logout
     *
     * @access public
     * @return Redirect home
     */
    public function logoutAction()
    {
        $auth = new AuthenticationService;
        $auth->clearIdentity();
        $usuarioAuth = $this->getServiceLocator()->get('Application\Auth\UsuarioAuth');
        $usuarioAuth->logout();
        return $this->redirect()->toRoute('home');
    }

}
