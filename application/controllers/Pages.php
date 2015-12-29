<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	#HOME PAGE mao ni ang Una mo gawas basta mo adto sa ato site
	public function index()
	{
		if(($this->session->userdata('userId')!=""))
		{
				$this->_welcome();
		}
		else{
			$this->_landing();
		}

	}
	#MAO NI ANG pang Display og Pages.....ang UNDERSCORE kai mao ni para dili maka access ang mga users sa domain...
	public function _landing()
	{
		$data['error']="";
		$this->load->view('pages/content',$data);
		$this->load->view('pages/footer');
	}
	#MAO NI ang MO GAWAS BASTA MAKA LOGIN NA ANG USER
	public function _welcome()
	{
		if(($this->session->userdata('userId')!=""))
		{		
			$this->_dashboard();
		}
		else
		{
			$this->_landing();
		}

	}
	#MAO NI ANG DASHBOARD DISPLAY 
	public function _userData()
	{
		$this->db->select('*');
		$this->db->from('user_md a');
		$this->db->join('user_dtl b', 'b.userId=a.userId','left');
		$this->db->join('company_dtl c', 'c.userId=a.userId','left');
		$this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
		$this->db->join('location_dtl e', 'e.userId=a.userId','left');
		$this->db->where('a.userId', $this->session->userdata('userId'));


		$query = $this->db->get();

		return $query;
	}

	public function _dashboard()
	{

		
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='dashboard';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['alldata']=$query->result_array();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/dashboard/content',$data);
		$this->load->view('pages/dashboard/footer');
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');		
		
	}
	#MAO NI ANG PROFILE DISPLAY 
		public function latest()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='newsfeed';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/newsfeedlatest/latestcontent'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}
		public function onfire()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='newsfeed';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/newsfeedonfire/onfirecontent'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}
		else
		{
			$this->_landing();
		}
	}
		public function toprated()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='newsfeed';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['alldata']=$query->result_array();
		$data['groupdetails'] = $groupquery->result_array();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/newsfeedtoprated/topratedcontent'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}
			public function timeline()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='timeline';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/timeline/content'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}
			public function startupproduct()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='startup';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/Products/content'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}
	public function adminPage1()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='admin';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/admindashboard/content'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/admindashboard/end');
		}else{
			$this->_landing();
		}
	}
		public function adminPage2()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='admin';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/adminonline/content'); 
		$this->load->view('pages/adminonline/controlsidebar');
		$this->load->view('pages/adminonline/end');
		$this->load->view('pages/adminonline/table');
		}else{
			$this->_landing();
		}
	}
		public function adminPage3()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='admin';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/content'); 
		$this->load->view('pages/adminoverallreports/chartcontent'); 
		$this->load->view('pages/adminoverallreports/controlsidebar');
		
		}else{
			$this->_landing();
		}
	}
		public function adminPage4()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='admin';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/adminstatistics/content'); 
		$this->load->view('pages/adminstatistics/chartcontent'); 
		$this->load->view('pages/adminstatistics/controlsidebar');
		}else{
			$this->_landing();
		}
	}

	public function group($groupId=null,$projectId=null)
	{	
		if(($this->session->userdata('userId')!=""))
		{
			$query=$this->_userData();
			$data['data']=$query->result_array();
			$data['pages']='group';
			$data['countgroup'] = $this->countGroups();
			$groupquery= $this->groupdetails();
			$data['groupdetails'] = $groupquery->result_array();
			$groupDetails= $this->post->groupdetails($groupId,$this->session->userdata('userId'));
				
			if(isset($groupId)){
				if($groupDetails->num_rows()==0) {
					$groupDetails->result_array();
				}else{
					if(isset($projectId)){
						$projectdtl= $this->projectdtl($groupId,$projectId);
						$data['projectdtl'] = $projectdtl->result_array();
					}else{
						$allproject= $this->allproject($groupId);

						$projectdtl= $this->projectdtl($groupId,$this->post->firstProject($groupId));
						$data['projectdtl'] = $projectdtl->result_array();

					}
					$query=$this->post->alluserData($this->session->userdata('userId'));
					$data['alldata']=$query->result_array();
					$query=$this->projectfiles($projectId);
					$data['projfile']=$query->result_array();
					$allproject= $this->allproject($groupId);
					$data['allproject'] = $allproject->result_array();
					$data['groupDtl'] = $groupDetails->result_array();
					$memberinfo= $this->memberinfo($groupId);
					$data['memberinfo'] = $memberinfo->result_array();
					$search= $this->_searchpeople();
					$data['searchpeople'] = $search->result_array();
				}
			}			
			else $this->index();

			$this->load->view('pages/dashboard/fixed',$data);
			$this->load->view('pages/group/groupcontent',$data); 
			$this->load->view('pages/dashboard/controlsidebar');
			$this->load->view('pages/dashboard/end');

		}else{
			$this->_landing();
		}
	}


	public function newgroup()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='group';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/group/creategroup',$data); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}

	public function profile($userId=null)
	{	if(($this->session->userdata('userId')!=""))
		{

			if(isset($userId))
			{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='profile';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$query=$this->post->alluserData($userId);
				$data['alldata']=$query->result_array();

				$query=$this->post->profile($userId);
				$data['profileDtl']=$query->result_array();
				$data['userId']=$userId;

				$groupDetails= $this->post->profile($userId);
				if($groupDetails->num_rows()==0) {
					$groupDetails->result_array();

					$this->load->view('pages/dashboard/fixed',$data);
					$this->load->view('pages/group/nogroup',$data); 
					$this->load->view('pages/dashboard/controlsidebar');
					$this->load->view('pages/dashboard/end');
				}else{
					$this->load->view('pages/dashboard/fixed',$data);
					$this->load->view('pages/profile/content',$data); 
					$this->load->view('pages/dashboard/controlsidebar');
					$this->load->view('pages/dashboard/end');
				}
			}else{
				$this->profile($this->session->userdata('userId'));
			}
		}else{
			$this->_landing();
		}
	}

		public function post($postId=null)
	{	if(($this->session->userdata('userId')!=""))
		{
			if(isset($postId))
			{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$data['alldata']=$query->result_array();
				$postdtlquery= $this->post->postdtl($postId);
				$data['postDetail'] = $postdtlquery->result_array();
				$comments= $this->post->showComments($postId,'1');
				$data['comments'] = $comments->result_array();				

				if($postdtlquery->num_rows()==0) {
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/post/content',$data); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
				}
				else{

						$this->load->view('pages/dashboard/fixed',$data);
						$this->load->view('pages/post/content',$data); 
						$this->load->view('pages/dashboard/controlsidebar');
						$this->load->view('pages/dashboard/end');
				}


			}else
				$this->index();

			
		}else{
			$this->_landing();
		}
	}


	#MAO NI ANG SIGN UP NGA FUNCTION PARA MAKA PILI SIYA SA TYPE
	public function signUp()
	{
		if(($this->session->userdata('userId')!=""))
		{
			$this->index();
		}
		else
		{
			
			$post=$this->input->post('userType');
			if(!isset($post))
			{
				$this->load->view('pages/register/index');
				$this->load->view('pages/dashboard/end');
			}
			
			else
			{
				if($this->input->post('userType')=='ideator')
				{
					$this->load->view('pages/register/index');
					$this->load->view('pages/register/ideator');
				}
				else if($this->input->post('userType')=='investor'){
					$this->load->view('pages/register/index');
					$this->load->view('pages/register/investor');
				}
				else if($this->input->post('userType')=='company'){
					$this->load->view('pages/register/index');
					$this->load->view('pages/register/company');
				}else
				{
					redirect('pages/signUp');
			    }
				
			}
		}
	}
	#DIRI NA MO PILI OG VALIDATION OG ASA E INSERT SA DB ANG MGA INPUTS SA USERS
	public function register()
	{	
		if(($this->session->userdata('userId')!=""))
		{
			$this->index();
		}
		else
		{
			
			$post=$this->input->post('btnSave');
			if(!isset($post))
			{
				$this->load->view('pages/register/index');
			}
			else if($post=='Ideator')
			{
				$this->_validationIdeator();
			}
			else if($post=='Investor')
			{
				$this->_validationInvestor();
			}
			else if($post=='Company')
			{
				$this->_validationCompany();
			}

		}
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('pages/index');
	}

	public function login()
	{
		$isCheck=false;
		$this->db->where('user_emailAdd', $this->input->post('email'));
		$this->db->where('user_password', md5($this->input->post('password')));
		$query = $this->db->get('user_md');
		
		if($query->num_rows()==1)
		{
			$isCheck = true;
		}
		
		if($isCheck) // if the user's credentials validated...
		{
			foreach ($query->result() as $row)
			{
	       		$userId = $row->userId;

			}
			$data = array(
				'userId' => $userId,
				'user_emailAdd' => $this->input->post('email')
				
			);
			$this->session->set_userdata($data);
			$this->index();
		}
		else // incorrect username or password
		{
			$data['error']="incorrect username or password";
		$this->load->view('pages/content',$data);
		$this->load->view('pages/footer');
		}
	}

	#MAO NI ANG VALIDATION UG INSERTION PARA SA IDEATOR NGA USERS
	public function _validationIdeator()
	{
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha|max_length[2]');
         $this->form_validation->set_rules('inputAge', 'Age', 'required|numeric|greater_than[8]|less_than[110]');
         $this->form_validation->set_rules('r3', 'Gender', 'required');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]|max_length[50]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required|max_length[40]');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]|max_length[40]');
         $this->form_validation->set_rules('inputAdress1', 'Address1', 'trim|max_length[255]');
         $this->form_validation->set_rules('inputAdress2', 'Address2', 'trim|max_length[255]');
         $this->form_validation->set_rules('inputCity', 'City', 'trim|max_length[30]');
         $this->form_validation->set_rules('inputRegion', 'Region/State', 'trim|max_length[45]');
         $this->form_validation->set_rules('inputZIP', 'Zip Code', 'alpha_numeric|max_length[10]');
         $this->form_validation->set_rules('inputCounty', 'Country', 'trim|max_length[13]');
         $this->form_validation->set_rules('inputDescription', 'Short Description', 'trim|max_length[100]');
         $this->form_validation->set_rules('checkbox1', 'Terms and Condition', 'required');


        if ($this->form_validation->run() == FALSE)
        {
          	$this->load->view('pages/register/index');
			$this->load->view('pages/register/ideator');
        }
        else
		{
			$datetime = date('Y-m-d H:i:s'); 		
			$userId = uniqid(); 
			$picId = uniqid('pi'); 
			$password=$this->input->post('inputPassword');
			$locationId = uniqid('li');

			$data = array(
			'userId' => $userId,
			'user_Type' =>	'Ideator',
			'user_dateRegistered' =>	$datetime,
			'user_emailAdd' => $this->input->post('inputEmail'),
			'user_password' => md5($password),
			'user_profilePicId' =>$picId,
			'user_status' =>'0'
			);

			$data1 = array(
			'userId' => $userId,
			'user_lName' => ucfirst(strtolower($this->input->post('inputLName'))),
			'user_fName' => ucfirst(strtolower($this->input->post('inputFName'))),
			'user_midInit' => strtoupper($this->input->post('inputMI')),
			'user_age' => $this->input->post('inputAge'),
			'user_gender' => $this->input->post('r3'),
			'user_shortSelfDescription' => $this->input->post('inputDescription'),
			);

			$data2 = array(
			'locationId' => $locationId,
			'userId' => $userId,
			'location_address1' => $this->input->post('inputAdress1'),
			'location_address2' => $this->input->post('inputAdress2'),
			'location_city' => $this->input->post('inputCity'),
			'location_prov' => $this->input->post('inputRegion'),
			'location_zipcode' => $this->input->post('inputZIP'),
			'location_country' => ucfirst(strtolower($this->input->post('inputCounty'))),
			);

			$data3 = array(
			'avatar_Id' => $picId,
			'userId' => $userId,
			'avatar_name' => '1.png',
			);

			$this->db->insert('user_md', $data);
			$this->db->insert('user_dtl', $data1);
			$this->db->insert('location_dtl', $data2);
			$this->db->insert('avatar_dtl', $data3);
			$this->index();
        }
	}
	#MAO NI ANG VALIDATION UG INSERTION PARA SA INVESTOR NGA USERS
	public function _validationInvestor()
	{
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha|max_length[2]');
         $this->form_validation->set_rules('inputAge', 'Age', 'required|numeric|greater_than[8]|less_than[110]');
         $this->form_validation->set_rules('r3', 'Gender', 'required');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]|max_length[50]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required|max_length[40]');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]|max_length[40]');
         $this->form_validation->set_rules('inputAdress1', 'Address1', 'trim|max_length[255]');
         $this->form_validation->set_rules('inputAdress2', 'Address2', 'trim|max_length[255]');
         $this->form_validation->set_rules('inputCity', 'City', 'trim|max_length[30]');
         $this->form_validation->set_rules('inputRegion', 'Region/State', 'trim|max_length[45]');
         $this->form_validation->set_rules('inputZIP', 'Zip Code', 'alpha_numeric|max_length[10]');
         $this->form_validation->set_rules('inputCounty', 'Country', 'trim|max_length[13]');
         $this->form_validation->set_rules('inputBusiness', 'Business Name', 'trim|max_length[45]');
         $this->form_validation->set_rules('inputBusinessType', 'Business Type', 'trim|max_length[15]');
         $this->form_validation->set_rules('inputDescription', 'Short Description', 'trim|max_length[100]');
         $this->form_validation->set_rules('checkbox1', 'Terms and Condition', 'required');


        if ($this->form_validation->run() == FALSE)
        {
          	$this->load->view('pages/register/index');
			$this->load->view('pages/register/Investor');
        }
        else
		{
			$datetime = date('Y-m-d H:i:s'); 
			$userId = uniqid(); 
			$picId = uniqid('pi'); 
			$password=$this->input->post('inputPassword');
			$locationId = uniqid('li');

			$data = array(
			'userId' => $userId,
			'user_Type' =>	'Investor',
			'user_dateRegistered' =>	$datetime,
			'user_emailAdd' => $this->input->post('inputEmail'),
			'user_password' => md5($password),
			'user_profilePicId' =>$picId,
			'user_status' =>'0'
			);

			$data1 = array(
			'userId' => $userId,
			'user_lName' => ucfirst(strtolower($this->input->post('inputLName'))),
			'user_fName' => ucfirst(strtolower($this->input->post('inputFName'))),
			'user_midInit' => strtoupper($this->input->post('inputMI')),
			'user_age' => $this->input->post('inputAge'),
			'user_gender' => $this->input->post('r3'),
			'user_shortSelfDescription' => $this->input->post('inputDescription'),
			'user_nameOfBusiness' => $this->input->post('inputBusiness'),
			'user_businessType' => $this->input->post('inputBusinessType'),
			'user_shortSelfDescription' => $this->input->post('inputDescription'),
			);

			$data2 = array(
			'locationId' => $locationId,
			'userId' => $userId,
			'location_address1' => $this->input->post('inputAdress1'),
			'location_address2' => $this->input->post('inputAdress2'),
			'location_city' => $this->input->post('inputCity'),
			'location_prov' => $this->input->post('inputRegion'),
			'location_zipcode' => $this->input->post('inputZIP'),
			'location_country' => $this->input->post('inputCounty'),
			);

			$data3 = array(
			'avatar_id' => $picId,
			'userId' => $userId,
			'avatar_name' => '1.png',
			);

			$this->db->insert('user_md', $data);
			$this->db->insert('user_dtl', $data1);
			$this->db->insert('location_dtl', $data2);
			$this->db->insert('avatar_dtl', $data3);
			$this->index();
        }
	}
	#MAO NI ANG VALIDATION UG INSERTION PARA SA COMPANY NGA USERS
	public function _validationCompany()
	{
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha|max_length[2]');
         $this->form_validation->set_rules('inputCName', 'Company Name', 'required|trim|min_length[1]|max_length[30]');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]');
         $this->form_validation->set_rules('inputBusinessType', 'business Type', 'trim|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputYear', 'Year Founded', 'trim|alpha_numeric_spaces|min_length[4]|max_length[4]');
         $this->form_validation->set_rules('inputDescription', 'Short Business Description', 'trim|alpha_numeric_spaces|max_length[255]');
         $this->form_validation->set_rules('checkbox1', 'Terms and Condition', 'required');


        if ($this->form_validation->run() == FALSE)
        {
          	$this->load->view('pages/register/index');
			$this->load->view('pages/register/Company');
        }
        else
		{
			$datetime = date('Y-m-d H:i:s'); 
			$userId = uniqid(); 
			$picId = uniqid('pi'); 
			$password=$this->input->post('inputPassword');
			$locationId = uniqid('li');

			$data = array(
			'userId' => $userId,
			'user_Type' =>	'Company',
			'user_dateRegistered' =>	$datetime,
			'user_emailAdd' => $this->input->post('inputEmail'),
			'user_password' => md5($password),
			'user_profilePicId' =>$picId,
			'user_status' =>'0'
			);

			$data1 = array(
			'userId' => $userId,
			'company_lName' => ucfirst(strtolower($this->input->post('inputLName'))),
			'company_fName' => ucfirst(strtolower($this->input->post('inputFName'))),
			'company_midInit' => strtolower($this->input->post('inputMI')),
			'company_yearFounded' => $this->input->post('inputYear'),
			'company_name' => ucfirst(strtolower($this->input->post('inputCName'))),
			'company_businessType' => $this->input->post('inputBusinessType'),
			'company_about' => $this->input->post('inputDescription'),
			);

			$data3 = array(
			'avatar_id' => $picId,
			'userId' => $userId,
			'avatar_name' => '1.png',
			);

			$this->db->insert('user_md', $data);
			$this->db->insert('company_dtl', $data1);
			$this->db->insert('avatar_dtl', $data3);
			$this->index();
        }
	}
	public function messageProfile()
              {
                $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->post();
                }
                else
                {
                	$post=$this->input->post('submit');
                	$userId=$this->input->post('userId');
                	if(!isset($post))
					{
						$this->load->view('pages/profile/index');
					}
	                else
	                {
	                   $datetime = date('Y-m-d H:i:s'); 
	                   $msgId = uniqid('mi');
	                    
	                   $data = array(
	                  'msgId' => $msgId,
	                  'msg_Content' =>$this->input->post('inputDescription'),
	                  'msg_fromUserId' => $this->session->userdata('userId'),
	                  'userId' => $userId,
	                  'msg_Date' =>$datetime
	                  );
	                  $this->db->insert('msg_dtl', $data);
	                   redirect('pages/profile/'.$userId);
	               	}
                }
              }
	public function postIdea()
	{	
		 $this->form_validation->set_rules('ideatitle', 'Title', 'required|trim');
         $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
         $this->form_validation->set_rules('relatedlinks', 'Links', 'trim');
         if ($this->form_validation->run() == FALSE)
        {
         	$this->profile($this->session->userdata('userId'));
        }
        else
		{	
			$url = $this->do_upload();

     	 	$datetime = date('Y-m-d H:i:s'); 
     	 	$postId = uniqid();
     	 	
     	 	$data = array(
			'postId' => $postId,
			'postTitle' =>	$this->input->post('ideatitle'),
			'postContent' =>$this->input->post('inputDescription'),
			'postType' => '1',
			'userId' => $this->session->userdata('userId'),
			'postDate' =>$datetime
			);

			$this->post->link($this->input->post('relatedlinks'), '2',$postId);
			if($url==null){
					$this->db->insert('userpost', $data);
				header('Location:'.base_url().'pages/profile/'.$this->session->userdata('userId'));

			}else{
			$this->post->image($url, '1',$postId);
			
			$this->db->insert('userpost', $data);
			header('Location:'.base_url().'pages/profile/'.$this->session->userdata('userId'));
			}

		}
			
	}
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./post_image/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
	}
	public function showComment()
	{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';

		$query=$this->post->alluserData($userId);
		$data['alldata']=$query->result_array();
		$this->load->view('pages/post/comment',$data);
	}

	public function comment($postId)
	{
		 $this->form_validation->set_rules('commentContent', 'Comment', 'required|trim');
 
         if ($this->form_validation->run() == FALSE)
        {
         	$this->post();
        }
        else
		{
     	 	$datetime = date('Y-m-d H:i:s'); 
     	 	$commentId = uniqid();
     	 	$data = array(
			'commentId' => $commentId,
			'commentContent' =>$this->input->post('commentContent'),
			'commentType' =>'1',
			'postId' =>$postId,
			'userId' => $this->session->userdata('userId'),
			'commentDate' =>$datetime
			);

			$this->db->insert('comment_dtl', $data);
			header('Location:'.base_url().'pages/post/'.$postId);		
		}
	}


	#THIS SECTION IS FOR GROUP SECTION
	public function countGroups(){
		$this->db->select('groupId');
		$this->db->from('group_ext');
		$this->db->where('userId',$this->session->userdata('userId'));
		$num_results=$this->db->count_all_results();

		return $num_results;
	}

	public function createGroup(){
		$this->form_validation->set_rules('inputGroupName', 'Group Name', 'required');
		$this->form_validation->set_rules('inputDescription', 'Group Description', 'trim');

		if ($this->form_validation->run()==FALSE){
			$this->group();
		}else{
			$groupId = uniqid('gi');

			$data = array (
			'groupId' => $groupId,
				'groupname' => $this->input->post('inputGroupName'),
				'groupdescription'=> $this->input->post('inputDescription'),
				'groupCoverPic' =>'defaultcover.png',
				'userId' => $this->session->userdata('userId'),
			);

			$data2 = array(
				'groupId' => $groupId,
				'userId' => $this->session->userdata('userId'),
				'addedDate' => now(),
			);

			$this->db->insert('group_md',$data);
			$this->db->insert('group_ext',$data2);

			$groupId = substr($groupId, 0,10);
			redirect('pages/group/'.$groupId);
		}
	}

	public function groupdetails(){
		$this->db->select('*');
		$this->db->from('group_md a');
		$this->db->join('group_ext b','b.groupId=a.groupId','left');
		$this->db->where('b.userId',$this->session->userdata('userId'));
		$query=$this->db->get();

		return $query;
	}

	public function addproject(){
		$this->form_validation->set_rules('inputProjectName', 'Project Name', 'required');
		$this->form_validation->set_rules('inputDescription', 'Project Description', 'trim');

		if ($this->form_validation->run()==FALSE){
			$this->group($this->input->post('groupid'));
		}else{
			$projId = uniqid('pr');

			$data = array(
				'postId' => $projId,
				'postTitle' => $this->input->post('inputProjectName'),
				'postContent' => $this->input->post('inputDescription'),
				'postType' => $this->input->post('groupid'),
				'userId' => $this->session->userdata('userId')
			);

			$this->db->insert('userpost',$data);
			#$this->db->where('userId',$this->session->userdata('userId'));
			$this->group($this->input->post('groupid'));
		}
	}


	public function projectdtl($groupid,$projectId){
		$this->db->select('*');
		$this->db->from('userpost');
		$this->db->where('postType',$groupid);
		$this->db->where('postId',$projectId);
		$query=$this->db->get();

		return $query;
	}

	public function allproject($groupid){
		$this->db->select('*');
		$this->db->from('userpost');
		$this->db->where('postType',$groupid);
		$query=$this->db->get();

		return $query;
	}

	public function _searchpeople(){
		$this->db->select('*');
		$this->db->from('user_dtl');
		$this->db->like('user_fName',$this->input->post('txtsearch'),'both');
		$this->db->or_like('user_lName',$this->input->post('txtsearch'),'both');
		$query=$this->db->get();

		return $query;
	}

	

	public function memberinfo($groupid){
		$this->db->select('*');
		$this->db->from('group_ext a');
		$this->db->join('avatar_dtl b', 'a.userId=b.userId','left');
		$this->db->join('badge_dtl c', 'a.userId=c.userId', 'left');
		$this->db->join('user_dtl e', 'a.userId=e.userId', 'left');
		$this->db->where('a.groupId',$groupid);
		$query=$this->db->get();

		return $query;
	}

	public function addmember(){
		$data = array(
				'groupId' => $this->input->post('groupid'),
				'userId' => $this->input->post('userid')
			);

		$this->db->insert('group_ext',$data);
		$this->group( $this->input->post('groupid'));
	}

	public function badge()
	{ 
		if(($this->session->userdata('userId')==""))
		{
			$this->load->view('pages/profile/index');
		}
		else
		{	
			$post=$this->input->post('btnRate');
			$userId=$this->input->post('userId');
			if(!isset($post))
			{
				$this->load->view('pages/profile/index');
			}
			else if($post=='gold')
			{
				
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '1'
				);

				$this->db->insert('badge_dtl', $data);
				header('Location:'.base_url().'pages/profile/'.$userId);		
			}
			else if($post=='silver')
			{
			
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '2'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profile/'.$userId);
			}
			else if($post=='bronze')
			{
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '3'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profile/'.$userId);
			}
			elseif ($post=='black') 
			{
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '4'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profile/'.$userId);
			}
		
			else{
				$this->load->view('pages/profile/index');
				}
		}
	}	

	public function showpost()
	{
		$query = $this->post->alluserData($userId)
;
		foreach ($query->result_array() as $postdtl) {
			echo "
			<div class='box box-widget'>
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='../../images/team/index2.jpg' alt='user image'>
                    <span class='username'>
                    <a href='#'>";

                                  if($postdtl['user_Type']=='Ideator'||$postdtl['user_Type']=='Investor')
                                  {
                                      if($postdtl['user_midInit']==null)
                                         echo $postdtl['user_fName']."  ".$postdtl['user_lName'];
                                       else
                                         echo $postdtl['user_fName']." ".$postdtl['user_midInit'].". ".$postdtl['user_lName'];
                                  }
                                  else
                                  {
                                    echo $postdtl['company_name'];
                                  }
                        
            echo "</a></span>
                    &nbsp;&nbsp;&nbsp;<button class='btn btn-default btn-xs'><i class='fa fa-star' style='color:Gold'></i> <span class='label label-primary'>10</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style='color:Silver'></i><span class='label label-primary'>5</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style='color:SandyBrown'></i><span class='label label-primary'>20</span> </button>
                   <span class='description'>Posted - 7:30 PM Today</span>
                  </div><!-- /.user-block -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <p>";
				 echo $postdtl['postContent'];
				  $postId = $postdtl['postId'];
             echo "</p>
             	<table>
            		  <tr><td><button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button></td>
             	  <form method='post' action='".base_url()."pages/upvote'>
             	  <input type=text hidden='true' value='$postId' name='postId'>
                  ";

                  if($this->validUpvote($postId)=='false'){
            	  echo "<td><button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button> </td></form>";
            	 }
            	  else{
            	   	echo "<td><button class='btn btn-default btn-xs disabled' disabled><i class='fa fa-arrow-circle-up'></i> Upvoted</button></td></form>";
            	  }

                echo "</table>
                  <span class='pull-right text-muted'>";
                
                  $this->post->upvotecount($postId);
                 
            echo "</span>
                </div><!-- /.box-body -->
               
                
              </div><!-- /.box -->";
             

		}

	
	}
	public function upvote($userId)
	{

		$this->form_validation->set_rules('postId', 'Post Id', 'callback_postIdCheck');
		if ($this->form_validation->run()==FALSE){
			$this->profile($userId);
		}else{
			if($this->input->post('postId')!=''){
			$data = array(
					'voteStat' => '1',
					'voteType' => '1',
					'postId' => $this->input->post('postId'),
					'userId' => $this->session->userdata('userId'),
					'voteId' =>uniqid()
				);

				$this->db->insert('upvote_dtl',$data);
				$this->profile($userId);
			}
			else {$this->index();}
			
		}
	}
	public function postIdCheck($str)
	{	
		$isCheck=false;
		$this->db->where('postId', $str);
		$this->db->where('userId', $this->session->userdata('userId'));
		$query = $this->db->get('upvote_dtl');
		
		if($query->num_rows()>=1)
		{
			$isCheck = true;
		}
		
		if ($isCheck==true)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function search()
	{	
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='search';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();

		if($this->input->post('key')==null){
			$idea= $this->post->searchIdea('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['idea'] = $idea->result_array();
			$group= $this->post->searchGroup('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['group'] = $group->result_array();
			$people= $this->post->searchPeople('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['people'] = $people->result_array();

		}else{
		$idea= $this->post->searchIdea($this->input->post('key'));
		$data['idea'] = $idea->result_array();
		$group= $this->post->searchGroup($this->input->post('key'));
		$data['group'] = $group->result_array();
		$people= $this->post->searchPeople($this->input->post('key'));
		$data['people'] = $people->result_array();

		}


		
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/search/content',$data); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}
		else
		{
			$this->_landing();
		}
	}
		
	public function postGroup($groupid,$projectid)
	{	
         $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
         if ($this->form_validation->run() == FALSE)
        {
         	$this->profile($this->session->userdata('userId'));
        }
        else
		{	
			$url = $this->file_upload();

     	 	$datetime = date('Y-m-d H:i:s'); 
     	 	$postId = uniqid('gp');
     	 	
     	 	$data = array(
			'postId' => $postId,
			'postContent' =>$this->input->post('inputDescription'),
			'postType' => $projectid,
			'userId' => $this->session->userdata('userId'),
			'postDate' =>$datetime
			);

			if($url==null){
				$this->db->insert('userpost', $data);
				header('Location:'.base_url().'pages/group/'.$groupid.'/'.$projectid);
			}else{
				$this->post->file($url,'3',$postId);
				
				$this->db->insert('userpost', $data);
				header('Location:'.base_url().'pages/group/'.$groupid.'/'.$projectid);
			}
		}	
	}
	private function file_upload()
	{
		$type = explode('.', $_FILES["file"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./post_files/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("txt", "docx")))
			if(is_uploaded_file($_FILES["file"]["tmp_name"]))
				if(move_uploaded_file($_FILES["file"]["tmp_name"],$url)){
					return $url;
				}
		return "";
	}


	public function projectfiles($projectid){
		$this->db->select('*');
		$this->db->from('userpost a');
		$this->db->join('userpost_ext b','a.postId=b.postId','left');
		$this->db->join('user_md c','c.userId=a.userId','left');
		$this->db->join('user_dtl d','d.userId=c.userId','left');
		$this->db->join('avatar_dtl e','e.userId=d.userId','left');
		$this->db->join('badge_dtl f','f.userId=e.userId','left');
		$this->db->join('company_dtl g','g.userId=f.userId','left');
		$this->db->where('postType',$projectid);
		$this->db->order_by('postDate', 'DESC');
        $query = $this->db->get();

        return $query;
	}

	public function countgroupfiles(){
		
	}


	public function message($msgId=null)
	{
		if(($this->session->userdata('userId')!=""))
		{	
			if(isset($msgId))
			{	
				$data['msgId'] = $msgId;

			}else
			{
				$data['msgId'] = $this->post->firstMsg($msgId);
			}
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='message';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/message/newcontent'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}

}
