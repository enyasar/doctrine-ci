<?php
class Forums extends Controller {
	
	public function display($id, $offset = 0) {
		
		$per_page = 4;

		$forum = Doctrine::getTable('Forum')->find($id);
				
		$vars['title'] = $forum['title'];
		$vars['threads'] = $forum->getThreadsArray(
			$offset,
			$per_page
		);
		$vars['content_view'] = 'forum';
		$vars['container_css'] = 'forum';
		
		$num_threads = $forum->numThreads();
		
		// do we have enough to paginate
		if ($num_threads > $per_page) {
			// PAGINATION
			$this->load->library('pagination');
			$config['base_url'] = base_url() . "forums/display/$id";
			$config['total_rows'] = $num_threads;
			$config['per_page'] = $per_page;
			$config['uri_segment'] = 4;
			$this->pagination->initialize($config);
			
			$vars['pagination'] = $this->pagination->create_links();
		}
			
		$this->load->view('template', $vars);

	}
	
}

