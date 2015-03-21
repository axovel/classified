<?php
App::uses('AppController', 'Controller');
/**
 * Ads Controller
 *
 * @property Ad $Ad
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdsController extends AppController {


	var $uses = array('Category','Subcategory','FeaturedPlanType');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ad->recursive = 0;
		$this->set('ads', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
                    $this->loadModel('Ad');
			$this->Ad->create();
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Category->find('list');
		$subcategories = $this->Subcategory->find('list');
		$featuredPlans = $this->FeaturedPlanType->find('list');
		$this->set(compact('categories', 'subcategories', 'featuredPlans'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
		}
		$categories = $this->Ad->Category->find('list');
		$subcategories = $this->Ad->Subcategory->find('list');
		$featuredPlans = $this->Ad->FeaturedPlan->find('list');
		$this->set(compact('categories', 'subcategories', 'featuredPlans'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('The ad has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ad could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
