<?php  App::uses('AppController', 'Controller');

/**
 * Searchers Controller
 *
  * @property PaginatorComponent $Paginator
 * 
 */

class SearchersController extends AppController {
    
    public $uses=array('Category','Ad','AdsMedia');
    
    //Including  Elastic Search comonent here
    public $components = array('RequestHandler',
        'Elasticsearch.Searcher' => array(
            'model' => '_all',
            'leading_model' => 'Ad',
        ),
        // ... etc
    );

    public function searcher () {
        
        // Geting list of category and sub category
       $this->Category->recursive=1;       
       $this->Category->unbindModel(array('hasMany'=>array('Ad')));       
       $this->set('categories',$this->Category->find('all'));
         
        // Geting count of total added ad
       $this->set('noOfProduct',$this->Ad->find('count'));
          
        // Geting count of total Urgent marked Ad
       $this->set('noOfUrgentProduct',$this->Ad->find('count',array('conditions'=>array('Ad.is_urgent'=>1))));
       
         // Geting count of total Featured marked ad
       $this->set('noOfFeaturedProduct',$this->Ad->find('count',array('conditions'=>array('Ad.is_featured'=>1))));
       
         // Geting count of total Featured marked ad
       $this->set('noOfAdsWithPicture',$this->AdsMedia->find('count',array('conditions'=>array('AdsMedia.file_path !='=>""))));
       
       //sending request for elastic search via curl 
       $this->Searcher->searchAction($this->RequestHandler->isAjax());
       
    
    }
    
            /**
     * search method
     *
     * @return void
     */
    public function search($id) {
        
        $this->autoRender=false;
        
        // Geting list of category and sub category
       $this->Category->recursive=1;    
       
       $this->Category->unbindModel(array('hasMany'=>array('Ad'))); 
       
       $this->set('categories',$this->Category->find('all'));
         
        // Geting count of total added ad
       $this->set('noOfProduct',$this->Ad->find('count'));
          
        // Geting count of total Urgent marked Ad
       $this->set('noOfUrgentProduct',$this->Ad->find('count',array('conditions'=>array('Ad.is_urgent'=>1))));
       
         // Geting count of total Featured marked ad
       $this->set('noOfFeaturedProduct',$this->Ad->find('count',array('conditions'=>array('Ad.is_featured'=>1))));
       
         // Geting count of total Featured marked ad
       $this->set('noOfAdsWithPicture',$this->AdsMedia->find('count',array('conditions'=>array('AdsMedia.file_path !='=>""))));
       
             
        $this->set('results',$this->Category->find('all', array('conditions' => array('Category.id' =>$id))));
        
        $this->render('searcher');

    }
}

?>