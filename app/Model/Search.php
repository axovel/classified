<?php
App::uses('AppModel', 'Model');
/**
 * Search Model
 *
 * @property SearchAds $search
 */
class Search extends AppModel {
    
    /**
     * Use table
     */
    
// public $actsAs = array(
//
//        'ElasticSearchIndex.ElasticSearchIndexable' => array()
//
//    );


    /**
     * Display field
     *
     * @var string
     */
     
    public $displayField = 'id';
}