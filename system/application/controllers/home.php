<?php
class Home extends Controller {

	public function index() {

		$vars['categories'] = Doctrine_Query::create()
			->select('c.title, f.title, f.description')
			->addSelect('t.id, COUNT(t.id) as num_threads')
			->from('Category c, c.Forums f')
			->leftJoin('f.Threads t')
			->groupBy('f.id')
			->execute();

		$vars['title'] = 'Home';
		$vars['content_view'] = 'forum_list';
		$vars['container_css'] = 'forums';

		$this->load->view('template', $vars);
	}

}