<?php
	class AdminController extends  BaseController
	{
		protected $layout = 'layout.admin';
		public function getAdmin()
		{

			$this -> layout -> book_list = 'a'; 
		}	
	}