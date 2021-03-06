<?php 

	class updateCtrl extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('updatemodel');
		}
		public function show_login($show_error = false)
		{
			redirect(base_url('index.php/loginctrl/'),"refresh");
		}
		public function updateProfileInfo()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateProfileInfo($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateAccountEmail($id)
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$data = $this->updatemodel->updateAccountEmail($id);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateGraduateInfo()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateProfileInfo($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updatePersonalInfo()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updatePersonalInfo($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateElementary()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateElementary($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateSecondary()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateSecondary($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateTertiary()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateTertiary($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateUserInfo()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateUserInfo($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
		public function updateEmployment()
		{
			if($this->session->userdata('isLoggedIn'))
			{
				$post = json_decode(file_get_contents('php://input'));
				$data = $this->updatemodel->updateEmployment($post);
				echo json_encode($data);
			}
			else
			{
				$this->show_login(false);
			}
		}
	}
 ?>