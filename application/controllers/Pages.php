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
		$data['countgroup'] = $this->countgrp();
		$groupquery= $this->groupdetails();
		$data['alldata']=$query->result_array();
		$data['groupdetails'] = $groupquery->result_array();
		$feed = $this->post->recentideator();
		$data['recentideator'] = $feed->result_array();
		$feed = $this->post->recentinvestor();
		$data['recentinvestor'] = $feed->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		if($this->post->checkNewInvestor()){
			$this->load->view('pages/investorreg/content',$data);
		}
		else{
			$this->load->view('pages/dashboard/content',$data);
		}
	
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
		$data['pages']='startup';
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
		$data['pages']='startup';
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
		$data['pages']='startup';
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


		}



		
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

	public function investorlanding(){
		if(($this->session->userdata('userId')!="")){
			$query=$this->_userData();
			$data['data']=$query->result_array();
			$data['pages']='investorlanding';
			$feed = $this->post->recentideator();
			$feed = $this->post->recentideator();
			$data['recentideator'] = $feed->result_array();
			$feed = $this->post->recentinvestor();
			$data['recentinvestor'] = $feed->result_array();
			$data['alldata']=$query->result_array();
			$this->load->view('pages/investorreg/collapsed',$data);
			$this->load->view('pages/investorreg/content',$data);
		}else{
			$this->_landing();
		}
	}

	public function investormoreinfo(){
		if(($this->session->userdata('userId')!="")){
			$query=$this->_userData();
			$data['data']=$query->result_array();
			$data['pages']='investormoreinfo';
			$feed = $this->post->recentideator();
			$data['recentideator'] = $feed->result_array();
			$feed = $this->post->recentinvestor();
			$data['recentinvestor'] = $feed->result_array();	
			$feed = $this->post->recentinvestor();
			$data['alldata']=$query->result_array();

			$data['countgroup'] = $this->countGroups();
			$groupquery= $this->groupdetails();
			$data['groupdetails'] = $groupquery->result_array();

		
			$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/investorreg/fillinvestorinfo',$data);
			$this->load->view('pages/dashboard/controlsidebar');
			$this->load->view('pages/dashboard/end');
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
					header('Location:'.base_url().'pages/pagenotfound');

				}else{
					$query=$this->post->alluserData($this->session->userdata('userId'));
					$data['alldata']=$query->result_array();
					$query=$this->projectfiles($projectId);
					$data['projfile']=$query->result_array();
					$allproject= $this->allproject($groupId);
					$countfiles=$this->countgroupfiles($groupId);
					$data['countfiles']=$countfiles->result_array();
					$data['allproject'] = $allproject->result_array();
					$data['groupDtl'] = $groupDetails->result_array();
					$memberinfo= $this->memberinfo($groupId);
					$data['memberinfo'] = $memberinfo->result_array();
					$investorinfo= $this->investorinfo($projectId);
					$data['investorinfo'] = $investorinfo->result_array();
					$search= $this->_searchpeople();
					$data['searchpeople'] = $search->result_array();
					$searchinvestor= $this->_searchinvestor();
					$data['searchinvestor'] = $searchinvestor->result_array();
					if(isset($projectId)){
						$projectdtl= $this->projectdtl($groupId,$projectId);
						$data['projectdtl'] = $projectdtl->result_array();
						$data['projectId'] = $projectId;

					}else{
						$data['projectId'] = '0';
						$allproject= $this->allproject($groupId);

						$projectdtl= $this->projectdtl($groupId,$this->post->firstProject($groupId));
						$data['projectdtl'] = $projectdtl->result_array();

					}
					
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

	public function pagenotfound()

	{
			if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='nogroup';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();

		
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/group/nogroup',$data); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}
		else
		{
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

					$this->pagenotfound();
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
				$data['postId']= $postId;

				if($postdtlquery->num_rows()==0) {
				$this->pagenotfound();
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
	public function updateAccount()
	{	
		if(($this->session->userdata('userId')!=""))
		{
		
			
			$post=$this->input->post('btnSave');
			if(!isset($post))
			{
				$this->load->view('pages/profile/index');
			}
			else if($post=='Ideator' || $post=='Investor')
			{
				$this->_changeIdeator();
			}
			else if($post=='Company')
			{
				$this->_changeCompany();
			}

		}
		
	}
	public function _changeIdeator()
	{
		$userId = $this->session->userdata('userId');
		$inputDescription = implode(', ', $this->input->post('inputDescription[]'));
	
		$data = array(
			'user_lName' => ucfirst(strtolower($this->input->post('inputLName'))),
			'user_fName' => ucfirst(strtolower($this->input->post('inputFName'))),
			'user_midInit' => strtoupper($this->input->post('inputMI')),
			'user_age' => $this->input->post('inputAge'),
			'user_shortSelfDescription' => $this->input->post('inputDescription[]'),
			);
		$data1 = array(
			'location_address1' => $this->input->post('inputAddress1'),
			'location_city' => $this->input->post('inputCity'),
			'location_country' => $this->input->post('inputCountry'),
			);

		$this->db->where('userId', $userId);
		$this->db->update('user_dtl', $data);
		$this->db->update('location_dtl', $data1);
		redirect('pages/profile');
		
	}
	public function _changeCompany()
	{
		$userId = $this->session->userdata('userId');

		$data = array(
			'company_lName' => ucfirst(strtolower($this->input->post('inputLName'))),
			'company_fName' => ucfirst(strtolower($this->input->post('inputFName'))),
			'company_midInit' => strtoupper($this->input->post('inputMI')),
			'company_name' => $this->input->post('inputCName'),
			'company_businessType' => $this->input->post('inputBusinessType'),
			'company_yearFounded' => $this->input->post('inputYear'),
			'company_about' => $this->input->post('inputDescription'),
			);

		$this->db->where('userId', $userId);
		$this->db->update('company_dtl', $data);
		redirect('pages/profile');
	}
	public function updateProfile()
	{
		$userId = $this->session->userdata('userId');
		$post = $this->input->post('btnUpload');
		
		
		if(!isset($post))
		{
			$this->load->view('pages/profile/index');
		}
		else
		{	
			$url = $this->profile_upload();

			if($url==null){
				
				redirect('pages/profile/scz'.$userId);

			}
			else
			{
				$this->post->profilePic($url,$userId);
				
				redirect('pages/profile/'.$userId);
			}
		}
	}
	private function profile_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./user/".$url))
					return $url;
		return "";
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
			header('Location:'.base_url());

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
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|min_length[1]|max_length[30]');
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
         $this->form_validation->set_rules('inputDescription', 'Short Description', 'required|trim|max_length[100]');
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
			'user_status' =>'1'
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
			$data = array(
						'userId' =>  substr($userId,0,10)
						
					);
			$this->session->set_userdata($data);
			echo "<script>alert('Successfully Registered , Welcome".$this->input->post('inputLName')."');</script>";
			$this->index();
        }
	}
	#MAO NI ANG VALIDATION UG INSERTION PARA SA INVESTOR NGA USERS
	public function _validationInvestor()
	{
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|min_length[1]|max_length[30]');
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
			$data = array(
				'userId' =>  substr($userId,0,10)
				
			);
			$this->session->set_userdata($data);
			echo "<script>alert('Successfully Registered , Welcome".$this->input->post('inputLName')."');</script>";
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
			'user_status' =>'1'
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
				$data = array(
				'userId' =>  substr($userId,0,10)
				
			);
			$this->session->set_userdata($data);
			echo "<script>alert('Successfully Registered , Welcome ".ucfirst(strtolower($this->input->post('inputCName')))."!');</script>";
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
	                  'msg_Date' =>$datetime,
	                  'msg_status' => '1'
	                  );
	                  $this->db->insert('msg_dtl', $data);
	                   redirect('pages/profile/'.$userId);
	               	}
                }
              }

    public function submitcomment()
	{

		$datetime = date('Y-m-d H:i:s');
	
		
		$data = array(
		'reportId' => uniqid(),
	
		'reportContent' => $this->input->post('comments'),
		'reportDate' => $datetime,
		'reportStat' => '1',
		'reportType' => '1',
		'reportName' => $this->input->post('name'),
		'reportEmail' => $this->input->post('email')
		);

		$this->db->insert('report_dtl', $data);
		echo "Thank you for your feedback!";
	}

	public function postIdea()
	{	
		 $this->form_validation->set_rules('ideatitle', 'Title', 'required|trim');
         $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
         $this->form_validation->set_rules('relatedlinks', 'Links', 'trim');
         if ($this->form_validation->run() == FALSE)
        {
         	header('Location:'.base_url().'pages/ideatorpost/'.$this->session->userdata('userId'));

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


			if($url==null){

					$this->db->insert('userpost', $data);
				
			$this->post->link($this->input->post('relatedlinks'), '2',$postId);
				header('Location:'.base_url().'pages/ideatorpost/'.$this->session->userdata('userId'));

			}else{
			
			
			$this->db->insert('userpost', $data);
			$this->post->link($this->input->post('relatedlinks'), '2',$postId);
			
			$this->post->image($url, '1',substr($postId, 0,10));
			header('Location:'.base_url().'pages/ideatorpost/'.$this->session->userdata('userId'));
			}
		}
	}
	private function do_upload()
	{
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./post_image/".$url))
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
 		 $disallowed = array('hell','darn','shucks','golly','phooey','fuck','shit','bullshit', 'brainless','fool','asshole');
 		 
 		 // set_include_path(base_url().'/badwordlib');
 		 // $read = file_get_contents('badwords.txt', FILE_USE_INCLUDE_PATH);
 		 // $disallowed=explode(" ", $read);

         if ($this->form_validation->run() == FALSE)
        {
			header('Location:'.base_url().'pages/post/'.$postId);	
        }
        else
		{
			//----capture comment and detect bad words or disallowed words
			$countbad=0;
			$commentContent=$this->input->post('commentContent');
			$txtwords=explode(" ", $commentContent);

			
				for ($i=0; $i < sizeof($txtwords); $i++) { 
					for ($j=0; $j < sizeof($disallowed); $j++) { 
						if(strtolower($txtwords[$i])==$disallowed[$j])
							$countbad++;
					}
				}


     	 	$datetime = date('Y-m-d H:i:s'); 
     	 	$commentId = uniqid();
     	 	$data = array(
			'commentId' => $commentId,
			'commentContent' =>$this->input->post('commentContent'),
			'commentType' =>'1',
			'postId' =>$postId,
			'userId' => $this->session->userdata('userId'),
			'commentDate' =>$datetime,
			'disallowed'=>$countbad
			);

			$this->db->insert('comment_dtl', $data);
			header('Location:'.base_url().'pages/post/'.$postId);		
		}
	}


	#THIS SECTION IS FOR GROUP SECTION
	public function countGroups(){
		
		$this->db->select('*');
		$this->db->from('group_md a');
		$this->db->join('group_ext b','b.groupId=a.groupId','left');
		$this->db->where('b.userId',$this->session->userdata('userId'));
		$this->db->where('b.status','3');
		$query=$this->db->get();
		$num_results=$query->num_rows();
		return $num_results;
	}
	public function countgrp(){
		$this->db->select('*');
		$this->db->from('group_md a');
		$this->db->join('group_ext b','b.groupId=a.groupId','left');
		$this->db->where('b.userId',$this->session->userdata('userId'));
		$query=$this->db->get();
		$num_results=$query->num_rows();
		return $num_results;
	}

	public function createGroup(){

		$this->form_validation->set_rules('inputGroupName', 'Group Name', 'required|alpha_numeric_spaces|max_length[30]');
		$this->form_validation->set_rules('inputDescription', 'Group Description', 'trim|required|alpha_numeric_spaces|max_length[255]');

		if ($this->form_validation->run()==FALSE){
			$this->newgroup();
		}else{
			$groupId = uniqid('gi');
	
			$data = array (
			'groupId' => $groupId,
				'groupname' =>html_escape($this->input->post('inputGroupName')),
				'groupdescription'=> $this->input->post('inputDescription'),
				'groupCoverPic' =>'defaultcover.png',
				'userId' => $this->session->userdata('userId'),
			);

			$data2 = array(
				'groupId' => $groupId,
				'userId' => $this->session->userdata('userId'),
				'addedDate' => now(),
				'status' => '3',
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
			#$this->group($this->input->post('groupid'));
			header('Location:'.base_url().'pages/group/'.$this->input->post('groupid').'/'.$projId);
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
		$this->db->select('a.userId,b.user_lName,b.user_fName,b.user_midInit,c.company_name,a.user_Type');
		$this->db->from('user_md a');
		$this->db->join('company_dtl c','c.userId=a.userId','left');
		$this->db->join('user_dtl b','a.userId=b.userId','left');
		$this->db->like('user_fName',$this->input->post('txtsearch'),'both');
		$this->db->or_like('user_lName',$this->input->post('txtsearch'),'both');
		$this->db->or_like('company_name',$this->input->post('txtsearch'),'both');
		$query=$this->db->get();

		return $query;
	}

	
	public function _searchinvestor(){
		$this->db->select('*');
		$this->db->from('user_md a');
		$this->db->join('user_dtl b','a.userId=b.userId','left');
		$this->db->like('user_fName',$this->input->post('txtsearchinvestor'),'both');
		$this->db->or_like('user_lName',$this->input->post('txtsearchinvestor'),'both');
		$query=$this->db->get();

		return $query;
	}
	public function memberinfo($groupid){
		$this->db->select('*');
		$this->db->from('group_ext');
		$this->db->where('groupId',$groupid);
		$this->db->where('status','3');
		$query=$this->db->get();

		return $query;
	}

	public function investorinfo($projectid){
		$this->db->select('*');
		$this->db->from('investor_dtl a');
		$this->db->join('avatar_dtl b', 'a.userId=b.userId','left');
		$this->db->join('badge_dtl c', 'a.userId=c.userId', 'left');
		$this->db->join('user_dtl e', 'a.userId=e.userId', 'left');
		$this->db->where('a.postId',$projectid);
		$query=$this->db->get();

		return $query;
	}

	public function requestjoingroup($key=null){
		$data = array(
			'groupid' => $this->input->post('groupid'),
			'userid' => $this->input->post('userid'),
			'status' => '2'
		);
		$this->db->insert('group_ext',$data);
		header('Location:'.base_url().'pages/search/'.$key);
	}

	public function memberinvite()
	{
		$data = array(
			'groupid' => $this->input->post('groupid'),
			'userid' => $this->input->post('userid'),
			'status' => '1'
		);
		$this->db->insert('group_ext',$data);
		header('Location:'.base_url().'pages/group/'.$this->input->post('groupid'));
	}
	
	public function addmember(){
		$groupid = $this->input->post('groupid');
		$userid = $this->input->post('userid');

		$this->db->select('*');
		$this->db->from('group_ext');
		$this->db->where('groupId',$groupid);
		$this->db->where('userId',$userid);
		if(isset($_POST['btnAccept'])){
			$data = array(
					'status' => '0'
				);

			$this->db->update('group_ext',$data);
			header('Location:'.base_url().'pages/group/'.$this->input->post('groupid'));
		}elseif(isset($_POST['btnDecline'])){

			$this->db->delete('group_ext');
			header('Location:'.base_url().'pages/profile/'.$this->input->post('userId'));
		}
	}

	public function addinvestor(){
		$data = array(
				'postId' => $this->input->post('projectid'),
				'userId' => $this->input->post('userid')
			);
		
		$this->db->insert('investor_dtl',$data);
		header('Location:'.base_url().'pages/group/'.$this->input->post('groupid').'/'.$this->input->post('projectid'));
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
				header('Location:'.base_url().'pages/profilenew/'.$userId);		
			}
			else if($post=='silver')
			{
			
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '2'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profilenew/'.$userId);
			}
			else if($post=='bronze')
			{
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '3'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profilenew/'.$userId);
			}
			elseif ($post=='black') 
			{
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$this->session->userdata('userId'),
				'voteBadge' => '4'
				);

				$this->db->insert('badge_dtl', $data);
			
				header('Location:'.base_url().'pages/profilenew/'.$userId);
			}
		
			else{
				$this->load->view('pages/profile/index');
				}
		}
	}	

	public function showpost($userId)
	{
			 foreach($this->post->profile($userId)->result_array() as $userdtl):
	         foreach($this->post->alluserData($userId)->result_array() as $postdtl):

	          echo '<div class="row">
	          
	            <div class="col-md-12">
	            <!-- Box Comment -->
	              <div class="box box-widget">
	                <div class="box-header with-border">
	                  <div class="user-block">
	                    <img class="img-circle" src="'.base_url()."user/".$postdtl["avatar_name"].'"><span class="username">';
	                    echo '<a href="'.base_url()."pages/profile/".$postdtl['userId'].'">';
	                       
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
	                         
	                      echo '</a>
	                      </span>
	                    &nbsp;&nbsp;&nbsp;';
	                  $gold=$this->post->gold($userId);
	                  $silver=$this->post->silver($userId);
	                  $bronze=$this->post->gold($userId);
	                 if($gold==0 && $silver==0 && $bronze==0)
	                 {
	                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
	                 }
	                 elseif ($gold>=$silver && $gold>=$bronze) 
	                 {
	                     echo '<i class="fa fa-star" style="color:Gold"></i>';  
	                 } 
	                 elseif ($silver>$gold && $silver>=$bronze)
	                 {
	                     echo '<i class="fa fa-star" style="color:Silver"></i>';
	                 }
	                 elseif ($bronze>$gold && $bronze>$silver)
	                 {
	                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
	                 }
	                   
	                
	                  echo "<span class='description'>";    
	                  echo $postdtl['postDate'];
	                  echo "</span>
	                  </div><!-- /.user-block -->
	                  
	                </div><!-- /.box-header -->
	                <div class='box-body'>
	                  <h5><b><a href=".base_url()."pages/post/".$postdtl['postId'].'>';
	                  echo $postdtl['postTitle'];
	                  echo "</a></b></h3>
	                  <p>";
	                      $query=$this->post->showImage($postdtl['postId']);
	                      foreach ($query->result_array() as $row) {
	                        echo "<img src='".base_url().'/post_image/'.$row['extContent']."' height='200px' width='200px'>"; 
	                      }
	                   echo"
	                  </p>

	                  <p><h5>";
	                  echo $postdtl['postContent'];

	                  echo"</h5></p>
	                  <p>";
	                    
	                      $query=$this->post->showLinks($postdtl['postId']);

	                      foreach ($query->result_array() as $row) {
	                        echo "<h5>Related Links:</h5>";
	                        $myArray = explode(',', $row['extContent']);
	                           foreach ($myArray as $row) {
	                            
	                            echo "<a href='http://".$row."' target='_blank'>".$row."</a><br>"; 
	                            }
	                      }
	                    
	                  echo '</p>
	                  <a href="'.base_url().'pages/post/'.$postdtl['postId'].'" class="uppercase">View this Post</a>
	                  ';
	                  echo "
	                 
	                
	                
	                  <span class='pull-right text-muted'>"; $this->post->upvotecount($postdtl['postId']); echo '-'; $this->post->commentCount($postdtl['postId']);echo'</span>
	                </div><!-- /.box-body -->
	               

	                          
	            
	                  </div>';

				endforeach;

				endforeach;

				echo " </div></div><script src='http://code.jquery.com/jquery-1.9.1.js'></script>";

	
	}
	public function upvote()
	{

		$this->form_validation->set_rules('postId', 'Post Id', 'callback_postIdCheck');
		if ($this->form_validation->run()==FALSE){
			
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
				header('Location:'.base_url().'pages/post/'.$this->input->post('postId'));
			}
			else {$this->index();}
			
		}
	}
	public function markedexisting()
	{
			if($this->input->post('postId')!=''){
			$data = array(
					'extId' =>uniqid(),
					'extContent' => $this->session->userdata('userId'),
					'extType' => '8',
					'postId'=> $this->input->post('postId')
				);

				$this->db->insert('userpost_ext',$data);
				header('Location:'.base_url().'pages/post/'.$this->input->post('postId'));
			}
			else {$this->index();}
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
	public function search($key=null)
	{	
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='search';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$data['key']=$key;
		if($key==null){
			$idea= $this->post->searchIdea('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['idea'] = $idea->result_array();
			$group= $this->post->searchGroup('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['group'] = $group->result_array();
			$people= $this->post->searchPeople('asdsdwq1qweskdqw213ew9eqwek12ewe91ewkqe212945rfre544e331e23d32d!#$2');
			$data['people'] = $people->result_array();

		}else{
		$idea= $this->post->searchIdea($key);
		$data['idea'] = $idea->result_array();
		$group= $this->post->searchGroup($key);
		$data['group'] = $group->result_array();
		$people= $this->post->searchPeople($key);
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
		
	public function search_proxy() {
   	 $search_query = $this->input->post('key');
    // if needed urlencode or other search query manipulation
    	redirect('pages/search/'.$search_query);
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
				
				
				$this->db->insert('userpost', $data);
				$this->post->file($url,'3',$postId);
				header('Location:'.base_url().'pages/group/'.$groupid.'/'.$projectid);
			}
		}	
	}
	private function file_upload()
	{
		$type = explode('.', $_FILES["file"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = uniqid(rand()).'.'.$type;
		if(in_array($type, array("txt", "docx")))
			if(is_uploaded_file($_FILES["file"]["tmp_name"]))
				if(move_uploaded_file($_FILES["file"]["tmp_name"],"./post_files/".$url)){
					return $url;
				}
		return "";
	}


	// public function projectfiles($projectid){
	// 	$this->db->select('*');
	// 	$this->db->from('userpost a');
	// 	$this->db->join('userpost_ext b','a.postId=b.postId','left');
	// 	$this->db->join('user_md c','c.userId=a.userId','left');
	// 	$this->db->join('user_dtl d','d.userId=c.userId','left');
	// 	$this->db->join('avatar_dtl e','e.userId=d.userId','left');
	// 	$this->db->join('badge_dtl f','f.userId=e.userId','left');
	// 	$this->db->join('company_dtl g','g.userId=f.userId','left');
	// 	$this->db->where('extType','3');
	// 	$this->db->where('postType',$projectid);
	// 	$this->db->order_by('postDate', 'DESC');
 //        $query = $this->db->get();

 //        return $query;
	// }

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



	public function countgroupfiles($groupid){
		$this->db->distinct('c.extId');
		$this->db->from('userpost a');
		$this->db->join('userpost b','a.postId=b.postType','inner');
		$this->db->join('userpost_ext c','b.postId=c.postId','left');
		$this->db->where('a.postType',$groupid);
		$this->db->where('c.extType','3');
		$query = $this->db->get();

        return $query;
	}

	


	public function post1($postId=null)
	{	
			
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post1';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$data['alldata']=$query->result_array();
				$postdtlquery= $this->post->postdtl($postId);
				$data['postDetail'] = $postdtlquery->result_array();
				$comments= $this->post->showComments($postId,'1');
				$data['comments'] = $comments->result_array();				
				$data['postId'] =$postId;
			
				$this->load->view('pages/post1/collapsed',$data);
				$this->load->view('pages/post1/content',$data);

	}

	public function send()
	{
		if(($this->session->userdata('userId')!=""))
			{	
				$datetime = date('Y-m-d H:i:s'); 

				$data = array(
				'msgId' => $this->input->post('msgId'),
				'dateSent' =>$datetime,
				'userId' =>	$this->session->userdata('userId'),
				'msgContent' => $this->input->post('message')
				);

				$this->db->insert('conference_dtl', $data);
			}else
			{
				$this->_landing();
			}

	}



	public function groupchatshow($groupid)
	{
			

                   foreach($this->post->showMsg($groupid)->result_array() as $row):
                  
				if($this->post->checkUser($row['userId'])!='true')	{
                   echo ' <div class="direct-chat-msg">';
                    echo '  <div class="direct-chat-info clearfix">';
                      echo '  <span class="direct-chat-name pull-left">';
                      echo $this->post->userProfile($row['userId']);
                      echo '</span>
                        <span class="direct-chat-timestamp pull-right">';

                        echo $row['dateSent'];

                        echo '</span>
                      </div><!-- /.direct-chat-info -->
                       <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                        echo '<div class="direct-chat-text">';
                           echo $row['msgContent'];
                      echo '</div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->';
                }else{

                	echo '<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">';
                            echo $this->post->userProfile($row['userId']);
                        echo '   </span>
                            <span class="direct-chat-timestamp pull-left">';

                            echo $row['dateSent'];
                          echo '</span>
                          </div><!-- /.direct-chat-info -->
                         <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                       echo '<div class="direct-chat-text">';
                            echo $row['msgContent'];
                        echo '</div>
                        </div><!-- /.direct-chat-msg -->';
                }
                  endforeach;
	 }

	 function your_function($content){
    $this->load->helper('download');
    $data = file_get_contents(base_url().'post_files/'.$content); // Read the file's contents
    $name = $content;
    force_download($name, $data);
}
	

	public function mobile($userId)
	{
			$data = array(
					'userId' => $userId
					
			);
			$this->session->set_userdata($data);
			header('Location:'.base_url());
	}

	public function investorpost()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->post->checkUserType()=='false'){
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/investorpost/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
			}else
			{
				header('Location:'.base_url().'pages/pagenotfound');
			}
		}else
		{
			$this->_landing();
		}
	}
	public function showInvestorpost($userId)
	{
			 foreach($this->post->profile($userId)->result_array() as $userdtl):
	         foreach($this->post->postInvestor($userId)->result_array() as $postdtl):

	          echo '
	      		<div class="container">
		      		<div class="row">
		            	<div class="col-md-9">
	            		<!-- Box Comment -->
			              <div class="box box-widget">
			                <div class="box-header with-border">
			                  <div class="user-block">
			                    <img class="img-circle" src="'.base_url()."user/".$postdtl["avatar_name"].'"><span class="username">';
			                    echo '<a href="'.base_url()."pages/profile/".$postdtl['userId'].'">';
			                       
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
			                         
			                      echo '</a>
			                      </span>
					                    &nbsp;&nbsp;&nbsp;';

						                  $gold=$this->post->gold($userId);
						                  $silver=$this->post->silver($userId);
						                  $bronze=$this->post->gold($userId);
						                 if($gold==0 && $silver==0 && $bronze==0)
						                 {
						                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
						                 }
						                 elseif ($gold>=$silver && $gold>=$bronze) 
						                 {
						                     echo '<i class="fa fa-star" style="color:Gold"></i>';  
						                 } 
						                 elseif ($silver>$gold && $silver>=$bronze)
						                 {
						                     echo '<i class="fa fa-star" style="color:Silver"></i>';
						                 }
						                 elseif ($bronze>$gold && $bronze>$silver)
						                 {
						                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
						                 }
			                   
			                
			                  echo "<span class='description'>";    
			                  echo $postdtl['postDate'];
			                  echo "</span>
			                  </div><!-- /.user-block -->
	                		</div><!-- /.box-header -->
			                <div class='box-body'>
			                  <h5><b>
			                  		<a href=".base_url()."pages/investorPostSection/".$postdtl['postId'].'>';
			                  echo "</a></b></h5>
			                  <p>";
			                      $query=$this->post->showImage($postdtl['postId']);
			                      foreach ($query->result_array() as $row) {
			                        echo "<img src='".base_url().'/post_image/'.$row['extContent']."' height='200px' width='200px'>"; 
			                      }
			                   echo"
			                  </p>

			                  <p><h5>";
			                  echo $postdtl['postContent'];

			                  echo"</h5></p>
			                  <p>";
			                    
			                  
			                    
			                  echo '</p>
			                  <a href="'.base_url().'pages/investorPostSection/'.$postdtl['postId'].'" class="uppercase">View this Post</a>
			                  ';
			                  echo "<span class='pull-right text-muted'></div><!-- /.box-body -->
			               

	                          
	            
	                  </div></div>";

				endforeach;

				endforeach;

				echo " </div></div><script src='http://code.jquery.com/jquery-1.9.1.js'></script>";

	
	}
	
	public function newsfeedideator()
	{
		if(($this->session->userdata('userId')!=""))
		{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='newsfeedideator';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedideator();
				$data['investorpost'] = $feed->result_array();
				
			


				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/newsfeedideator/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}

	public function newsfeedinvestor($postId = null)
	{
		if(($this->session->userdata('userId')!=""))
		{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='newsfeedinvestor';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedinvestor();
				$data['ideatorpost'] = $feed->result_array();
				$postdtlquery= $this->post->postdtl($postId);		
				$data['postdtl']=$postdtlquery->result_array();
				

				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/newsfeedinvestor/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}


	public function getAll()
	{

	unset($_SESSION['poke']);
	$_SESSION['poke'] = $_POST['userId'];
		
	}
	public function investmentRequest()
	{

	unset($_SESSION['invest']);
	$_SESSION['invest'] = $_POST['postId'];
		
	}
	public function sessionpoke()
	{
		if($this->session->userdata('poke')==''){
			header('location:base_url()');
		}
		else{
	
		echo '
  <script src="'.base_url().'plugins/jQuery/jQuery-2.1.4.min.js"></script>

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="';echo base_url().'user/'.$this->post->getAvatar($this->session->userdata('poke')).'" alt="User profile picture">
                  <h3 class="profile-username text-center">'.$this->post->userProfile($this->session->userdata('poke')).'</h3>
                  <p class="text-muted text-center">'.$this->post->getUserType($this->session->userdata('poke')).'</p>
                  	  <br>
                 <a href="'.base_url().'pages/profilenew/'.$this->session->userdata('poke').'">view Profile</a>

                 
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              ';
              }
	}
	
	public function sessionInvestmentRequest()
	{	
		if($this->session->userdata('touser')==''){
			header('location:base_url()');
		}
		else{
	
		// echo '
		// 	<script src="'.base_url().'plugins/jQuery/jQuery-2.1.4.min.js"></script>
		// 		<h5 class="text-center"><b>Post ID: <span class="text-muted">&nbsp;&nbsp;'.$this->session->userdata('touser').'</span></b>
		// 		<br/><p class="text-muted text-center">'.$this->post->getPostTitle($_SESSION['duplicate']).'</p>
		// 		</h5>
  //             ';
              }
	}

	public function ideatorpost()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->post->checkUserType()=='true'){
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/ideatorpost/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
			}else
			{
				header('Location:'.base_url().'pages/pagenotfound');
			}
		}else
		{
			$this->_landing();
		}
	}

	public function startidea()
	{
		
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedinvestor();
				$data['ideatorpost'] = $feed->result_array();
				

				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/startidea/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		
		
	}

	public function showIdeatorPost($userId)
	{
			 foreach($this->post->profile($userId)->result_array() as $userdtl):
	         foreach($this->post->postIdeator($userId)->result_array() as $postdtl):

	          echo '
	      		<div class="container">
		      		<div class="row">
		            	<div class="col-md-8">
	            		<!-- Box Comment -->
			              <div class="box box-widget">
			                <div class="box-header with-border">
			                  <div class="user-block">
			                    <img class="img-circle" src="'.base_url()."user/".$this->post->getAvatar($postdtl['userId']).'"><span class="username">';
			                    echo '<a href="'.base_url()."pages/profile/".$postdtl['userId'].'">';
			                       echo $this->post->userProfile($postdtl['userId']);  
			                      echo '</a>
			                      </span>
					                    &nbsp;&nbsp;&nbsp;';

						                  $gold=$this->post->gold($userId);
						                  $silver=$this->post->silver($userId);
						                  $bronze=$this->post->gold($userId);
						                 if($gold==0 && $silver==0 && $bronze==0)
						                 {
						                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
						                 }
						                 elseif ($gold>=$silver && $gold>=$bronze) 
						                 {
						                     echo '<i class="fa fa-star" style="color:Gold"></i>';  
						                 } 
						                 elseif ($silver>$gold && $silver>=$bronze)
						                 {
						                     echo '<i class="fa fa-star" style="color:Silver"></i>';
						                 }
						                 elseif ($bronze>$gold && $bronze>$silver)
						                 {
						                     echo '<i class="fa fa-star" style="color:SandyBrown"></i>';
						                 }
			                   
			                
			                  echo "<span class='description'>";    
			                  echo $postdtl['postDate'];
			                  echo "</span>
			                  </div><!-- /.user-block -->
	                		</div><!-- /.box-header -->
			                <div class='box-body'>
			                  <h5><b>
			                  		<a href=".base_url()."pages/post/".$postdtl['postId'].'>';
			                  echo "</a></b></h5>
			                  <p>";
			                      $query=$this->post->showImage($postdtl['postId']);
			                      foreach ($query->result_array() as $row) {
			                        echo "<img src='".base_url().'/post_image/'.$row['extContent']."' height='200px' width='200px'>"; 
			                      }
			                   echo"
			                  </p>

			                  <p><h5>";
			                  echo '<b>'.$postdtl['postTitle'].'</b><br/><br/>';
			                  echo $postdtl['postContent'];
			                  if($postdtl['extContent']!=""){
			                  	echo '<h5>Related Links:</h5>'.$postdtl['extContent'];
			              	  }

			                  echo"</h5></p>
			                  <p>";
			                    
			                  echo '</p>
			                  <a href="'.base_url().'pages/post/'.$postdtl['postId'].'" class="uppercase">View this Post</a>
			                  ';
			                  echo "<span class='pull-right text-muted'>

			                  </div><!-- /.box-body -->
	                  </div><!-- /.box-widget -->
	                  </div><!--/.col-10-->";

				endforeach;
				endforeach;

				echo " </div></div><script src='http://code.jquery.com/jquery-1.9.1.js'></script>";

	
	}


	public function investorPostSection($postId = null)
	{
		if(($this->session->userdata('userId')!=""))
		{
			if(isset($postId))
			{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='post';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['alldata']=$query->result_array();
				$postdtlquery= $this->post->postdtl($postId);	
				$data['postId']=$postId;	
				$data['postdtl']=$postdtlquery->result_array();	

				if($postdtlquery->num_rows()==0) {
				$this->pagenotfound();
				}
				else{

						$this->load->view('pages/dashboard/fixed',$data);
						$this->load->view('pages/post/contentinvestor',$data); 
						$this->load->view('pages/dashboard/controlsidebar');
						$this->load->view('pages/dashboard/end');
				}


			}else
				$this->index();

			
		}else{
			$this->_landing();
		}
	}

	public function showInvestorComment($postId)
	{
		echo '   <div class="box-body">
                  <div class="box box-widget">
                
                    <div class="box-header with-border">
                      <div class="user-block">
                       
                        <img class="img-circle" src="">
                        <span class="username"><a href=""></a></span>
                         <span class="description"></span>
                      </div><!-- /.user-block -->
                      <div class="box-tools">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    
                    <br/>
                      <!-- Attachment -->
                    <div class="col-md-12">
                      <div class="attachment-block clearfix">
                     
                        <p></p>
                      </div><!-- /.attachment-block -->
                    </div>
                   
                      <!-- Social sharing buttons -->
                      
                      <span class="pull-right text-muted"></span>
                    </div><!-- /.box-body -->
                   
                  </div><!-- /.box -->
       
                </div><!--/.body-->      ';
	}
	public function admin()
	{
	
		if(($this->session->userdata('userId')!=""))
		{
			$query=$this->_userData();
			$data['data']=$query->result_array();
			$data['pages']='dashboard';

			$this->load->view('pages/admindashboard/fixed',$data);
			$this->load->view('pages/admindashboard/content'); 
			$this->load->view('pages/adminonline/end');
			
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
		$this->load->view('pages/admindashboard/fixed',$data);
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
		$data['pages']='userinfo';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminonline/content'); 
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
		$data['pages']='statistics';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/content'); 
		$this->load->view('pages/adminoverallreports/chartcontent'); 
		
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
		$data['pages']='reported';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/contentreported'); 
		}else{
			$this->_landing();
		}
	}

		public function adminPage5()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/allIdeas'); 
		
		}else{
			$this->_landing();
		}
	}
	public function admincomment($postId=null)
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['postId'] = $postId;
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/comment'); 
		
		}else{
			$this->_landing();
		}
	}	
	public function adminPage6()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/startup'); 
		
		}else{
			$this->_landing();
		}
	}
	public function adminPage7()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/competition'); 
		
		}else{
			$this->_landing();
		}
	}
	public function adminPage8()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/normal'); 
		
		}else{
			$this->_landing();
		}
	}
	public function investorRequest()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='investors';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/adminoverallreports/investorRequest'); 
		}else{
			$this->_landing();
		}
	}

	public function editStatusInvestor()
	{
		$this->db->set('user_status', '1', FALSE);
		$this->db->where('userId',$this->input->post('key'));
		$this->db->update('user_md'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

	}
	
	public function showrequestInvestor($value='')
	{
		echo " <table id='example1' class='table table-bordered table-striped'>
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Reason</th>
                        <th>Date Registered</th>
                        <th></th>
                      
                      </tr>
                    </thead>
                    <tbody>";
		  foreach ($this->post->investorRequest()->result_array() as $value):
                   echo "
               
               			<tr>
                        <td>".$value['userId']."</td>
                        <td>".$this->post->userProfile($value['userId'])."</td>
                        <td>".$value['user_reasons']."</td>
                        <td>".$value['user_dateRegistered']."</td>
                        <td><button type='button' class='btn btn-block btn-primary btn-xs' value='".$value['userId']."' name='approve' id='approve'>Approve</button> </td>
                        
                      </tr>
                   ";
     	endforeach;
     	echo "      </tbody>
                   
                  </table>";

     	$this->load->view('pages/dashboard/js');
	}
	public function ads()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='ads';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/admindashboard/fixed',$data);
		$this->load->view('pages/admindashboard/adcontent'); 
		}else{
			$this->_landing();
		}
	}


	public function PostNewIdea()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->post->checkUserType()=='false'){
		         $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
		         if ($this->form_validation->run() == FALSE)
		        {
		         	header('location:'.base_url().'pages/investorpost');
		        }
		        else
				{	
		     	 	$datetime = date('Y-m-d H:i:s'); 
		     	 	$postId = uniqid();
		     	 	
		     	 	$data = array(
					'postId' => $postId,
					'postTitle' =>'investor Post',
					'postContent' =>$this->input->post('inputDescription'),
					'postType' => 'investpost',
					'userId' => $this->session->userdata('userId'),
					'postDate' => $datetime
					);
					$this->db->insert('userpost', $data);

					
				}
			}

					
		}else
		{
			$this->_landing();
		}
	}
	
	public function sendPoke()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("message")==null){
				echo "Please Input message";
			}
				else{

		     $datetime = date('Y-m-d H:i:s'); 
		     $msgId = uniqid();
		     $data = array(
					'msgId' => $msgId,
					'userId' =>$this->input->post("fromUserId"),
					'msg_fromUserId' =>$this->session->userdata("userId"),
					'msg_Content' =>$this->input->post("message"),
					'msg_Date' => $datetime,
					'msg_status' => '1',
			);
					
			$this->db->insert('msg_dtl', $data);
			echo "Message sent";
			}
					
		}
		else
		{
			$this->_landing();
		}
	}
	public function sendInvestmentRequest()
	{
		if(($this->session->userdata('userId')!=""))
		{
			 
		    $data = array(
				'extId' =>uniqid(),
				'extContent' => $this->session->userdata('userId'),
				'extType' => '-',
				'postId'=> $this->input->post("thisPostId")
			);

			$this->db->insert('userpost_ext',$data);
			echo "Request sent";	
		}
		else
		{
			$this->_landing();
		}
	}
	public function countmsg()
	{	
		  $this->db->where('msg_status','1');
          $this->db->where('userId', $this->session->userdata("userId"));
          $query = $this->db->get('msg_dtl');
           $num= $query->num_rows();
		echo $num;
	}
	public function countntf()
	{
			$this->db->where('status','1');
          	$this->db->where('userId', $this->session->userdata("userId"));
          	$query = $this->db->get('group_ext');
           	$num= $query->num_rows();
		echo $num;
	}
	public function countInvestmentRequest(){
			$this->db->select('b.extId');
			$this->db->from('userpost a');
			$this->db->join('userpost_ext b','a.postId=b.postId','left');
			$this->db->where('a.userId',$this->session->userdata("userId"));
			$this->db->where('extType','-');
			$query = $this->db->get();
			$num = $query->num_rows();
		return $num;
	}
	public function groupnotif()
	{

          	$this->db->where('userId', $this->session->userdata("userId"));
          	$query = $this->db->get('group_md');
          		$numrows = $query->num_rows();
          		if($numrows==0)
          		{
          			echo "0";
          		}

          
           			$this->db->where('status','1');
           			$this->db->where('userId',$this->session->userdata("userId"));
          			$query1 = $this->db->get('group_ext');
            		$numrows = $query1->num_rows();
            		$numrows2=0;
 			foreach ($query->result_array() as $key) {
            		$this->db->where('groupId',$key['groupId']);
           			$this->db->where('status','2');
          			$query2 = $this->db->get('group_ext');
            		$numrows1 = $query2->num_rows();
            		$numrows2+=$numrows1;
           			
          	}
          		if(($numrows+$numrows2)==0){
            			echo "0";
            		}
            		
            		else
            			 echo $numrows+$numrows2;

	}
	public function groupnotif1()
	{
          	$this->db->where('userId', $this->session->userdata("userId"));
          	$query = $this->db->get('group_md');
          	$num = $query->num_rows();
          
       
           			$this->db->where('status','1');
           			$this->db->where('userId',$this->session->userdata("userId"));
          			$query1 = $this->db->get('group_ext');
          			
            			foreach ($query1->result_array() as $key1) {
            				
            				echo '
            						<br/><hr/>
            					   <li><p>'.$this->post->userProfile($this->post->getAdmingroup($key1['groupId'])).' wants you to joingroup to '.$this->post->getGroupname($key1['groupId']).'</p>
			                        <button class="btn btn-flat btn-sm pull-right">decline</button><button class="btn btn-flat btn-primary btn-sm pull-right" name="btnGroupacc" id="btnGroupacc" value="'.$key1['groupId'].','.$key1['userId'].'">accept</button>
			                     	</li>

			                     ';
            			}
    	foreach ($query->result_array() as $key) {
            		$this->db->where('groupId',$key['groupId']);
           			$this->db->where('status','2');
          			$query2 = $this->db->get('group_ext');
          				foreach ($query2->result_array() as $key2) {

            				echo '<br/><hr/>
            					 <li>'.$this->post->userProfile($key2['userId']).' wants to join your Group '.$this->post->getGroupname($key2['groupId']).'<br/>
			                        	<button class="btn btn-flat btn-xs pull-right">decline</button><button class="btn btn-flat btn-primary btn-xs pull-right" name="btnAcceptreq" id="btnAcceptreq" value="'.$key2['groupId'].','.$key2['userId'].'">accept</button>
			                     </li>
			                    ';
            			}           		
           	}

           	echo '<script>
 					$("button[name='.'btnAcceptreq'.']").click(function(e){
			     			   
							     var str = $(this).attr("value");
								 var res = str.split(","); 
							        e.preventDefault();
			             			 var dataString = "groupId="+ res[0] + "&userId=" + res[1];
							       $.ajax({
					              type: "post",
					              url:"'.base_url().'pages/acceptgroup/",
					              data:dataString,
					              success: function (data) {
					          		
					              	alert("successfully accepted");
					              }
					            });
						
			          

			          });
 					$("button[name='.'btnGroupacc'.']").click(function(e){
			     			   
							     var str = $(this).attr("value");
								 var res = str.split(","); 
							        e.preventDefault();
			             			 var dataString = "groupId="+ res[0] + "&userId=" + res[1];
							       $.ajax({
					              type: "post",
					              url:"'.base_url().'pages/acceptgroup/",
					              data:dataString,
					              success: function (data) {
					          		
					              	alert("successfully accepted");
					              }
					            });
						
			          

			          });
			 		</script>';
           	
	}

	public function investmentNotif(){
		$this->db->select('*');
		$this->db->from('userpost a');
		$this->db->join('userpost_ext b','a.postId=b.postId','left');
		$this->db->where('a.userId',$this->session->userdata("userId"));
		$this->db->where('extType','-');
		$query = $this->db->get();

		$data= $query->result_array();
		foreach ($data as $row) {
			echo '<br/><hr/>
            	<li>'.$this->post->getinvestor($row['extContent']).' wants to invest <b>'.$this->post->getideatitle($row['postId']).'</b><br/>
			    <button class="btn btn-flat btn-xs pull-right">decline</button><button class="btn btn-flat btn-primary btn-xs pull-right" name="btnAccept" id="btnAccept" value="'.$row['extId'].'">accept</button>
			    </li>
			    ';
		}

		echo '<script>
 				$("button[name='.'btnAccept'.']").click(function(e){
			     	var extId = $(this).attr("value");
					e.preventDefault();
			        var dataString = "extId="+ extId;
					$.ajax({
					    type: "post",
					    url:"'.base_url().'pages/acceptInvestmentRequest/",
					    data:dataString,
					    success: function (data) {
					        alert("Investment request successfully accepted");
					    }
				});
			});

			</script>';
	}

	public function notif($key=null,$id=null)
	{
		if(($this->session->userdata('userId')!=""))
		{	
			if($key == 'msg')
			{
				$data['msg'] = $this->post->notifmsgFirst()->result_array();
			   $data['fromUserId'] = $id;

			}elseif($key =='group'){
				
			}else{
				$data['msg'] = $this->post->notifmsgFirst()->result_array();

			}	
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='message';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/message/content'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}

		public function chat1on1show($userId)
		{
			
                foreach($this->post->msg1on1($userId)->result_array() as $row):
                  
				if($this->post->checkUser($row['userId'])=='true')	{
                   echo ' <div class="direct-chat-msg">';
                    echo '  <div class="direct-chat-info clearfix">';
                      echo '  <span class="direct-chat-name pull-left">';
                      echo $this->post->userProfile($row['msg_fromUserId']);
                      echo '</span>
                        <span class="direct-chat-timestamp pull-right">';

                        echo $row['msg_Date'];

                        echo '</span>
                      </div><!-- /.direct-chat-info -->
                       <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['msg_fromUserId']); echo '"><!-- /.direct-chat-img -->';
                        echo '<div class="direct-chat-text">';
                           echo $row['msg_Content'];
                      echo '</div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->';
                }else{

                	echo '<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">';
                            echo $this->post->userProfile($row['msg_fromUserId']);
                        echo '   </span>
                            <span class="direct-chat-timestamp pull-left">';

                            echo $row['msg_Date'];
                          echo '</span>
                          </div><!-- /.direct-chat-info -->
                         <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['msg_fromUserId']); echo '"><!-- /.direct-chat-img -->';
                       echo '<div class="direct-chat-text">';
                            echo $row['msg_Content'];
                        echo '</div>
                        </div><!-- /.direct-chat-msg -->';
                }
                  endforeach;
		}

		public function hiddenShit()
		{
			echo  '<input type="text" hidden="true" name="fromUserId" id="fromUserId" value="'.$this->session->userdata('poke').'"> ';
		}

		public function hiddenShit2()
		{
			echo  '<input type="text" hidden="true" name="thisPostId" id="thisPostId" value="'.$this->session->userdata('invest').'"> ';
		}

		public function newPostIdea()
		{
			if(($this->session->userdata('userId')!=""))
			{	

				 $this->form_validation->set_rules('inputDescription', 'Description', 'required');
				 $this->form_validation->set_rules('ideatitle', 'Title', 'required');
				
		         


		        if ($this->form_validation->run() == FALSE)
		        {
		          	echo form_error('inputDescription','<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>');
		          	echo form_error('ideatitle','<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>');
		        }
		        else
				{
					if($this->post->duplicateQuery($this->input->post('ideatitle'),$this->input->post('inputDescription'))->num_rows()==0){
					$datetime = date('Y-m-d H:i:s');  		
					$postId = uniqid();
					$data = array(
					'postId' => $postId ,
					'postContent' =>$this->input->post('inputDescription'),
					'postDate' =>	$datetime,
					'postType' => '1',
					'postTitle' => $this->input->post('ideatitle'),
					'userId' =>$this->session->userdata("userId"));	

					 
					$this->db->insert('userpost', $data);


					if($this->input->post('categorytxt')=='1'){
						$category = $this->input->post('optional');
					}else{
						$category = $this->input->post('categorytxt');
					}


					$data = array(
					'extId' => uniqid(),
					'extContent' =>$category,
					'extType' =>'7'	,
					'postId'=>$postId
					);	

					 $this->db->insert('userpost_ext', $data);

					 if($this->input->post('relatedlinks')!=null){

						$data = array(
						'extId' => uniqid(),
						'extContent' =>$this->input->post('relatedlinks'),
						'extType' =>'1'	,
						'postId'=>$postId
						);	

						
						$this->db->insert('userpost_ext', $data);

					 }

					
					 $url = $this->do_upload();
					 if($url !=null){

					 	$data = array(
						'extId' => uniqid(),
						'extContent' =>$url,
						'extType' =>'2'	,
						'postId'=>$postId
						);	
						
							$this->db->insert('userpost_ext', $data);

					 }

					 if($this->input->post('inputKeyPartners')!=null OR $this->input->post('inputKeyActivities')!=null OR $this->input->post('inputValuePropositions')!=null 
					 	OR $this->input->post('inputCustomerRelationship')!=null OR $this->input->post('inputCusomerSegments')!=null OR $this->input->post('inputKeyResources')!=null OR
					 	$this->input->post('inputChannels')!=null OR $this->input->post('inputCostStructure')!=null OR $this->input->post('inputRevenueStreams')!=null){

					 	$data = array(
						'key_partners' => $this->input->post('inputKeyPartners'),
						'key_activities' =>$this->input->post('inputKeyActivities'),
						'value_proposition' =>$this->input->post('inputValuePropositions'),
						'customer_relationships' =>$this->input->post('inputCustomerRelationship'),
						'channels' =>$this->input->post('inputChannels'),
						'customer_segments' =>$this->input->post('inputCusomerSegments'),
						'cost_structure' =>$this->input->post('inputCostStructure'),
						'revenue_streams' =>$this->input->post('inputRevenueStreams'),
						'postId' => $postId
						);	

						$this->db->insert('bmc_dtl', $data);


					}
					else{
							echo "Successfully posted";
						}
				}
				else{
						echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
						echo "This startup idea is identical to the last one you posted. Try posting something different, or delete your previous update.";
				}
				}

		}
	}

	public function updateIdea()
		{
			if(($this->session->userdata('userId')!=""))
			{	

					$datetime = date('Y-m-d H:i:s');  		
					$postId = $this->input->post('postid');

					$data = array(
						'postContent' =>$this->input->post('inputDescription'),
						'postDate' =>	$datetime,
						'postType' => '1',
						'postTitle' => $this->input->post('ideatitle'),
						'userId' =>$this->session->userdata("userId")
					);	

					$this->db->where('postId', $postId);
					$this->db->update('userpost', $data); 

					if($this->input->post('categorytxt')=='1'){
						$category = $this->input->post('optional');
					}else{
						$category = $this->input->post('categorytxt');
					}

					$extId = $this->input->post('extId');
					if($extId==""){
						$data = array(
						'extId' => uniqid(),
						'extContent' =>$category,
						'extType' =>'7'	,
						'postId'=>$postId
						);	

						 $this->db->insert('userpost_ext', $data);

					}else{
						$data = array(
						'extContent' =>$category,
						'extType' =>'7'	,
						'postId'=>$postId
						);	

						$this->db->where('extId', $extId);
						$this->db->update('userpost_ext', $data);
					}

					 if($this->input->post('relatedlinks')!=null){
					 	$extId1 = $this->input->post('extId1');
					 	if($extId1==""){
							$data = array(
							'extId' => uniqid(),
							'extContent' =>$category,
							'extType' =>'1'	,
							'postId'=>$postId
							);	

							 $this->db->insert('userpost_ext', $data);
						 
						}else{
							$data = array(
							'extContent' =>$this->input->post('relatedlinks'),
							'extType' =>'1'	,
							'postId'=>$postId
							);	

							$this->db->where('extId', $extId1);
							$this->db->update('userpost_ext', $data); 
						}
	
					 }

					
					 $url = $this->do_upload();
					 if($url !=null){
					 	$extId2 = $this->input->post('extId2');
					 	if($extId2==""){
							$data = array(
							'extId' => uniqid(),
							'extContent' =>$url,
							'extType' =>'2'	,
							'postId'=>$postId
							);

							 $this->db->insert('userpost_ext', $data);
						 
						}else{
						 	$data = array(
							'extId' => uniqid(),
							'extContent' =>$url,
							'extType' =>'2'	,
							'postId'=>$postId
							);	
							
							$this->db->where('extId', $extId2);
							$this->db->update('userpost_ext', $data); 
						}
					 }

					if($this->input->post('inputKeyPartners')!=null OR $this->input->post('inputKeyActivities')!=null OR $this->input->post('inputValuePropositions')!=null 
					 	OR $this->input->post('inputCustomerRelationship')!=null OR $this->input->post('inputCusomerSegments')!=null OR $this->input->post('inputKeyResources')!=null OR
					 	$this->input->post('inputChannels')!=null OR $this->input->post('inputCostStructure')!=null OR $this->input->post('inputRevenueStreams')!=null){

					 	if($this->post->checkWithBmc($postId)){
						 	$data = array(
								'key_partners' => $this->input->post('inputKeyPartners'),
								'key_activities' =>$this->input->post('inputKeyActivities'),
								'value_proposition' =>$this->input->post('inputValuePropositions'),
								'customer_relationships' =>$this->input->post('inputCustomerRelationship'),
								'channels' =>$this->input->post('inputChannels'),
								'customer_segments' =>$this->input->post('inputCusomerSegments'),
								'cost_structure' =>$this->input->post('inputCostStructure'),
								'revenue_streams' =>$this->input->post('inputRevenueStreams')
							);	

							$this->db->where('postId', $postId);
							$this->db->update('bmc_dtl', $data); 
						}else{
							$data = array(
								'key_partners' => $this->input->post('inputKeyPartners'),
								'key_activities' =>$this->input->post('inputKeyActivities'),
								'value_proposition' =>$this->input->post('inputValuePropositions'),
								'customer_relationships' =>$this->input->post('inputCustomerRelationship'),
								'channels' =>$this->input->post('inputChannels'),
								'customer_segments' =>$this->input->post('inputCusomerSegments'),
								'cost_structure' =>$this->input->post('inputCostStructure'),
								'revenue_streams' =>$this->input->post('inputRevenueStreams'),
								'postId' => $postId
								);	

								$this->db->insert('bmc_dtl', $data);
						}
					}
				header('Location:'.base_url().'pages/post/'.$postId);

			}else{

				$this->_landing();
			}
		}
		public function updateComp()
		{
			if($this->session->userdata('userId')!="")
			{
				if(isset($_POST['updateComp']))
				{
					$updatedDate = date('Y-m-d H:i:s');
					$postId = $this->input->post('postid');

					$data = array(
							'postContent' => $this->input->post('inputDescription'),
							'postDate' => $updatedDate
						);

					$this->db->where('postId', $postId);
					$this->db->update('userpost', $data);

					$extId = $this->input->post('area');
					if($extId!=""){
						$data1 = array(
								'extContent' => $this->input->post('area')
							);

						$this->db->where('extId', $this->post->getAreaId($postId));
						$this->db->update('userpost_ext', $data1);
					}
					if($extId!=""){
						$data2 = array(
								'extContent' => $this->input->post('competitionnote')
							);

						$this->db->where('extId', $this->post->getNoteId($postId));
						$this->db->update('userpost_ext', $data2);
					}
					header('Location:'.base_url().'pages/investorpost');
				}
			}
		}
		public function updateNormalPost()
		{
			if($this->session->userdata('userId')!="")
			{
				if(isset($_POST['normal']))
				{
					$updatedDate = date('Y-m-d H:i:s');
					$postId = $this->input->post('postid');

					$data = array(
							'postContent' => $this->input->post('inputDescription'),
							'postDate' => $updatedDate
						);

					$this->db->where('postId', $postId);
					$this->db->update('userpost', $data);

					$extId = $this->input->post('area');
					if($extId!=""){
						$data1 = array(
								'extContent' => $this->input->post('area')
							);

						$this->db->where('extId', $this->post->getAreaId($postId));
						$this->db->update('userpost_ext', $data1);
					}
					
					header('Location:'.base_url().'pages/investorpost');
				}
			}
		}
		public function newStartUpProduct()
		{
			if(($this->session->userdata('userId')!=""))
			{	

					$datetime = date('Y-m-d H:i:s'); 	
					$postId = uniqid();
					$data = array(
					'postId' => $postId ,
					'postContent' =>$this->input->post('inputDescription'),
					'postDate' =>	$datetime,
					'postType' => '2',
					'postTitle' => $this->input->post('producttitle'),
					'userId' =>$this->session->userdata("userId"));	

					 $this->db->insert('userpost', $data);

					if($this->input->post('categorytxt')=='1'){
						$category = $this->input->post('optional');
					}else{
						$category = $this->input->post('categorytxt');
					}


					$data = array(
					'extId' => uniqid(),
					'extContent' =>$category,
					'extType' =>'7'	,
					'postId'=>$postId
					);	

					 $this->db->insert('userpost_ext', $data);

					 if($this->input->post('downloadlink')!=null){

						$data = array(
						'extId' => uniqid(),
						'extContent' =>$this->input->post('downloadlink'),
						'extType' =>'1'	,
						'postId'=>$postId
						);	

							 $this->db->insert('userpost_ext', $data);
					 }

					
					 $url = $this->do_upload();
					 if($url !=null){

					 	$data = array(
						'extId' => uniqid(),
						'extContent' =>$url,
						'extType' =>'2'	,
						'postId'=>$postId
						);	

						$this->db->insert('userpost_ext', $data);

					 }

			}else{

				$this->_landing();
			}
		}

		public function upateStartupProduct()
		{
			if(($this->session->userdata('userId')!=""))
			{	

					$datetime = date('Y-m-d H:i:s'); 	
					$postId = $this->input->post('postid');

					$data = array(
						'postContent' =>$this->input->post('inputDescription'),
						'postDate' =>	$datetime,
						'postType' => '2',
						'postTitle' => $this->input->post('producttitle'),
						'userId' =>$this->session->userdata("userId")
					);	

					$this->db->where('postId', $postId);
					$this->db->update('userpost', $data);


					if($this->input->post('categorytxt')=='1'){
						$category = $this->input->post('optional');
					}else{
						$category = $this->input->post('categorytxt');
					}

					$extId = $this->input->post('extId');
					if($extId==""){
						$data = array(
						'extId' => uniqid(),
						'extContent' =>$category,
						'extType' =>'7'	,
						'postId'=>$postId
						);	

						 $this->db->insert('userpost_ext', $data);

					}else{
						$data = array(
						'extContent' =>$category,
						'extType' =>'7'	,
						'postId'=>$postId
						);	

						$this->db->where('extId', $extId);
						$this->db->update('userpost_ext', $data);
					}

					 if($this->input->post('downloadlink')!=null){
					 	$extId1 = $this->input->post('extId1');
					 	if($extId1==""){
							$data = array(
							'extId' => uniqid(),
							'extContent' =>$this->input->post('downloadlink'),
							'extType' =>'1'	,
							'postId'=>$postId
							);	

							 $this->db->insert('userpost_ext', $data);
						 
						}else{
							$data = array(
							'extContent' =>$this->input->post('downloadlink'),
							'extType' =>'1'	,
							'postId'=>$postId
							);	

							$this->db->where('extId', $extId1);
							$this->db->update('userpost_ext', $data); 
						}
	
					 }

					
					 $url = $this->do_upload();
					 if($url !=null){
					 	$extId2 = $this->input->post('extId2');
					 	if($extId2==""){
							$data = array(
							'extId' => uniqid(),
							'extContent' =>$url,
							'extType' =>'2'	,
							'postId'=>$postId
							);

							 $this->db->insert('userpost_ext', $data);
						 
						}else{
						 	$data = array(
							'extId' => uniqid(),
							'extContent' =>$url,
							'extType' =>'2'	,
							'postId'=>$postId
							);	
							
							$this->db->where('extId', $extId2);
							$this->db->update('userpost_ext', $data); 
						}
					 }
				
				

			}else{

				$this->_landing();
			}
		}

		public function newCompetition()
		{
			if(($this->session->userdata('userId')!=""))
			{	

					$datetime = date('Y-m-d H:i:s'); 	
					$postId = uniqid();
					$data = array(
					'postId' => $postId ,
					'postContent' =>$this->input->post('inputDescription'),
					'postDate' =>	$datetime,
					'postType' => '4',
					'userId' =>$this->session->userdata("userId"));	

					 $this->db->insert('userpost', $data);

					  if($this->input->post('area')!=null){

						$data = array(
						'extId' => uniqid(),
						'extContent' =>$this->input->post('area'),
						'extType' =>'3'	,
						'postId'=>$postId
						);	

						$this->db->insert('userpost_ext', $data);
					 }
					  if($this->input->post('competitionnote')!=null){

						$data = array(
						'extId' => uniqid(),
						'extContent' =>$this->input->post('competitionnote'),
						'extType' =>'5'	,
						'postId'=>$postId
						);	

						$this->db->insert('userpost_ext', $data);
					 }
					 

			}else{

				$this->_landing();
			}
		}
		public function newNormalPost()
		{
			if(($this->session->userdata('userId')!=""))
			{	

					$datetime = date('Y-m-d H:i:s'); 	
					$postId = uniqid();
					$data = array(
					'postId' => $postId ,
					'postContent' =>$this->input->post('inputDescription'),
					'postDate' =>	$datetime,
					'postType' => '3',
					'userId' =>$this->session->userdata("userId"));	

					 $this->db->insert('userpost', $data);

					  if($this->input->post('area')!=null){

						$data = array(
						'extId' => uniqid(),
						'extContent' =>$this->input->post('area'),
						'extType' =>'3'	,
						'postId'=>$postId
						);	

						$this->db->insert('userpost_ext', $data);
					 }
					 

			}else{

				$this->_landing();
			}
		}


		public function newShowInvestorPost($query,$postId=null)
		{
				if($query =='1'){
					
						$query=$this->post->queryInvestorPost();
				}
				elseif ($query =='2') {
					$query=$this->post->queryNewsfeedIdeator();
				}
				elseif ($query =='3') {
					if($this->post->checkInvestorStatus()){
						$query=$this->post->queryNewsfeedInvestor();
				    }else{
				    	$query=$this->post->queryNewsfeedInvestor1();
				    }
				}
				elseif ($query =='4') {
					$query=$this->post->queryStartupLatest();
				}
				elseif ($query =='5') {
					$query=$this->post->queryStartupOnfire();
				}
				elseif ($query =='6') {
					$query=$this->post->queryStartupTop();
				}
				elseif ($query =='7') {
					$query=$this->post->query1post($postId);
				}
				elseif ($query =='8') {
					$query=$this->post->queryMostD();
				}
			  foreach ($query->result_array() as $row):

			  	if($row['postType']=='1'){

          echo    ' <div class="box box-widget">
		        <div class="box-header with-border">
		          <div class="user-block">
		            <img class="img-circle" src="'.base_url().'/user/'.$this->post->getAvatar($row['userId']).'" alt="user image">
		            <span class="username">';
		            if($this->post->checkUser1($row['userId']))
		            {
		            	  echo'     <a href="'.base_url().'pages/profile/'.$row['userId'].'"><small>'.$this->post->userProfile($row['userId']).'</small></a>';
		            }else{
		    echo'     <a href="'.base_url().'pages/profilenew/'.$row['userId'].'"><small>'.$this->post->userProfile($row['userId']).'</small></a>';
		    		}
		    	echo '
		            </span>
		            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;'.$this->post->reputation($row['userId']).'</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>'.$row['postDate'].'</small></span>
		          </div><!-- /.user-block -->
		          <div class="box-tools">
		          ';
		            if(!$this->post->checkUser1($row['userId'])){

		            }else{
		      	  echo '    <a href="'.base_url().'pages/editpost/'.$row['postId'].'"  class="btn btn-box-tool" ><i class="fa fa-edit"></i></a>
		      	  		<button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['postId'].'"><i class="fa fa-times"></i></button>';
                  	 }
		           
		    echo'      </div><!-- /.box-tools -->
		        </div><!-- /.box-header --> 
		        <div class="box-body">
		          <div class="container-fluid">
		              <div class="info-box">
		                <div class="row">';

		                	if($this->post->checkUser1($row['userId'])){
		                  	}else{
		                  		if($this->post->getUserType($this->session->userdata('userId'))=='Investor'){
			                  	echo '<span class="pull-right">';

			                  	if($this->post->alreadyInvested($row['postId'])){
			                  		echo '  <button type="button" class="btn btn-warning btn-xs" value="'.$row['postId'].'" name="invest" disabled><i class="fa fa-money"></i>&nbsp;&nbsp;Invested</button> ';
			                  	}else{
				                  	if($this->post->sentInvestmentRequest($row['postId'])){
				                  		echo '  <button type="button" class="btn btn-warning btn-xs" value="'.$row['postId'].'" name="invest" disabled><i class="fa fa-money"></i>&nbsp;&nbsp;Request sent</button> ';
				                  	}else{
				                  		echo '  <button type="button" class="btn btn-warning btn-xs" value="'.$row['postId'].'" name="invest" data-toggle="modal" data-target="#invest"><i class="fa fa-money"></i>&nbsp;&nbsp;Invest</button> ';
				                  	}
			                  	}
					       		
			                  	if($this->post->validMarkDuplicate($row['postId'])){
									echo '  <button type="button" class="btn btn-danger btn-xs" value="'.$row['postId'].'" name="duplicate" disabled><i class="fa fa-flag"></i>&nbsp;&nbsp;Existed</button> ';
						        	
						        }else{
						        	echo '  <button type="button" class="btn btn-danger btn-xs" value="'.$row['postId'].'" name="duplicate"><i class="fa fa-flag"></i>&nbsp;&nbsp;Existing</button> ';
						        }
					        	
					       		echo '</span>';
				        		}
				        	}

		            echo'      <p>
		                    <span style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Idea)</small></span>
		                    <!--<span class="pull-right" style="color:orange;"><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;<small>invested</small>&nbsp;&nbsp;&nbsp;</span>-->
		                  </p>
		                </div>';


		            if($this->post->isExistingIdea($row['postId'])){
		            echo'<div class="row">
		                	<div class="col-md-12">';
			            if($this->post->countMarked($row['postId'])<10){
			            	echo '<div class="alert alert-warning alert-dismissable">';
			            }else{
			            	echo '<div class="alert alert-danger alert-dismissable">';
			            }
			            echo ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                   <h4><i class="icon fa fa-warning"></i> Warning!</h4>
			                        This idea was marked as existing by '.$this->post->countMarked($row['postId']).''; if($this->post->countMarked($row['postId'])==1){ echo ' person.';}else{ echo ' people.';}
			         				if($this->session->userdata('userId')==$row['userId']){
			         					echo '<br/>Sorry, your idea already existed. Please try another.';
			         				}
		                 echo '	</div>
	                     	</div>
		                </div>';
		            }
		            echo'<div class="row">
		                    <div class="col-md-3">
		                     <img src="'.base_url().'/post_image/'.$this->post->getpostImg($row['postId']).'" height="200px" width="200px" alt="Attachment image">
		                    </div>
		                     <div class="col-md-1"></div>
		                    <div class="col-md-7">

		                      <h5><b><a href="#" >'.strtoupper($row['postTitle']).'</a></b><span class="label label-default pull-right">'.$this->post->checkBmc($row['postId']).'</span></h5>
		                      <h6><small>category: &nbsp;&nbsp;'.$this->post->getPostCategory($row['postId']).'</small></h6>
		                      <p style="text-align:justify;text-justify:inter-word;">'.$row['postContent'].'</p>
		                    </div>
		                  </div><!-- /.row -->
		                  <div class="col-md-1"></div>
		              </div><!-- /.info-box -->

		              <i><small>related links: &nbsp;&nbsp; '.$this->post->getRelatedLinks($row['postId']).'</a></small></i><hr/>

		              <!-- sample complete startup idea post -->';

		              if($this->post->checkWithBmc($row['postId'])==true){

		              	foreach($this->post->bmcquery($row['postId'])->result_array() as $row1):
		  echo '     <div class="col-md-12">
		                <div class="box box-default ">
		                  <div class="box-header with-border">
		                    <h3 class="box-title"><small>Business Model Canvas</small></h3>
		                    <div class="box-tools pull-right">
		                    
		                    </div><!-- /.box-tools -->
		                  </div><!-- /.box-header -->
		                <div class="box-body">
		                  <table class="table table-bordered table-hover">
		                    <thead>
		                      <tr>
		                        <th><small>Key Partners</small></th>
		                        <th><small>Key Activities</small></th>
		                        <th><small>Values Propositions</small></th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                      <tr>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['key_partners']);
		           echo    '
		                         </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['key_activities']);
		           echo    '
		                            </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['value_proposition']);
		           echo    '
		                            </small>
		                        </td>
		                      </tr>
		                      <tr>
		                        <th><small>Customer Relationships</small></th>
		                        <th><small>Customer Segments</small></th>
		                        <th><small>Key Resources</small></th>
		                      </tr>
		                      <tr>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['customer_relationships']);
		           echo    '
		                            </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['customer_segments']);
		           echo    '
		                            </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['key_activities']);
		           echo    '
		                            </small>
		                        </td>
		                      </tr>
		                      <tr>
		                        <th><small>Channels</small></th>
		                        <th><small>Cost Structure</small></th>
		                        <th><small>Revenue Streams</small></th>
		                      </tr>
		                      <tr>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['channels']);
		           echo    '
		                            </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['cost_structure']);
		           echo    '
		                            </small>
		                        </td>
		                        <td><small style="text-align:justify;text-justify:inter-word;">';
		                        $this->post->bmcexplode($row1['revenue_streams']);
		           echo    '
		                            </small>
		                        </td>
		                      </tr>
		                    </tbody>
		                  </table>
		                </div><!-- /.box-body -->
		              </div><!-- /.box -->
		            </div><!-- /.col-12 -->';
		            endforeach;
		        }
		    echo'      </div><!-- /.container -->
		          </div><!-- /.box-body -->
		          <div class="box-footer">
		            <div class="container-fluid">';
		            if($this->post->validUpvote($row['postId'])){
					echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote" disabled><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvoted</button> ';
		        
		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote"><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvote</button> ';
		        		}	
		            if($this->post->checkUser1($row['userId'])){

		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['userId'].'" name="poke" data-toggle="modal" data-target="#poke2"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button> ';
		        		}

				echo'<a href="'.base_url().'pages/post/'.$row['postId'].'" class="btn btn-success btn-xs" ></i>&nbsp;&nbsp;View Post</a>
				<span class="pull-right"><small><a href="#">'.$this->post->upvotecount($row['postId']).' - '.$this->post->commentCount($row['postId']).'</a></small></span>
		            </div>
		          </div>
		      </div> <!-- /. box-widget -->';
		  }elseif ($row['postType']=='2') {

		  	echo '  <!-- sample startup product post -->
				      <div class="box box-widget">
				         <div class="box-header with-border">
				          <div class="user-block">
				            <img class="img-circle" src="'.base_url().'/user/'.$this->post->getAvatar($row['userId']).'" alt="user image">
				            <span class="username">
				              <a href="'.base_url().'pages/profilenew/'.$row['userId'].'"><small>'.$this->post->userProfile($row['userId']).'</small></a>
				            </span>
				            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;'.$this->post->reputation($row['userId']).'</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>'.$row['postDate'].'</small></span>
				          </div><!-- /.user-block -->
				          <div class="box-tools">  ';
		            if(!$this->post->checkUser1($row['userId'])){

		            }else{
		      	  echo '    <a href="'.base_url().'pages/editpost/'.$row['postId'].'"  class="btn btn-box-tool" ><i class="fa fa-edit"></i></a>
		      	  			<button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['postId'].'"><i class="fa fa-times"></i></button>';
                  	 }
		           
		    echo'     </div><!-- /.box-tools -->
				        </div><!-- /.box-header --> 
				        <div class="box-body">
				          <div class="container-fluid">
				              <div class="info-box">
				                <div class="row">';

				                if($this->post->checkUser1($row['userId'])){
			                  	}else{
			                  		if($this->post->getUserType($this->session->userdata('userId'))=='Investor'){
				                  	echo '<span class="pull-right">';
				                  	echo '  <button type="button" class="btn btn-warning btn-xs" value="'.$row['userId'].'" name="invest" data-toggle="modal" data-target="#invest"><i class="fa fa-money"></i>&nbsp;&nbsp;Invest</button> ';
						       		
						       		echo '</span>';
					        		}
					        	}
				        echo ' <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Startup Product)</small></p>
				                </div>
				                <p style="text-align:justify;text-justify:inter-word;">'.$row['postContent'].'</p>
				                    
				                  <!-- Attachment -->
				                  <div class="attachment-block clearfix">

				                    <img class="attachment-img" src="'.base_url().'/post_image/'.$this->post->getpostImg($row['postId']).'" alt="attachment image">
				                    <div class="attachment-pushed">

				                      <h5 class="attachment-heading"><b><a href="#">'.strtoupper($row['postTitle']).'</a></b></h5>
				                      
				                      <div class="attachment-text">
				                        <h6><small>category: &nbsp;&nbsp;'.$this->post->getPostCategory($row['postId']).'</small></h6>
				                        <i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star" style="color:gold;"></i><i class="fa fa-star-half" style="color:gold;"></i>
				                      </div><!-- /.attachment-text -->
				                    </div><!-- /.attachment-pushed -->
				                  </div><!-- /.attachment-block -->
				              </div><!-- /.info-box -->

				              <i><small>download links: &nbsp;&nbsp; '.$this->post->getRelatedLinks($row['postId']).'</small></i><hr/>
				          </div><!-- /.container -->
				        </div><!-- /.box-body -->
				          <div class="box-footer">
				            <div class="container-fluid">
				           ';
				           if($this->session->userdata("userId")==null){

				           }else{
				           if($this->post->validUpvote($row['postId'])){
					echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote" disabled><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvoted</button> ';
		        
		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote"><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvote</button> ';
		        		}
		            if($this->post->checkUser1($row['userId'])){

		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['userId'].'" name="poke" data-toggle="modal" data-target="#poke2"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button> ';
		        		}

				echo'  <a href="'.base_url().'pages/post/'.$row['postId'].'" class="btn btn-success btn-xs" ></i>&nbsp;&nbsp;View Post</a>
				<span class="pull-right"><small><a href="#">'.$this->post->upvotecount($row['postId']).' - '.$this->post->commentCount($row['postId']).'</a></small></span>
				            </div>
				          </div>
				      </div> <!-- /. box-widget -->';
				  }
		  }elseif ($row['postType']=='3') {
		  	echo '  <!-- sample normal idea post -->

				      <div class="box box-widget">
				       <div class="box-header with-border">
				          <div class="user-block">
				            <img class="img-circle" src="'.base_url().'/user/'.$this->post->getAvatar($row['userId']).'" alt="user image">
				            <span class="username">
				              <a href="'.base_url().'pages/profilenew/'.$row['userId'].'"><small>'.$this->post->userProfile($row['userId']).'</small></a>
				            </span>
				            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;'.$this->post->reputation($row['userId']).'</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>'.$row['postDate'].'</small></span>
				          </div><!-- /.user-block -->
				          <div class="box-tools">
				             ';
		            if(!$this->post->checkUser1($row['userId'])){

		            }else{
		      	  echo '    <a href="'.base_url().'pages/editpost/'.$row['postId'].'"  class="btn btn-box-tool" ><i class="fa fa-edit"></i></a>
		      	  		<button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['postId'].'"><i class="fa fa-times"></i></button>';
                  	 }
		           
		    echo'     </div><!-- /.box-tools -->
				        </div><!-- /.box-header --> 
				        <div class="box-body">
				          <div class="container-fluid">
				              <div class="info-box">
				                <div class="row">
				                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Post)</small></p>
				                </div>
				             
				                <h6><small>Area/s: &nbsp;&nbsp;'.$this->post->getPostAreas($row['postId']).'</small></h6>
				                <p style="text-align:justify;text-justify:inter-word;">'.$row['postContent'].'</p>
				                <br/>     
				              </div><!-- /.info-box -->

				             
				          </div><!-- /.container -->
				        </div><!-- /.box-body -->
				          <div class="box-footer">';
				          if($this->post->validUpvote($row['postId'])){
					echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote" disabled><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvoted</button> ';
		        
		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote"><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvote</button> ';
		        		}
		            if($this->post->checkUser1($row['userId'])){

		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['userId'].'" name="poke" data-toggle="modal" data-target="#poke2"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button> ';
		        		}
				echo'<a href="'.base_url().'pages/post/'.$row['postId'].'" class="btn btn-success btn-xs" ></i>&nbsp;&nbsp;View Post</a>
				 <span class="pull-right"><small><a href="#">'.$this->post->upvotecount($row['postId']).' - '.$this->post->commentCount($row['postId']).'</a></small></span>
				            </div>
				          </div>
				      </div> <!-- /. box-widget -->';
		  }elseif ($row['postType']=='4') {
		  			echo '  <!-- sample normal idea post -->

				      <div class="box box-widget">
				       <div class="box-header with-border">
				          <div class="user-block">
				            <img class="img-circle" src="'.base_url().'/user/'.$this->post->getAvatar($row['userId']).'" alt="user image">
				            <span class="username">
				              <a href="'.base_url().'pages/profilenew/'.$row['userId'].'"><small>'.$this->post->userProfile($row['userId']).'</small></a>
				            </span>
				            <span class="description"><i class="fa fa-star" style="color:gold;"></i><small><b>&nbsp;'.$this->post->reputation($row['userId']).'</b></small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date posted:&nbsp;&nbsp;&nbsp;<small>'.$row['postDate'].'</small></span>
				          </div><!-- /.user-block -->
				          <div class="box-tools">
				           ';
		            if(!$this->post->checkUser1($row['userId'])){

		            }else{
		      	  echo '    <a href="'.base_url().'pages/editpost/'.$row['postId'].'"  class="btn btn-box-tool" ><i class="fa fa-edit"></i></a>
		      	  		<button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['postId'].'"><i class="fa fa-times"></i></button>';
                  	 }
		           
		    echo'    </div><!-- /.box-tools -->
				        </div><!-- /.box-header --> 
				        <div class="box-body">
				          <div class="container-fluid">
				              <div class="info-box">
				                <div class="row">
				                  <p style="color:green;"><i class="fa fa-bookmark"></i>&nbsp;&nbsp;&nbsp;<small>(Competition)</small></p>
				                </div>
				                <h6><small>Area/s: &nbsp;&nbsp; '.$this->post->getPostAreas($row['postId']).'</small></h6>
				                <p style="text-align:justify;text-justify:inter-word;">'.$row['postContent'].'</p>
				                <br/>     
				              </div><!-- /.info-box -->

				              <i><small>Notes: &nbsp;&nbsp; '.$this->post->getPostNote($row['postId']).'</small></i><hr/>
				          </div><!-- /.container -->
				        </div><!-- /.box-body -->
				          <div class="box-footer">
				            <div class="container-fluid">';
				      if($this->post->validUpvote($row['postId'])){
					echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote" disabled></i>&nbsp;&nbsp;upvoted</button> ';
		        
		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['postId'].'" name="upvote"><i class="glyphicon glyphicon-circle-arrow-up"></i>&nbsp;&nbsp;upvote</button> ';
		        		}
   					if($this->post->checkUser1($row['userId'])){

		            }else{
		        echo '  <button type="button" class="btn btn-success btn-xs" value="'.$row['userId'].'" name="poke" data-toggle="modal" data-target="#poke2"><i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;Poke</button> ';
		        		}
				echo' 
				<a href="'.base_url().'pages/post/'.$row['postId'].'" class="btn btn-success btn-xs" ></i>&nbsp;&nbsp;View Post</a>
				<span class="pull-right"><small><a href="#">'.$this->post->upvotecount($row['postId']).' - '.$this->post->commentCount($row['postId']).'</a></small></span>
				            </div>
				          </div>
				      </div> <!-- /. box-widget -->';
		  }

   			 endforeach;

   			//  	echo '<script>
			   //         $("button[name='.'invest'.']").click(function(e){
			   //         	var str = str.split(",", $(this).attr("value"));
				  //         var userId = str[0]+"";
				  //         var postId = str[1]+"";
			   //          e.preventDefault();
			   //            var dataString = "userId="+ userId +"&postId="+postId;
			   //          $.ajax({
			   //            type: "post",
			   //            url:"'.base_url().'pages/markDup/",
			   //            data:dataString,
			   //            success: function (data) {
			   //              document.getElementById("userid").value = userId;
			   //              document.getElementById("postId").value = postId;
			   //            }
			   //          });

			   //        });
			 		// </script>';

 				echo '<script>
			           $("button[name='.'duplicate'.']").click(function(e){
			          var postId = $(this).attr("value");
			          
			            e.preventDefault();
			              var dataString = "postId="+ postId;
			            $.ajax({
			              type: "post",
			              url:"'.base_url().'pages/markedexisting/",
			              data:dataString,
			              success: function (data) {
			          		alert("You marked this idea as existing");
			              }
			            });
			          });
				</script>';

				echo '<script>
			           $("button[name='.'invest'.']").click(function(e){
			          var postId = $(this).attr("value");
			          
			            e.preventDefault();
			              var dataString = "postId="+ postId;
			            $.ajax({
			              type: "post",
			              url:"'.base_url().'pages/investmentRequest/",
			              data:dataString,
			              success: function (data) {
			          		document.getElementById("postid").value = postId;
			              }
			            });
			          });
				</script>';

	   			 echo '<script>
			           $("button[name='.'poke'.']").click(function(e){
			          var userId = $(this).attr("value");
			          
			            e.preventDefault();
			              var dataString = "userId="+ userId;
			            $.ajax({
			              type: "post",
			              url:"'.base_url().'pages/getAll/",
			              data:dataString,
			              success: function (data) {
			          
			                document.getElementById("userid").value = userId;
			              }
			            });

			          });
			 		</script>
		';

			 echo '<script>
			           $("button[name='.'upvote'.']").click(function(e){
			          var postId = $(this).attr("value");
			          
			            e.preventDefault();
			              var dataString = "postId="+ postId;
			            $.ajax({
			              type: "post",
			              url:"'.base_url().'pages/upvote/",
			              data:dataString,
			              success: function (data) {
			          		alert("successfully upvoted");
			              
			              }
			            });

			          });



 					$("button[name='.'btnDelete'.']").click(function(e){
			              if (confirm("Do you want to delete this post?")) {
							     var postId = $(this).attr("value");
							        e.preventDefault();
			             			 var dataString = "postId="+ postId;
							       $.ajax({
					              type: "post",
					              url:"'.base_url().'pages/deletepost/",
					              data:dataString,
					              success: function (data) {
					          		alert("successfully deleted");
					              
					              }
					            });
							} else {
							    // Do nothing!
							}
			          

			          });

			 		</script>
		';
		}

		public function newCommentShow($postId)
		{
			
                foreach($this->post->comment($postId)->result_array() as $row):
                  
				if($this->post->checkUser($row['userId'])=='false')	{
                   echo ' <div class="direct-chat-msg">';
                    echo '  <div class="direct-chat-info clearfix">';
                      echo '  <span class="direct-chat-name pull-left">';
                      echo $this->post->userProfile($row['userId']);
                      echo '</span>
                        <span class="direct-chat-timestamp pull-right">';

                        echo $row['commentDate'];

                        echo '</span>
                      </div><!-- /.direct-chat-info -->
                       <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                        echo '<div class="direct-chat-text">';
                           echo $row['commentContent'];
                      echo '</div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->';
                }else{

                	echo '<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">';
                            echo $this->post->userProfile($row['userId']);
                        echo '   </span>
                            <span class="direct-chat-timestamp pull-left">';

                            echo $row['commentDate'];
                          echo '</span>
                          </div><!-- /.direct-chat-info -->
                         <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                       echo '<div class="direct-chat-text">';
                            echo $row['commentContent'];
                        echo '</div>
                        </div><!-- /.direct-chat-msg -->';
                }
                  endforeach;
		}

		public function printcommentadmin($postId)
		{
				foreach($this->post->comment($postId)->result_array() as $row):
                  
				if($this->post->checkUser($row['userId'])=='false')	{
                   echo ' <div class="direct-chat-msg">';
                    echo '  <div class="direct-chat-info clearfix">';
                      echo '  <span class="direct-chat-name pull-left">';
                      echo $this->post->userProfile($row['userId']);
                      echo '</span>
                        <span class="direct-chat-timestamp pull-right">';

                        echo $row['commentDate'];

                        echo '</span>
                      </div><!-- /.direct-chat-info -->
                       <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                        echo '<div class="direct-chat-text">';
                           echo $row['commentContent'];
                          echo ' <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['commentId'].'"><i class="fa fa-times"></i></button>';
                      echo '</div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->';
                }else{

                	echo '<div class="direct-chat-msg right">
                          <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-right">';
                            echo $this->post->userProfile($row['userId']);
                        echo '   </span>
                            <span class="direct-chat-timestamp pull-left">';

                            echo $row['commentDate'];
                          echo '</span>
                          </div><!-- /.direct-chat-info -->
                         <img class="direct-chat-img" src="';echo base_url();echo'user/';echo $this->post->getAvatar($row['userId']); echo '"><!-- /.direct-chat-img -->';
                       echo '<div class="direct-chat-text">';
                            echo $row['commentContent'];
                                 echo ' <button type="submit" class="btn btn-box-tool" name="btnDelete" id="btnDelete" value="'.$row['commentId'].'"><i class="fa fa-times"></i></button>';
                     
                        echo '</div>
                        </div><!-- /.direct-chat-msg -->';
                }
                  endforeach;

                  echo '	<script>
                  $("button[name='.'btnDelete'.']").click(function(e){
			              if (confirm("Do you want to delete this post?")) {
							     var postId = $(this).attr("value");
							        e.preventDefault();
			             			 var dataString = "postId="+ postId;
							       $.ajax({
					              type: "post",
					              url:"'.base_url().'pages/commentDelete/",
					              data:dataString,
					              success: function (data) {
					          		alert("successfully deleted");
					              
					              }
					            });
							} else {
							    // Do nothing!
							}
			          

			          });

			 		</script>';
		}
	public function commentNow()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("message")==null){
				echo "Please Input message";
			}
				else{

		     $datetime = date('Y-m-d H:i:s'); 
		  
		     $data = array(
					'commentContent' => $this->input->post("message"),
					'commentDate' =>$datetime,
					'postId' =>$this->input->post("postId"),
					'userId' =>$this->input->post("fromUserId"),
					'commentId' => uniqid()
			);
					
			$this->db->insert('comment_dtl', $data);
			}
					
		}
		else
		{
			$this->_landing();
		}
	}
	
	public function goldbadge()
	{

			if($this->input->post('postId')!=''){
			$data = array(
					'userId' => $this->input->post("userId"),
					'fromUserId' => $this->session->userdata("userId"),
					'voteBadge' => '1',
					
				);

				$this->db->insert('badge_dtl',$data);
			}
			
			
		
	}
	public function investorInformation()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("reason")==null){
				
			}
				else{

				$this->db->set('user_reasons', $this->input->post("reason"));
				$this->db->where('userId', $this->session->userdata("userId"));
				$this->db->update('user_dtl'); 
			}
					
		}
		else
		{
			$this->_landing();
		}
	}

	public function acceptgroup()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("groupId")==null){
				
			}
				else{

				$this->db->set('status','3');
				$this->db->where('userId', $this->input->post("userId"));
				$this->db->where('groupId', $this->input->post("groupId"));
				$this->db->update('group_ext'); 
			}
					
		}
		else
		{
			$this->_landing();
		}
	}

	public function acceptInvestmentRequest(){
		if(($this->session->userdata('userId')!="")){
			$this->db->set('extType','9');
			$this->db->where('extId', $this->input->post("extId"));
			$this->db->update('userpost_ext'); 					
		}
		else{
			$this->_landing();
		}
	}

	public function deletepost()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("postId")==null){
				
			}
			else{

					$this->db->where('postId',$this->input->post("postId"));
					$this->db->delete('bmc_dtl');

					$this->db->where('postId',$this->input->post("postId"));
					$this->db->delete('userpost_ext');

					$this->db->where('postId',$this->input->post("postId"));
					$this->db->delete('upvote_dtl');

					$this->db->where('postId',$this->input->post("postId"));
					$this->db->delete('comment_dtl');

					$this->db->where('postId',$this->input->post("postId"));
					$this->db->delete('userpost');
			}
					
		}
		else
		{
			$this->_landing();
		}
	}
	public function commentDelete()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("postId")==null){
				
			}
			else{
					$this->db->set('commentContent',"This comment is being admin. It contains foul words.");
					
					$this->db->where('commentId', $this->input->post("postId"));
					$this->db->update('comment_dtl'); 

					
			}
					
		}
		else
		{
			$this->_landing();
		}
	}
	public function diskikliv()
	{
		$groupid = $this->input->post('groupid');
		$userid = $this->input->post('userid');


	


		if($this->session->userdata('userId')!="")
		{

			if(isset($_POST['btndisband'])){
				
				$this->db->where('groupId',$groupid);
				$this->db->delete('group_ext');
				header('Location:'.base_url().'pages/newgroup/'.$this->input->post('userId'));

			}
			elseif(isset($_POST['btnleave'])){
					$this->db->select('*');
		$this->db->from('group_ext');
		$this->db->where('groupId',$groupid);
		$this->db->where('userId',$userid);
				$this->db->delete('group_ext');
				header('Location:'.base_url().'pages/newgroup/'.$this->input->post('userId'));
			}
			elseif(isset($_POST['btnkick'])){
					$this->db->select('*');
		$this->db->from('group_ext');
		$this->db->where('groupId',$groupid);
		$this->db->where('userId',$userid);
				$this->db->delete('group_ext');
				header('Location:'.base_url().'pages/group/'.$this->input->post('groupId'));
			}
		}
	}

	 public function editpost($postId)
	{
		if(($this->session->userdata('userId')!="")){
			$query=$this->_userData();
			$data['data']=$query->result_array();
			$data['pages']='edit';
			$data['countgroup'] = $this->countGroups();
			$groupquery= $this->groupdetails();
			$data['groupdetails'] = $groupquery->result_array();

			$postdtlquery= $this->post->postdtl($postId);
			$data['postDetail'] = $postdtlquery->result_array();

			$this->load->view('pages/dashboard/fixed',$data);

			if($this->post->getPostType($postId)=='1'){
				$this->load->view('pages/edit/startupidea',$data);
			}elseif($this->post->getPostType($postId)=='2'){
				$this->load->view('pages/edit/startupproduct',$data);
			}elseif($this->post->getPostType($postId)=='3'){
				$this->load->view('pages/edit/normal',$data);
			}elseif($this->post->getPostType($postId)=='4'){
				$this->load->view('pages/edit/competition',$data);
			}

			$this->load->view('pages/dashboard/controlsidebar');
			$this->load->view('pages/dashboard/footer');
			$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}

	public function profilenew($postId = null)
	{
		if(($this->session->userdata('userId')!=""))
		{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='newsfeedinvestor';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedinvestor();
				$data['ideatorpost'] = $feed->result_array();
				$postdtlquery= $this->post->postdtl($postId);		
				$data['postdtl']=$postdtlquery->result_array();
				$data['postId'] = $postId;

				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/profile/newprofile'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
		}else
		{
			$this->_landing();
		}
	}
	public function videocall($msgId=null)
	{
		if(($this->session->userdata('userId')!=""))
		{
				if(isset($msgId)){
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='newsfeedinvestor';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedinvestor();
				$data['ideatorpost'] = $feed->result_array();	
				$data['msgId'] = $msgId;
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/message/videocall'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
				}else{
					$this->pagenotfound();
				}
		}else
		{
			$this->_landing();
		}
	}	
	public function videocall1($msgId=null)
	{
		if(($this->session->userdata('userId')!=""))
		{
				if(isset($msgId)){
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='newsfeedinvestor';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$feed = $this->post->newsfeedinvestor();
				$data['ideatorpost'] = $feed->result_array();	
				$data['msgId'] = $msgId;
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/message/videocall1'); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
				}else{
					$this->pagenotfound();
				}
		}else
		{
			$this->_landing();
		}
	}

	public function reportUser()
	{
		$datetime = date('Y-m-d H:i:s');
	
		
		$data = array(
		'reportId' => uniqid(),
	
		'reportContent' => $this->input->post('comments'),
		'reportDate' => $datetime,
		'reportStat' => '1',
		'reportType' => '1',
		'userId' => $this->input->post('userId'),
		'fromUserId' => $this->session->userdata("userId")
		);

		$this->db->insert('report_dtl', $data);
		echo "Thank you for your the report you made!";
	}

	public function changePassword()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if(md5($this->input->post("inputOldPassword"))==$this->post->checkPassword())
			{
				
				if($this->input->post("inputNewPassword")==$this->input->post("inputNewRepassword")){
					$this->db->set('user_password',md5($this->input->post("inputNewPassword")));
					$this->db->where('userId', $this->session->userdata("userId"));
					$this->db->update('user_md'); 

					echo "successfully changed password!";
				}else
					echo "confirm password not match";
			}else 
				echo "incorrect password";
		}else
		{
			$this->_landing();
		}
			
	}

	public function editGroup()
	{
		if(($this->session->userdata('userId')!=""))
		{
			if($this->input->post("inputGroupName")!=null && $this->input->post("inputDescription")!=null)
			{
				
				
					$this->db->set('groupname',$this->input->post("inputGroupName"));
					$this->db->set('groupdescription',$this->input->post("inputDescription"));
					$this->db->where('groupId', $this->input->post("groupid"));
					$this->db->update('group_md'); 

					header('Location:'.base_url().'pages/group/'.$this->input->post('groupid'));
			
			}
		}else
		{
			$this->_landing();
		}
			
	}

	public function call()
	{
		if(($this->session->userdata('userId')!=""))
		{
			

		     $datetime = date('Y-m-d H:i:s'); 
		     $msgId = uniqid();
		     $data = array(
					'msgId' => $msgId,
					'userId' =>$this->input->post("fromUserId"),
					'msg_fromUserId' =>$this->session->userdata("userId"),
					'msg_Content' =>$this->post->userProfile($this->session->userdata("userId"))."is calling you",
					'msg_Date' => $datetime,
					'msg_status' => '4',
			);
					
			$this->db->insert('msg_dtl', $data);
			header('Location:'.base_url().'pages/videocall/'.substr($msgId, 0,10));
			
					
		}
		else
		{
			$this->_landing();
		}
	}



}
