<?php
/**
        How to use:

        view:
		 $this->widget('ext.JebUpload.JebUpload',
                 array(
                       'id'=>'uploadFile',
                       'config'=>array(
                                       'action'=>'/controller/upload',
                                       'allowedExtensions'=>array("jpg"),//array("jpg","jpeg","gif","exe","mov" and etc...
                                       'sizeLimit'=>10*1024*1024,// maximum file size in bytes
                                       'minSizeLimit'=>10*1024*1024,// minimum file size in bytes
                                       //'onComplete'=>"js:function(id, fileName, responseJSON){ alert(fileName); }",
                                       //'messages'=>array(
                                       //                  'typeError'=>"{file} has invalid extension. Only {extensions} are allowed.",
                                       //                  'sizeError'=>"{file} is too large, maximum file size is {sizeLimit}.",
                                       //                  'minSizeError'=>"{file} is too small, minimum file size is {minSizeLimit}.",
                                       //                  'emptyError'=>"{file} is empty, please select files again without it.",
                                       //                  'onLeave'=>"The files are being uploaded, if you leave now the upload will be cancelled."
                                       //                 ),
                                       //'showMessage'=>"js:function(message){ alert(message); }"
                                      )
                      ));

        controller:

	public function actionUpload()
	{
	        Yii::import("ext.JebUpload.JebFileUploader");

                $folder='upload/';// folder for uploaded files
                $allowedExtensions = array("jpg"),//array("jpg","jpeg","gif","exe","mov" and etc...
                $sizeLimit = 10 * 1024 * 1024;// maximum file size in bytes
                $uploader = new JebFileUploader($allowedExtensions, $sizeLimit);
                $result = $uploader->handleUpload($folder);
                $result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
                echo $result;// it's array
	}

*/
class JebUpload extends CWidget
{
        public $id="fileUploader";
        public $postParams=array();
        public $config=array();
        public $css=null;

        public function run()
        {
            if(empty($this->config['action']))
            {
                throw new CException('JebUpload: param "action" cannot be empty.');
            }

            if(empty($this->config['allowedExtensions']))
            {
                $this->config['allowedExtensions'] = array("jpg", "jpeg", "gif", "png");
            }

            if(empty($this->config['sizeLimit']))
            {
                $this->config['sizeLimit'] = 10485760;
            }

            if(empty($this->config['minSizeLimit']))
            {
                $this->config['minSizeLimit'] = 10240;
            }

                unset($this->config['element']);

                echo '<div id="'.$this->id.'"><noscript><p>Please enable JavaScript to use file uploader.</p></noscript></div>';
		$assets = dirname(__FILE__).'/assets';
                $baseUrl = Yii::app()->assetManager->publish($assets);

		Yii::app()->clientScript->registerScriptFile($baseUrl . '/fileuploader.js', CClientScript::POS_HEAD);

                $this->css=(!empty($this->css))?$this->css:$baseUrl.'/fileuploader.css';
                Yii::app()->clientScript->registerCssFile($this->css);

		$postParams = array('PHPSESSID'=>session_id(),'YII_CSRF_TOKEN'=>Yii::app()->request->csrfToken);
		if(isset($this->postParams))
		{
				$postParams = array_merge($postParams, $this->postParams);
		}

		$config = array(
                                'element'=>'js:document.getElementById("'.$this->id.'")',
                                'debug'=>false,
                                'multiple'=>false
                               );
		$config = array_merge($config, $this->config);
		$config['params']=$postParams;
		$config = CJavaScript::encode($config);
                Yii::app()->getClientScript()->registerScript("FileUploader_".$this->id, "var FileUploader_".$this->id." = new qq.FileUploader($config); ",CClientScript::POS_LOAD);
	}


}