<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cEvent extends CI_Controller {


	public function index()
	{
		$this->data['custom_js']= '<script type="text/javascript">
                              	$("#user").addClass("active");
                        </script>';
		$this->load->view('imports/vHeader.php');
		$this->load->view('event/vEvent.php');
		//$this->load->view('script/vEventScript.php');
		$this->load->view('googlemap.php');
		$this->load->view('imports/vFooter',$this->data);
	}

	public function createEvent(){
		$this->load->model('events/mEvent','event');

		$data['event_date_start'] = $this->input->post('event_date_start');
		$data['event_date_end'] = $this->input->post('event_date_end');
		$data['no_tickets_total'] = $this->input->post('no_tickets_total');
		$data['event_name'] = $this->input->post('event_name');
		$data['event_details'] = $this->input->post('event_details');
		$data['event_category'] = $this->input->post('event_category');
		$data['date_created'] = date('Y-m-d H:i:s');
	
		echo $this->event->createEvent($data);
	}
}
?>