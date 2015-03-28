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
    public $uses = array('Category', 'Ad', 'AdsMedia');
    public $components = array('Paginator');

    /**
     * advance search method
     *
     * * @param string $category, $subCategory, $adtitle
     * 
     * @return void
     */
    public function advance($category = null, $subCategory = null, $adtitle = null) {

        // Geting list of category and sub category
        $this->Category->recursive = 1;
        $this->Category->unbindModel(array('hasMany' => array('Ad')));
        $this->set('categories', $this->Category->find('all'));

        // Geting count of total added ad
        $this->set('noOfProduct', $this->Ad->find('count'));

        // Geting count of total Urgent marked Ad
        $this->set('noOfUrgentProduct', $this->Ad->find('count', array('conditions' => array('Ad.is_urgent' => 1))));

        // Geting count of total Featured marked ad
        $this->set('noOfFeaturedProduct', $this->Ad->find('count', array('conditions' => array('Ad.is_featured' => 1))));

        // Geting count of total Featured marked ad
        $this->set('noOfAdsWithPicture', $this->AdsMedia->find('count', array('conditions' => array('AdsMedia.file_path !=' => ""))));

        $category = base64_decode($category);
        $subCategory = base64_decode($subCategory);

        $conditions = array('Ad.category_id' => $category, 'Ad.subcategory_id' => $subCategory, 'Ad.ad_title LIKE' => "%" . $adtitle . "%");
        // pr($conditions);die;      
        $results = $this->Ad->find('all', array('conditions' => $conditions, array('order' => "Ad.date_created DESC")));

        $this->set(compact('results'));
    }

    /**
     * extended search method
     * 
     *  @param string $category, $subCategory, $adtitle
     *
     * @return void
     * 
     * @type ajax
     */
    public function extended($category = null, $subCategory = null, $adtitle = null) {
      
        // setting Layout
        $this->layout = "ajax";
        
        //variable decode goes here
        $category = base64_decode($category);
        $subCategory = base64_decode($subCategory);

        //Making conditions array
        $conditions = array('Ad.category_id' => $category, 'Ad.subcategory_id' => $subCategory, 'Ad.ad_title LIKE' => "%" . $adtitle . "%");
        //featching requested search Records 
        $results = $this->Ad->find('all', array('conditions' => $conditions, array('order' => "Ad.date_created DESC")));
        //setting result to use in view
        $this->set(compact('results'));
    }

}
