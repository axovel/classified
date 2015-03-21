<?php class Contact extends AppModel {

     public $useDbConfig = 'default';
    
    public $actsAs = array( 'Elasticsearch.Searchable' 
        => array(
        'debug_traces' => false,
        'searcher_enabled' => true,
       'searcher_action' => 'searcher',
        'searcher_param' => 'q',
       'searcher_serializer' => 'json_encode',
          'index_name' => 'default',
       'index_chunksize' => 10000,
        'index_find_params' => array(
            'liindex_find_paramsmit' => 1,
            'fields' => array(
//                // It's important you name your fields.
                'id',
                'name',
            ),
        ),
   ),
);
   
    public $_mapping = array(
        'id' => array('type' => 'integer'),
        'name' => array('type' => 'string'),
        'number' => array('type' => 'string'),
        'special_type' => array(
            'type' => 'multi_field',
            'fields' => array(
                'not_analyzed' => array('type' => 'string', 'index' => 'not_analyzed'),
                'analyzed' => array('type' => 'string', 'index' => 'analyzed')
            )
        ),
        'created' => array('type' => 'datetime'),
        'modified' => array('type' => 'datetime')
    );

    public function elasticMapping() {
        return $this->_mapping;
    }

}

?>