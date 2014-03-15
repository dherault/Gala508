<?php


class ObjetsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function beforeFilter()
    {
        $this->layout='qrcode';
    }

    public function index() {
        $this->set('objets', $this->Objet->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid objet'));
        }

        $objet = $this->Objet->findById($id);
        if (!$objet) {
            throw new NotFoundException(__('Invalid objet'));
        }
        $this->set('objet', $objet);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Session->setFlash('cest bon');
            $this->Objet->create();
            if ($this->Objet->save($this->request->data)) {
                $this->Session->setFlash('Your objet has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your objet.');
            }
        }
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid objet'));
    }

    $objet = $this->Objet->findById($id);
    if (!$objet) {
        throw new NotFoundException(__('Invalid objet'));
    }

    if ($this->request->is('objet') || $this->request->is('put')) {
        $this->Objet->id = $id;
        if ($this->Objet->save($this->request->data)) {
            $this->Session->setFlash('Your objet has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your objet.');
        }
    }

    if (!$this->request->data) {
        $this->request->data = $objet;
    }
}
public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Objet->delete($id)) {
        $this->Session->setFlash('The objet with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}