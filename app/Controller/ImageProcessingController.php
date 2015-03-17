<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'ImageTool');
/**
 * ImageProcessing Controller
 * @property SessionComponent $Session
 */
class ImageProcessingController extends AppController {

	public function createThumbnailImage()
	{

		$files =array();
		$filesCount  = count($this->request->params['form']['files']['name']);
		for($i=0; $i<$filesCount; $i++)
		{
			$files[$i]['name'] = $this->request->params['form']['files']['name'][$i];
			$files[$i]['type'] =  $this->request->params['form']['files']['type'][$i];
			$files[$i]['tmp_name'] =  $this->request->params['form']['files']['tmp_name'][$i];
			$files[$i]['size'] =  $this->request->params['form']['files']['size'][$i];
		}

		foreach($files as $file)
		{
			move_uploaded_file($file['tmp_name'], IMAGES.'ads/temp/'.time());
		}
	}

}
