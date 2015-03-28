<?php

App::uses('AppController', 'Controller');

/**
 * Subcategories Controller
 *
 * @property Subcategory $Subcategory
 * @property PaginatorComponent $Paginator
 */
class SubcategoriesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {


        $this->Subcategory->recursive = 0;
        $this->set('subcategories', $this->Paginator->paginate());
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = "admin";
        $this->Subcategory->recursive = 0;
        $this->set('subcategories', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Subcategory->exists($id)) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        $options = array('conditions' => array('Subcategory.' . $this->Subcategory->primaryKey => $id));
        $this->set('subcategory', $this->Subcategory->find('first', $options));
    }

    public function admin_view($id = null) {
        $this->layout = "admin";
        if (!$this->Subcategory->exists($id)) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        $options = array('conditions' => array('Subcategory.' . $this->Subcategory->primaryKey => $id));
        $this->set('subcategory', $this->Subcategory->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Subcategory->create();
            if ($this->Subcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The subcategory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Subcategory->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = "admin";
        if ($this->request->is('post')) {
            $this->Subcategory->create();
            if ($this->Subcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The subcategory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Subcategory->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {

        if (!$this->Subcategory->exists($id)) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Subcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The subcategory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Subcategory.' . $this->Subcategory->primaryKey => $id));
            $this->request->data = $this->Subcategory->find('first', $options);
        }
        $categories = $this->Subcategory->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->layout = "admin";
        if (!$this->Subcategory->exists($id)) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Subcategory->save($this->request->data)) {
                $this->Session->setFlash(__('The subcategory has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subcategory could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Subcategory.' . $this->Subcategory->primaryKey => $id));
            $this->request->data = $this->Subcategory->find('first', $options);
        }
        $categories = $this->Subcategory->Category->find('list');
        $this->set(compact('categories'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->layout = "admin";
        $this->Subcategory->id = $id;
        if (!$this->Subcategory->exists()) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Subcategory->delete()) {
            $this->Session->setFlash(__('The subcategory has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subcategory could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->loadModel("Subcategory");
        $this->layout = "admin";
        $this->Subcategory->id = $id;
        if (!$this->Subcategory->exists()) {
            throw new NotFoundException(__('Invalid subcategory'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Subcategory->delete()) {
            $this->Session->setFlash(__('The subcategory has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subcategory could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * change Status method
     *
     * @throws NotFoundException
     * @param string $id, $status
     * @return void
     */
    public function status($id = null, $status = null) {
        $this->autoRender = FALSE;
        $this->Subcategory->id = $id;
        if (!$this->Subcategory->exists()) {
            throw new NotFoundException(__('Invalid subcategory'));
        }

        $data['Subcategory']['id'] = $id;
        $data['Subcategory']['status'] = $status;
        $status = $this->Subcategory->save($data);
        $this->Session->setFlash("Status has been changed");
        $this->redirect(array('action' => 'admin_index'));
    }

}
