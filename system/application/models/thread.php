<?php
class Thread extends Doctrine_Record {
	
	public function setTableDefinition() {
		$this->hasColumn('title', 'string', 255);
		$this->hasColumn('forum_id', 'integer', 4);
		$this->hasColumn('first_post_id', 'integer', 4);
	}

	public function setUp() {
		$this->hasOne('Forum', array(
			'local' => 'forum_id',
			'foreign' => 'id'
		));
		$this->hasMany('Post as Posts', array(
			'local' => 'id',
			'foreign' => 'thread_id'
		));
		
		$this->hasOne('Post as First_Post', array(
			'local' => 'first_post_id',
			'foreign' => 'id'
		));		
	}
	
}