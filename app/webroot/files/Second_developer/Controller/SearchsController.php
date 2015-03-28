<?php
App::uses('AppController', 'Controller');
/**
 * Searchs Controller
 *
 * @property Search $Search
 * @property PaginatorComponent $Paginator
 */
class SearchsController extends AppController {

/**
 * Components
 *
 * @var array
 */
public $uses=array('ads');
public $components = array('Paginator');


        
      

/**
 * index method
 *
 * @return void
 */
	public function index() {
            $this->autoRender=false;
            $this->loadModel('Ad');
		$this->Ad->recursive = 0;
		$this->set('ads', $this->Paginator->paginate());
              //  pr($this->Paginator->paginate());

	}
}