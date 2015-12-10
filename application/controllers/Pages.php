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
		$this->db->where('a.userId', $this->session->userdata('userId'));


		$query = $this->db->get();

		return $query;
	}
	public function _alluserData()
	{
		$this->db->select('*');
		$this->db->from('user_md a');
		$this->db->join('user_dtl b', 'a.userId=b.userId','left');
		$this->db->join('company_dtl c', 'c.userId=a.userId','left');
		$this->db->join('userpost d', 'd.userId=a.userId');
		$this->db->join('avatar_dtl e', 'e.userId=d.userId');
		$this->db->order_by('postDate', 'DESC');
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
		$data['groupdetails'] = $groupquery->result_array();
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
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/Products/content'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}

	public function group($groupId=null)
	{	
		if(($this->session->userdata('userId')!=""))
		{
			if(isset($groupId))
			{
				$query=$this->_userData();
				$data['data']=$query->result_array();
				$data['pages']='group';
				$data['countgroup'] = $this->countGroups();
				$groupquery= $this->groupdetails();
				$data['groupdetails'] = $groupquery->result_array();
				$groupDetails= $this->post->groupdetails($groupId,$this->session->userdata('userId'));
				if($groupDetails->num_rows()==0) {
					$groupDetails->result_array();

					$this->load->view('pages/dashboard/fixed',$data);
					$this->load->view('pages/group/nogroup',$data); 
					$this->load->view('pages/dashboard/controlsidebar');
					$this->load->view('pages/dashboard/end');
				}else{
				$data['groupDtl'] = $groupDetails->result_array();
				$projectdtl= $this->post->projectdtl($groupId);
				$data['projectdtl'] = $projectdtl->result_array();
				$this->load->view('pages/dashboard/fixed',$data);
				$this->load->view('pages/group/groupcontent',$data); 
				$this->load->view('pages/dashboard/controlsidebar');
				$this->load->view('pages/dashboard/end');
				}
			}
			else $this->index();

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

	public function profile()
	{	if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='profile';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/profile/content',$data); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}

		public function post()
	{	if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';
		$data['countgroup'] = $this->countGroups();
		$groupquery= $this->groupdetails();
		$data['groupdetails'] = $groupquery->result_array();
		$query=$this->_alluserData();
		$data['alldata']=$query->result_array();

		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/post/content',$data); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');

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

	public function postIdea()
	{

		 $this->form_validation->set_rules('ideatitle', 'Title', 'required|trim');
         $this->form_validation->set_rules('inputDescription', 'Description', 'required|trim');
         $this->form_validation->set_rules('relatedlinks', 'Links', 'trim');
         if ($this->form_validation->run() == FALSE)
        {
         	$this->post();
        }
        else
		{
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

			$this->db->insert('userpost', $data);
			$this->post();
		}
			
	}


	public function showComment()
	{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';

		$query=$this->_alluserData();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/post/comment',$data);
	}
	public function comment()
	{
		 $this->form_validation->set_rules('comment', 'Comment', 'required|trim');
 
         if ($this->form_validation->run() == FALSE)
        {
         	$this->post();
        }
        else
		{
     	 	$datetime = date('Y-m-d H:i:s'); 
     	 	$commentId = uniqid();
     	 	$data = array(
			'commentId' => $this->input->post('commentid'),
			'commentContent' =>$this->input->post('comment'),
			'commentType' =>$this->input->post('btnComment'),
			'postId' =>$this->input->post('postId'),
			'userId' => $this->session->userdata('userId'),
			'commentDate' =>$datetime
			);

			$this->db->insert('comment_dtl', $data);
			$this->post();
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
			$this->group();
		}
	}

	public function groupdetails(){
		$this->db->select('*');
		$this->db->from('group_md a');
		$this->db->join('group_ext b','b.groupId=a.groupId','left');
		$this->db->where('a.userId',$this->session->userdata('userId'));
		$query=$this->db->get();

		return $query;
	}

	public function addproject(){
		$this->form_validation->set_rules('inputProjectName', 'Project Name', 'required');
		$this->form_validation->set_rules('inputDescription', 'Project Description', 'trim');

		if ($this->form_validation->run()==FALSE){
			$this->group();
		}else{
			$projId = uniqid('pr');

			$data = array(
				'projectid' => $projId,
				'projectname' => $this->input->post('inputProjectName'),
				'projectdescription' => $this->input->post('inputDescription'),
			);

			$this->db->update('group_md',$data);
			$this->db->where('userId',$this->session->userdata('userId'));
			$this->group();
		}
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
			if(!isset($post))
			{
				$this->load->view('pages/profile/index');
			}
			else if($post=='gold')
			{
				$userId = "5666e164e0";
				$fromUserId = "565fcbb98d";

				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$fromUserId,
				'voteBadge' => '1'
				);

				$this->db->insert('badge_dtl', $data);
				$this->load->view('pages/profile/index');
			}
			else if($post=='silver')
			{
				$userId = "5666e164e0";
				$fromUserId = "565fcbb98d";
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$fromUserId,
				'voteBadge' => '2'
				);

				$this->db->insert('badge_dtl', $data);
			
				$this->load->view('pages/profile/index');
			}
			else if($post=='bronze')
			{
				$userId = "5666e164e0";
				$fromUserId = "565fcbb98d";
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$fromUserId,
				'voteBadge' => '3'
				);

				$this->db->insert('badge_dtl', $data);
			
				$this->load->view('pages/profile/index');
			}
			elseif ($post=='black') 
			{
				$userId = "5666e164e0";
				$fromUserId = "565fcbb98d";
				$data = array(
				'userId' => $userId,
				'fromUserId' =>	$fromUserId,
				'voteBadge' => '4'
				);

				$this->db->insert('badge_dtl', $data);
			
				$this->load->view('pages/profile/index');
			}
		
			else{
				$this->load->view('pages/profile/index');
				}
		}
	}	

	public function showpost()
	{
		$query = $this->_alluserData();
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
	public function upvote()
	{

		$this->form_validation->set_rules('postId', 'Post Id', 'callback_postIdCheck');
		if ($this->form_validation->run()==FALSE){
			$this->post();
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
			$this->post();
		}else
		$this->index();
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

}
