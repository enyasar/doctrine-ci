<?php
class Test extends Controller {
	
	function paginate() {
		
		$this->load->library('pagination');

		$config['base_url'] = base_url() . "test/paginate";
		$config['total_rows'] = '200';
		$config['per_page'] = '10';
		
		$this->pagination->initialize($config);
		
		echo $this->pagination->create_links();
		
	}
	
}