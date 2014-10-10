<?php

namespace Base\Mvc\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
use Zend\View\Model\JsonModel;

abstract class ControllerAbstract extends AbstractActionController {

    /**
     * @var EntityManager
     */
    protected $em;
    protected $service;
    protected $entity;
    protected $form;
    protected $viewModel;
    protected $controller;
    protected $criptografia;
    protected $configHtmlHelper;

    public function listarAction()
    {
        $data = $this->getEm()
                ->getRepository($this->entity)
                ->findAll();
        return new ViewModel(array('data' => $data));
    }

    public function cadastrarAction()
    {
        $form = new $this->form;
        $request = $this->getRequest();
        if ($request->isPost()) {
            $data = $request->getPost()->toArray();
            $data['stAtivo'] = TRUE;
            $form->setData($data);
            if ($form->isValid()) {
                return new JsonModel($this->insert($data));
            }
            return new JsonModel(array('error' => TRUE,
                'message' => 'Não foi possível cadastrar, '
                . 'entre em contato com o Administrador.'));
        }
        return new ViewModel(array('form' => $form,
            'configHtmlHelper' => $this->configHtmlHelper));
    }

    public function editarAction()
    {
        $form = new $this->form;
        $form->get('submit')->setValue("Salvar");
        $request = $this->getRequest();
        $repository = $this->getEm()->getRepository($this->entity);
        if ($this->params()->fromRoute('id', 0)) {
            $entity = $repository->find($this->getCriptografia()->descript($this->params()->fromRoute('id', 0)));
            $array = $entity->toArray();
            $array['stAtivo'] = TRUE;
            $form->setData($array);
            $this->viewModel = new ViewModel(array('form' => $form, 'entity' => $entity->toArray()));
        }
        if ($request->isPost()) {
            $data = $request->getPost()->toArray();
            $form->setData($data);
            if ($form->isValid()) {
                $service = $this->getServiceLocator()->get($this->service);

                if ($service->update($data['idFuncaoAtividade'], $data)) {
                    $return = array('error' => FALSE,
                        'message' => 'Alterado com Sucesso.');
                } else {
                    $return = array('error' => TRUE,
                        'message' => 'Não foi possível alterar, entre em contato com o Administrador.');
                }
            } else {
                $return = array('error' => TRUE,
                    'message' => 'Não foi possível alterar, entre em contato com o Administrador.');
            }
            $this->viewModel = $this->getJson($return);
        }
        return $this->viewModel;
    }

    public function deleteAction()
    {
        
    }

    /**
     * @return EntityManager
     */
    protected function getEm()
    {
        if (NULL === $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }

    protected function getCriptografia()
    {
        $this->criptografia = $this->getServiceLocator()->get('viewhelpermanager')->get('Criptografia');
        return $this->criptografia;
    }

    private function insert($data)
    {
        $service = $this->getServiceLocator()->get($this->service);
        if ($service->insert($data)) {
            return array('error' => FALSE,
                'message' => 'Cadastrado com Sucesso.');
        }
        return array('error' => TRUE,
            'message' => 'Não foi possível cadastrar, entre em contato com o Administrador.');
    }
}
