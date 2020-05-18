<?php
class ControllerExtensionModule[modulename] extends Controller {
	public function index() {
		$this->load->language('extension/module/[modulename]');

		$data = '';

		$data['text'] = 'text';
		
		return $this->load->view('extension/module/[modulename]', $data);
	}
}