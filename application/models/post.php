<?php 
    class Post extends CI_Model 
    {
        public function upvotecount($postId)
        {
                $this->db->where('postId', $postId);
                $query = $this->db->get('upvote_dtl');
                return $query->num_rows()." Upvotes";

        }
        
    	public function validUpvote($postId)
    	{
    		$this->db->where('postId', $postId);
    		$this->db->where('userId', $this->session->userdata('userId'));
            $query = $this->db->get('upvote_dtl');
            if($query->num_rows()>0){
            	return true;
            }
            else
            	return false;
    	
    	}
        public function validBadge($userdtl)
        {
            $this->db->where('userId', $userdtl);
            $this->db->where('fromUserId', $this->session->userdata('userId'));
            $query = $this->db->get('badge_dtl');
            if($query->num_rows()>0){
                return 'true';
            }
            else
                return 'false';
        }
        public function groupdetails($groupId,$userId)
        {
                $this->db->select('*');
                $this->db->from('group_md a');
                $this->db->join('group_ext b','b.groupId=a.groupId','left');
                $this->db->where('a.groupId',$groupId);
                $this->db->where('b.userId',$userId);
                $query=$this->db->get();

                return $query;
        }
         public function projectdtl($groupId)
        {
                $this->db->select('*');
                $this->db->from('userpost');
                $this->db->where('postType',$groupId);
                $query=$this->db->get();

                return $query;
        }
          public function showImage($postId)
        {
                $this->db->select('*');
                $this->db->from('userpost_ext');
                $this->db->where('postId',$postId);
                $this->db->where('extType','1');
                $query=$this->db->get();

                return $query;
        }
        
          public function showLinks($postId)
        {
                $this->db->select('*');
                $this->db->from('userpost a');
                $this->db->join('userpost_ext b','b.postId=a.postId','left');
                $this->db->where('b.postId',$postId);
                $this->db->where('b.extType','2');

                $query=$this->db->get();

                return $query;
        }
        public function image($content, $type,$postId)
        {
                if($content==null){

                }else
                {
                        $this->db->set('extContent', $content);
                        $this->db->set('extId', uniqid());
                        $this->db->set('extType',$type);
                        $this->db->set('postId',$postId);
                        $this->db->insert('userpost_ext');
                }
        }
        public function profilePic($content,$userId)
        {
                if($content==null){

                }
                else{
                        $this->db->where('userId', $userId);
                        $this->db->set('avatar_name', $content);
                        $this->db->update('avatar_dtl');
                }
        }
        public function file($content, $type,$postId)
        {
                if($content==null){

                }else
                {
                        $this->db->set('extContent', $content);
                        $this->db->set('extId', uniqid());
                        $this->db->set('extType',$type);
                        $this->db->set('postId',$postId);
                        $this->db->insert('userpost_ext');
                }
        }
        public function link($content, $type,$postId)
        {
                if($content==null){
                        
                }
                else
                {
                    $this->db->set('extContent', $content);
                    $this->db->set('extId', uniqid());
                    $this->db->set('extType',$type);
                    $this->db->set('postId',$postId);
                    $this->db->insert('userpost_ext');
                }
        }
            
        public function postdtl($postId)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId','left');
            $this->db->join('avatar_dtl e', 'e.userId=a.userId','left');
            $this->db->where('d.postId',$postId);
            $query = $this->db->get();

            return $query;

        }
        public function profile($userId)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
            $this->db->join('location_dtl e', 'e.userId=a.userId','left');
            $this->db->where('a.userId', $userId);
            $query = $this->db->get();
            return $query;
        }

        public function alluserData($userId)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
            $this->db->where('d.userId',$userId);
            $this->db->where('d.postType','1');
            $this->db->order_by('postDate', 'DESC');
            $query = $this->db->get();
            return $query;
        }
        public function showComments($postId)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('comment_dtl d', 'd.userId=a.userId','left');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId','left');
            $this->db->where('postId',$postId);
            $this->db->order_by('commentDate', 'ASC');
            $query = $this->db->get();
             return $query;
        }

        public function existsMember($groupId,$userId)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('userId',$userId);
            $this->db->where('groupId',$groupId);
            $this->db->where('status','0');
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows>0)  return true;
            else return false;
        }

        public function ifgrouprequestmember($groupId,$userId)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('userId',$userId);
            $this->db->where('groupId',$groupId);
            $this->db->where_not_in('status','1');
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows>0)  return true;
            else return false;
        }

        public function ifgroupadmin($userid){
            $this->db->select('groupId, userId');
            $this->db->from('group_md ');
            $this->db->where('userId',$userid);
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows>0)  return true;
            else return false;
        }

        public function memberGroupRequest($userid){
            if (ifgroupadmin($userid)){
                $this->db->select('e.groupId,e.userId,e.status');
                $this->db->from('group_ext e');
                $this->db->join('group_md m','e.groupId=m.groupId','left');
                $this->db->where('m.userId',$userid);
                $this->db->where('e.status','2');
                $query=$this->db->get();
                return $query;
            }else
                return false;
        }

        public function groupstat($groupid)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('groupId',$groupid);
            $this->db->where('userId', $this->session->userdata("userId"));
            $this->db->where('status', '3');
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows)  return false;
            else return true;
        }
        public function pendingMember($groupId , $userId)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('userId',$userId);
            $this->db->where('groupId',$groupId);
            $this->db->where('status','1');
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows>0)  return true;
            else return false;
        }

        public function searchIdea($key)
        {
            $this->db->select('*');
            $this->db->from('userpost');
     
            $this->db->like('postTitle', $match = $key, $side = 'both');
            $this->db->like('postContent', $match = $key, $side = 'both');
            $this->db->where('postType','2');
            $query = $this->db->get();
             return $query;
        }
        public function commentCount($postId)
        {
            $this->db->where('postId', $postId);
            $query = $this->db->get('comment_dtl');
            return $query->num_rows()." comments";
        }
        public function searchGroup($key)
        {
            $this->db->select('*');
            $this->db->from('group_md a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
            $this->db->join('user_md e', 'e.userId=a.userId','left');
            $this->db->like('a.groupname', $match = $key, $side = 'both');
            $this->db->or_like('a.groupdescription', $match = $key, $side = 'both');
            $query = $this->db->get();
            return $query;
        }
        public function searchPeople($key)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
            $this->db->like('a.user_emailAdd', $match = $key, $side = 'both');
            $this->db->or_like('b.user_lName', $match = $key, $side = 'both');
            $this->db->or_like('b.user_fName', $match = $key, $side = 'both');
            $this->db->or_like('c.company_name', $match = $key, $side = 'both');
            $query = $this->db->get();
            return $query;
        }
        public function gold($userId)
        {
            $this->db->select('*');
            $this->db->from('badge_dtl');
            $this->db->where('voteBadge','1');
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $gold = $query->num_rows();
            return $gold;
        }
        public function silver($userId)
        {
            $this->db->select('*');
            $this->db->from('badge_dtl');
            $this->db->where('voteBadge','2');
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $silver = $query->num_rows();
            return $silver;
        }
        public function bronze($userId)
        {
            $this->db->select('*');
            $this->db->from('badge_dtl');
            $this->db->where('voteBadge','3');
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $bronze = $query->num_rows();
            return $bronze;
        }
        public function black($userId)
        {
            $this->db->select('*');
            $this->db->from('badge_dtl');
            $this->db->where('voteBadge','4');
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $black = $query->num_rows();
            return $black;
        }
        public function reputation($userId)
        {
           $gold= $this->gold($userId);
           $silver = $this->silver($userId);
           $bronze = $this->bronze($userId);
           $black = $this->black($userId);
             $rep = (($gold*20)+($silver*10)+($bronze*5))-($black*15);   
             return $rep;
        }
        public function firstProject($groupId)
        {
            $this->db->select('*');
            $this->db->from('userpost');
            $this->db->where('postType',$groupId);
            $query = $this->db->get();
            $row = $query->row_array();
            return $row['postId'];
        }
        
        public function messageUser()
        {
            $query = $this->db->query("SELECT DISTINCT groupId,a.userId, a.msgId,b.user_fName , b.user_lName ,b.user_midInit, c.company_fName,c.company_lName,c.company_midInit ,d.user_Type from conference_dtl a left join user_dtl b ON a.groupId = b.userId left join company_dtl c ON a.groupId = b.userId left join user_md d on d.userId = a.groupId  where a.userId='".$this->session->userdata("userId")."'");
            return $query;
        }

        public function userName($userId)
        {
            $query = $this->messageUser($userId);
            $row = $query->row_array();
            if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor')
            {
                if($row['user_midInit']==null)
                    $str = $row['user_fName']."  ".$row['user_lName'];
                else
                    $str =  $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
            }
            else
            {
                $str =  $row['company_name'];
            }
            return $str;
        }
        public function userProfile($userId)
        {
            $query = $this->profile($userId);
            $row = $query->row_array();
            if($row['user_Type']=='Ideator'||$row['user_Type']=='Investor'||$row['user_Type']=='Admin')
            {
                if($row['user_midInit']==null)
                    $str = $row['user_fName']."  ".$row['user_lName'];
                else
                    $str =  $row['user_fName']." ".$row['user_midInit'].". ".$row['user_lName'];
            }
            else
            {
                $str =  $row['company_name'];
            }
            return $str;
        }
        

        

        public function firstMsg($userId)
        {
           $query = $this->messageUser();
           $row = $query->row_array();
           return $row['groupId'];
        }
        
        public function checkEmptyMsg()
        {
            $this->db->select('*');
            $this->db->from('conference_dtl');
            $query =$this->db->where('userId',$this->session->userdata('userId'));
            $query = $this->db->get();
            $numrow = $query->num_rows();
            return $numrow;
        }
        public function showMsg($imgId)
        {
            $this->db->select('*');
            $this->db->from('conference_dtl');
            $query =$this->db->where('msgId',$imgId);
            $query = $this->db->get();
            return $query;
        }


        public function getAvatar($userId)
        {
           $query= $this->profile($userId);
           $row = $query->row_array();
           return $row['avatar_name'];
        }
        public function checkUser($userId)
        {
            if($userId==$this->session->userdata('userId')){
                return 'true';
            }else
            return 'false';
        }

        public function projectName($projectId)
        {
            $this->db->select('postTitle');
            $this->db->from('userpost');
            $query =$this->db->where('postId',$projectId);
            $query = $this->db->get();
            $row = $query->row_array();
            return $row['postTitle'];


        }

        public function checkProject($groupId)
        {
            $this->db->select('postId');
            $this->db->from('userpost');
            $this->db->where('postType',$groupId);
            $query = $this->db->get();
            $rows = $query->num_rows();
            if($rows==0)
                return 'false';
            else
                return 'true';
        }

        // public function autosearchduplicate($text){
        //     $sql = "SELECT postTitle, postContent 
        //             FROM userpost
        //             WHERE MATCH (postTitle) AGAINST (?)>0";
        //     $query=$this->db->query($sql,array($text,$text));
        //     return $query->result();
        // }
        public function getUserType($userId)
        {
            $this->db->select('user_Type');
            $this->db->from('user_md');
            $query =$this->db->where('userId',$userId);
            $query = $this->db->get();
            $row = $query->row_array();
            return $row['user_Type'];


        }

        public function checkUserType()
        {
            if($this->getUserType($this->session->userdata('userId'))=='Ideator' OR $this->getUserType($this->session->userdata('userId'))=='Company')
                return 'true'; 
            else 
                return 'false';
        }
          public function postInvestor($userId)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
            $this->db->where('d.userId',$userId);
            $this->db->where('d.postType','investpost');
            $this->db->order_by('postDate', 'DESC');
            $query = $this->db->get();
            return $query;
        }


        public function allUsers($userId){
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl d', 'd.userId=a.userId');
            $this->db->where_not_in('a.userId',$userId);
            $query = $this->db->get();
            return $query;
        }

        public function postIdeator($userId)
        {
            $this->db->select('a.userId ,d.postContent,d.postDate,d.postId,d.postTitle,f.extContent');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
            $this->db->join('userpost_ext f','f.postId=d.postId','left');
            $this->db->where('d.userId',$userId);
            $this->db->where('d.postType','1');
            $this->db->order_by('postDate', 'DESC');
            $query = $this->db->get();
            return $query;
        }
        public function newsfeedideator()
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
            $this->db->where('d.postType','investpost');
            $this->db->order_by('postDate', 'DESC');
            $query = $this->db->get();
            return $query;
        }

        public function newsfeedinvestor()
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

        public function recentinvestor()
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
            $this->db->where('d.postType','investpost');
            $this->db->order_by('postDate', 'DESC');
            $this->db->limit('3');
            $query = $this->db->get();
            return $query;
        }
       
       public function recentideator()

        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl e', 'e.userId=a.userId');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->order_by('postDate', 'DESC');
            $this->db->limit('3');
            $query = $this->db->get();
            return $query;
        }

        public function reportdtl()
        {
            $this->db->select('*');
            $this->db->from('report_dtl');
            $this->db->order_by('reportDate', 'DESC');
            $query = $this->db->get();
            return $query;
        }
        public function investorRequest()
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->where('a.user_Type','Investor');
            $this->db->where('a.user_status','0');
            $this->db->order_by('a.user_dateRegistered', 'DESC');
            $query = $this->db->get();
            return $query;
        }

        public function countmsg()
        {
            
                $this->db->where('msg_status','1');
                $this->db->where('msg_userId', $this->session->userdata("userId"));
                $query = $this->db->get('msg_dtl');
                return $query->num_rows();
        }


        public function notifmsgFirst()
        {
            $this->db->select('msg_fromUserId,userId');
            $this->db->distinct();
            $this->db->from('msg_dtl');
            $this->db->where('userId',$this->session->userdata("userId"));
            $this->db->or_where('msg_fromUserId',$this->session->userdata("userId"));
            $this->db->order_by('msg_Date','DESC');
            $query = $this->db->get();

            return $query;

        }
         public function msg1on1($userId)
        {
              $query = $this->db->query("SELECT * FROM msg_dtl WHERE userId = '".$userId."'  AND msg_fromUserId = '".$this->session->userdata("userId")."' OR userId = '".$this->session->userdata("userId")."' AND msg_fromUserId = '".$userId."' ");
            return $query;

        }
        public function returnFirstMsg()
        {
              $this->db->select('msg_fromUserId,userId');
            $this->db->distinct();
            $this->db->from('msg_dtl');
            $this->db->where('userId',$this->session->userdata("userId"));
            $this->db->or_where('msg_fromUserId',$this->session->userdata("userId"));
            $this->db->where_not_in('userId',$this->session->userdata("userId"));
            $this->db->order_by('msg_Date','DESC');
            $query = $this->db->get();
             $row = $query->row_array();
           return $row['userId'];

        }

        public function msgSeen($userId)
        {
            $this->db->set('msg_status', '0');
            $this->db->where('userId',$this->session->userdata("userId"));
            $this->db->where('msg_status','1');
            $this->db->or_where('msg_fromUserId',$this->session->userdata("userId"));
            $this->db->update('msg_dtl');
        

           
        }

        public function countMsg1on1($userId)
        {
                $query = $this->db->query("SELECT * FROM msg_dtl WHERE userId = '".$userId."'  AND msg_fromUserId = '".$this->session->userdata("userId")."' AND msg_status = '1' OR userId = '".$this->session->userdata("userId")."' AND msg_fromUserId = '".$userId."'  AND msg_status = '1'");
                $num = $query->num_rows();
                return $num;
        }


        public function queryInvestorPost()
        {
             $this->db->select('*');
             $this->db->from('userpost');
             $this->db->where('userId',$this->session->userdata("userId"));
             $this->db->order_by('postDate', 'DESC');
             $query = $this->db->get();
             return $query;
        }

        public function getpostImg($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','2');
             $query = $this->db->get();

             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extContent'];
             }
             else{
                $result= '1.png';
             }
             return $result;

        }

         public function getPostImgId($postId){
            $this->db->select('extId');
            $this->db->from('userpost_ext');
            $this->db->where('postId',$postId);
            $this->db->where('extType','2');
            $query = $this->db->get();

            $query->row_array();
            $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extId'];
             }
             else{
                $result= '';
             }
             return $result;
        }

        public function getPostCategory($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','7');
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extContent'];
             }
             else{
                $result= 'no category';
             }
             return $result;

        }
        public function getCategoryId($postId){
            $this->db->select('extId');
            $this->db->from('userpost_ext');
            $this->db->where('postId',$postId);
            $this->db->where('extType','7');
            $query = $this->db->get();

            $query->row_array();
            $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extId'];
             }
             else{
                $result= '';
             }
             return $result;
        }
        public function getAreaId($postId){
            $this->db->select('extId');
            $this->db->from('userpost_ext');
            $this->db->where('postId',$postId);
            $this->db->where('extType','3');
            $query = $this->db->get();

            $query->row_array();
            $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extId'];
             }
             else{
                $result= '';
             }
             return $result;
        }
        public function getNoteId($postId){
            $this->db->select('extId');
            $this->db->from('userpost_ext');
            $this->db->where('postId',$postId);
            $this->db->where('extType','5');
            $query = $this->db->get();

            $query->row_array();
            $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extId'];
             }
             else{
                $result= '';
             }
             return $result;
        }
        public function getPostAreas($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','3');
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extContent'];
             }
             else{
                $result= 'No Area';
             }
             return $result;

        } 
        public function getPostNote($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','5');
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extContent'];
             }
             else{
                $result= 'No Notes';
             }
             return $result;

        } 
        public function getRelatedLinks($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','1');
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $arr = explode(",",$row['extContent']);
                $result = "";
                foreach ($arr as $key) {
                    
                 $result .= "<a href='https://".$key."' target='_blank'>".$key."</a>";
                }
             }
             else{
                $result= 'No Links';
             }
             return $result;

        }
        public function getRelatedLinksId($postId){
            $this->db->select('extId');
            $this->db->from('userpost_ext');
            $this->db->where('postId',$postId);
            $this->db->where('extType','1');
            $query = $this->db->get();

            $query->row_array();
            $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extId'];
             }
             else{
                $result= '';
             }
             return $result;
        }
        public function getLinkEdit($postId){
            $this->db->select('*');
             $this->db->from('userpost_ext');
             $this->db->where('postId',$postId);
             $this->db->where('extType','1');
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = $row['extContent'];
             }
             else{
                $result= 'No Links';
             }
             return $result;
        }
        public function checkBmc($postId)
        {
             $this->db->select('*');
             $this->db->from('bmc_dtl');
             $this->db->where('postId',$postId);
             $query = $this->db->get();
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                $result = 'with BMC';
             }
             else{
                $result= 'No BMC';
             }
             return $result;
        }
          public function checkWithBmc($postId)
        {
             $this->db->select('*');
             $this->db->from('bmc_dtl');
             $this->db->where('postId',$postId);
             $query = $this->db->get();
             
             $numrows= $query->num_rows();
             if($numrows){
                $row = $query->row_array();
                return true;
             }
             else{
                return false;
             }
        }
        public function bmcquery($postId)
        {
            $this->db->select('*');
             $this->db->from('bmc_dtl');
             $this->db->where('postId',$postId);
             $query = $this->db->get();
             return $query;
        }

        public function bmcexplode($str)
        {   
            if($str!=null){
            $arr = explode(',', $str);

            foreach ($arr as $key => $value) {
                echo '•'.$value;
            }
           }else{
            echo "none";
           }
        }

        public function queryNewsfeedIdeator()
        {
            $query = $this->db->query("SELECT * FROM  userpost WHERE (postType='3' OR postType = '4' or postType ='2') OR ( userId = '".$this->session->userdata("userId")."' AND postType = '1')");
            return $query;
        }
        public function queryNewsfeedInvestor()
        {
            $query = $this->db->query("SELECT * FROM  userpost WHERE postType='3' OR postType = '4' or postType ='2' OR   postType = '1' ORDER by postDate desc");
            return $query;
        }
        public function queryNewsfeedInvestor1()
        {
            $query = $this->db->query("SELECT * FROM  userpost WHERE postType='3' OR postType = '4' or postType ='2' ORDER by postDate desc");
            return $query;
        }
        public function queryStartupLatest()
        {
            $query = $this->db->query("SELECT * from userpost v left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId  where postType = '2' group by postDate order by postDate desc");
            return $query;
        }
        public function queryStartupOnfire()
        {
            $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_comments from comment_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId  where postType = '2' group by c.postId order by number_of_comments desc");
            return $query;
        }
        public function queryStartupTop()
        {
            $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId where voteType = '1' AND postType = '2' group by c.postId order by number_of_votes desc");
            return $query;
        }
        public function queryMostD()
        {
            $query = $this->db->query("SELECT *, COUNT(c.postId) as number_of_votes from upvote_dtl c left join userpost v on c.postId = v.postId left join user_md b on v.userId = b.userId left join user_dtl d on b.userId = d.userId where voteType = '1' AND postType = '2' group by c.postId order by number_of_votes desc limit 1");
            return $query;
        }
        public function checkInvestorStatus()
        {
            $this->db->select('*');
             $this->db->from('user_md');
             $this->db->where('user_status','1');
             $this->db->where('userId',$this->session->userdata("userId"));
             $query = $this->db->get();
            $numrow= $query->num_rows();
            if($numrow){
                return true;
            }
            else return false;
        }
        public function checkInvestor($userId)
        {
            $this->db->select('*');
             $this->db->from('user_md');
             $this->db->where('user_Type','Investor');
             $this->db->or_where('user_Type','Company');
             $this->db->where('userId',$userId);
             $query = $this->db->get();
            $numrow= $query->num_rows();
            if($numrow){
                return true;
            }
            else return false;
        }
        public function checkmypost($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost');
             $this->db->where('postId',$postId);
             $this->db->where('userId',$this->session->userdata("userId"));
             $query = $this->db->get();
            $numrow= $query->num_rows();
            if($numrow){
                return true;
            }
            else return false;
        }

           public function checkUser1($userId)
        {
            if($userId==$this->session->userdata('userId')){
                return true;
            }else
            return false;
        }
        public function query1post($postId)
        {
             $this->db->select('*');
             $this->db->from('userpost');
             $this->db->where('postId',$postId);
             $query = $this->db->get();
             return $query;
        
        }
        public function comment($postId)
        {
             $this->db->select('*');
             $this->db->from('comment_dtl');
             $this->db->where('postId',$postId);
             $query = $this->db->get();
             return $query;
        
        }

        public function groupcreator($groupId,$userId)
        {
            $this->db->select('*');
            $this->db->from('group_md');
            $this->db->where('groupId',$groupId);
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $row = $query->num_rows();
            if($row){
                return true;
            }
            else return false;
        }
        public function groupmember($groupId,$userId)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('groupId',$groupId);
            $this->db->where('userId',$userId);
            $query = $this->db->get();
            $row = $query->num_rows();
            if($row){
                return true;
            }
            else return false;
        }
        public function creatorview($groupId)
        {
            $this->db->select('*');
            $this->db->from('group_md');
            $this->db->where('groupId',$groupId);
            $this->db->where('userId',$this->session->userdata('userId'));
            $query = $this->db->get();
            $row = $query->num_rows();
            if($row){
                return true;
            }
            else return false;
        }



        public function checkNewInvestor()
        {
             $this->db->select('user_status,userId');
             $this->db->from('user_md');
             $this->db->where('userId',$this->session->userdata("userId"));
             $this->db->where('user_status','0');
             $query = $this->db->get();
             $numrow = $query->num_rows();
             if($numrow)
             {
                return true;
             }else
                return false;
        
        }

        public function checkPostType($postId)
        {
          
             $this->db->select('postType,postId');
             $this->db->from('userpost');
             $this->db->where('postId',$postId);
             $this->db->where('postType','2');
             $query = $this->db->get();
             $numrow = $query->num_rows();
             if($numrow)
             {
                return true;
             }else
                return false;
        }


        public function getPostType($postId)
        {
            $this->db->select('postId,postType');
            $this->db->from('userpost');
            $query =$this->db->where('postId',$postId);
            $query = $this->db->get();
            $row = $query->row_array();
            return $row['postType'];
        }
        public function getAdmingroup($groupId)
        {
            $this->db->select('groupId,userId');
             $this->db->from('group_md');
             $this->db->where('groupId',$groupId);
             $query = $this->db->get();
              $row = $query->row_array();
             return $row['userId'];

        }

        public function getGroupname($groupId)
        {
            $this->db->select('groupId,groupname');
             $this->db->from('group_md');
             $this->db->where('groupId',$groupId);
             $query = $this->db->get();
              $row = $query->row_array();
             return $row['groupname'];

        }
        public function getGroupDes($groupId)
        {
            $this->db->select('groupId,groupdescription');
             $this->db->from('group_md');
             $this->db->where('groupId',$groupId);
             $query = $this->db->get();
              $row = $query->row_array();
             return $row['groupdescription'];

        }

        public function groupdetails1()
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('userId', $this->session->userdata("userId"));
            $this->db->where('status', '3');
            $query = $this->db->get();
            return $query;
        }


        public function checkPassword()
        {
             $this->db->select('userId,user_password');
             $this->db->from('user_md');
             $this->db->where('userId',$this->session->userdata("userId"));
             $query = $this->db->get();
              $row = $query->row_array();
             return $row['user_password'];
        }
    }


?>