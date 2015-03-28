<?php
App::uses('AppController', 'Controller');
/**
 * Admins Controller
 *
 * @property Ad $Ad
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdminsController extends AppController {


	var $uses = array('Category','Subcategory','FeaturedPlanType','Ad','User');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * dashboard method
 *
 * @return void
 */
	public function dashboard() {
        $this->layout="admin";
                $categories = $this->Category->find('count');
		$subcategories = $this->Subcategory->find('count');
		$featuredPlans = $this->FeaturedPlanType->find('count');
		$ads= $this->Ad->find('count');
		$users= $this->User->find('count');
                $userList= $this->User->find('all',array('limit'=>4));
		$this->set(compact('categories', 'subcategories', 'featuredPlans','ads','users','userList'));
               
            
        }
        
        
            /**
     * index method
     *
     * @return void
     */
    public function index() {

        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }
    
    
    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid User'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->Category->find('first', $options));
    }

 }