<?php class SearchersController extends AppController {
    public $components = array('RequestHandler',
        'Elasticsearch.Searcher' => array(
            'model' => '_all',
            'leading_model' => 'Ad',
        ),
        // ... etc
    );

    public function searcher () {
       $this->Searcher->searchAction($this->RequestHandler->isAjax());
    
    }
}

?>