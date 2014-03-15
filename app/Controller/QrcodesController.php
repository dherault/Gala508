<?php


class QrcodesController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function beforeFilter()
    {
        $this->layout='qrcode';
    }

    public function index() {
        $this->set('qrcodes', $this->Qrcode->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid qrcode'));
        }

        $qrcode = $this->Qrcode->findById($id);
        if (!$qrcode) {
            throw new NotFoundException(__('Invalid qrcode'));
        }
        $this->set('qrcode', $qrcode);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Session->setFlash('cest bon');
            $this->Qrcode->create();
            if ($this->Qrcode->save($this->request->data)) {
                $this->Session->setFlash('Your qrcode has been saved.');
                $this->redirect(array('controller' => 'pages', 'action' => 'after'));
            } else {
                $this->Session->setFlash('Unable to add your qrcode.');
            }
        }
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid qrcode'));
    }

    $qrcode = $this->Qrcode->findById($id);
    if (!$qrcode) {
        throw new NotFoundException(__('Invalid qrcode'));
    }

    if ($this->request->is('qrcode') || $this->request->is('put')) {
        $this->Qrcode->id = $id;
        if ($this->Qrcode->save($this->request->data)) {
            $this->Session->setFlash('Your qrcode has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your qrcode.');
        }
    }

    if (!$this->request->data) {
        $this->request->data = $qrcode;
    }
}
public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Qrcode->delete($id)) {
        $this->Session->setFlash('The qrcode with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}