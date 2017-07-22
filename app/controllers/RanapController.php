<?php

class RanapController extends ControllerBase
{
	public function initialize() 
	{
		$this->tag->setTitle( "RANAP" );
		parent::initialize();
	}
	
    public function indexAction()
    {
		
    }
	public function modalAction()
    {
		$txtrm = $this->request->getPost('txtrm');
		$this->view->txtrm = $txtrm;
		
    }

}

