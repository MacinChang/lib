<?php
	class RecordController extends BaseController
	{
		//protected $layout = 'home.record';

		public function showRecord()
		{
			
		}
		public function addRecord()
		{
			$record = new Record;
			$record -> u_id = 1;
			$record -> b_id = 4;
			$record -> save();
			return '已存入一条记录';
		}
	}