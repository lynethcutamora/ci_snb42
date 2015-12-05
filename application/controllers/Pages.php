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
		$this->load->view('pages/content');
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
		$this->db->join('company_dtl c', 'c.userId=b.userId','left');
		$this->db->join('userpost d', 'd.userId=b.userId');
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
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/Products/content'); 
		$this->load->view('pages/dashboard/controlsidebar');
		$this->load->view('pages/dashboard/end');
		}else{
			$this->_landing();
		}
	}

	public function group()
	{
		if(($this->session->userdata('userId')!=""))
		{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='group';
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/group/groupcontent'); 
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
		$this->load->view('pages/dashboard/fixed',$data);
		$this->load->view('pages/profile/content'); 
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

		$this->db->where('user_emailAdd', $this->input->post('email'));
		$this->db->where('user_password', md5($this->input->post('password')));
		$query = $this->db->get('user_md');
		
		if($query->num_rows == 1)
		{
			$query = true;
		}
		foreach ($query->result() as $row)
		{
       		$userId = $row->userId;

		}
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'userId' => $userId,
				'user_emailAdd' => $this->input->post('email')
				
			);
			$this->session->set_userdata($data);
			redirect('../pages/index');
		}
		else // incorrect username or password
		{

			$this->index();
		}
	}

	#MAO NI ANG VALIDATION UG INSERTION PARA SA IDEATOR NGA USERS
	public function _validationIdeator()
	{
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha');
         $this->form_validation->set_rules('inputAge', 'Age', 'required|numeric');
         $this->form_validation->set_rules('r3', 'Gender', 'required');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]');
         $this->form_validation->set_rules('inputAdress1', 'Address1', 'trim');
         $this->form_validation->set_rules('inputAdress2', 'Address2', 'trim');
         $this->form_validation->set_rules('inputCity', 'City', 'trim');
         $this->form_validation->set_rules('inputRegion', 'Region/State', 'trim');
         $this->form_validation->set_rules('inputZIP', 'Zip Code', 'alpha_numeric');
         $this->form_validation->set_rules('inputCounty', 'Country', 'trim');
         $this->form_validation->set_rules('inputDescription', 'Short Description', 'trim');
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
			'user_lName' => $this->input->post('inputLName'),
			'user_fName' => $this->input->post('inputFName'),
			'user_midInit' => $this->input->post('inputMI'),
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
			'location_country' => $this->input->post('inputCounty'),
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
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha');
         $this->form_validation->set_rules('inputAge', 'Age', 'required|numeric');
         $this->form_validation->set_rules('r3', 'Gender', 'required');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]');
         $this->form_validation->set_rules('inputAdress1', 'Address1', 'trim');
         $this->form_validation->set_rules('inputAdress2', 'Address2', 'trim');
         $this->form_validation->set_rules('inputCity', 'City', 'trim');
         $this->form_validation->set_rules('inputRegion', 'Region/State', 'trim');
         $this->form_validation->set_rules('inputZIP', 'Zip Code', 'alpha_numeric');
         $this->form_validation->set_rules('inputCounty', 'Country', 'trim');
         $this->form_validation->set_rules('inputBusiness', 'Business Name', 'trim');
         $this->form_validation->set_rules('inputBusinessType', 'Business Type', 'trim');
         $this->form_validation->set_rules('inputDescription', 'Short Description', 'trim');
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
			'user_lName' => $this->input->post('inputLName'),
			'user_fName' => $this->input->post('inputFName'),
			'user_midInit' => $this->input->post('inputMI'),
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
		 $this->form_validation->set_rules('inputLName', 'Last Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputFName', 'First Name', 'required|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputMI', 'Middle Initial', 'alpha|trim');
         $this->form_validation->set_rules('inputCName', 'Company Name', 'required|trim');
         $this->form_validation->set_rules('inputEmail', 'Email Address', 'required|is_unique[user_md.user_emailAdd]');
         $this->form_validation->set_rules('inputPassword', 'Password', 'required');
	     $this->form_validation->set_rules('inputRepassword', 'Password Confirmation', 'required|matches[inputPassword]');
         $this->form_validation->set_rules('inputBusinessType', 'business Type', 'trim|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputYear', 'Year Founded', 'trim|alpha_numeric_spaces');
         $this->form_validation->set_rules('inputDescription', 'Short Business Description', 'trim|alpha_numeric_spaces');
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
			'company_lName' => $this->input->post('inputLName'),
			'company_fName' => $this->input->post('inputFName'),
			'company_midInit' => $this->input->post('inputMI'),
			'company_yearFounded' => $this->input->post('inputYear'),
			'company_name' => $this->input->post('inputCName'),
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

	public function showPost()
	{
		$query=$this->_userData();
		$data['data']=$query->result_array();
		$data['pages']='post';

		$query=$this->_alluserData();
		$data['alldata']=$query->result_array();
		$this->load->view('pages/post/post',$data);
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

}