<?php

class ToDoList extends CI_Controller{
	public function toDo()
	{
		$this->load->view('list');
	}
}