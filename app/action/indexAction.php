<?php
/*
*	@indexAction.php
*	Copyright (c)2013-2016 Mallmold.com
*	
*	This program is free software; you can redistribute it and/or
*	modify it under the terms of the GNU General Public License
*	as published by the Free Software Foundation; either version 2
*	of the License, or (at your option) any later version.
*	More details please see: http://www.gnu.org/licenses/gpl.html
*/

require Action('common');

class indexAction extends commonAction
{
	public function index()
	{
		//	rewrite to page/home
		
		//	see app/router.php
		//	'index/index' => array (
		//		'query' => 'page_id=3',
		//		'rewrite' => 'page/index',
		//	),
		
		
		/*
		$this->view['img_sign'] = $this->model('image')->getsignbyid('goods_index_sid');
		
		//slider
		$this->view['slider_index'] = $this->model('slider')->get('index');
		
		//hot products
		$this->view['hot_goods'] = $this->model('goods')->getlist('', 'sold_num desc', 5);
		
		//new products
		$this->view['new_goods'] = $this->model('goods')->getlist('', 'addtime desc', 5);
		
		$this->view['meta_description'] = $this->setting['meta_description'];
		$this->view['meta_keywords'] = $this->setting['meta_keywords'];
		$this->view('index.html');
		*/
	}
}

?>