<?php
class testController
{
	function show()
	{
		$model=new testModel();
		$data=$model->get();
		$view = new testView();

		$view->display($data);
	}
}