<?php 

    class Post extends CI_Model 
    {
        public function upvotecount($postId)
        {
                $this->db->where('postId', $postId);
                $query = $this->db->get('upvote_dtl');
                echo $query->num_rows()." Upvotes";

        }
        
    	public function validUpvote($postId)
    	{
    		$this->db->where('postId', $postId);
    		$this->db->where('userId', $this->session->userdata('userId'));
            $query = $this->db->get('upvote_dtl');
            if($query->num_rows()>0){
            	return 'true';
            }
            else
            	return 'false';
    	
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
        public function showComments($postId,$type)
        {
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('comment_dtl d', 'd.userId=a.userId','left');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId','left');
            $this->db->where('postId',$postId);
            $this->db->where('commentType',$type);
            $this->db->order_by('commentDate', 'ASC');
            $query = $this->db->get();
             return $query;
        }

        public function existsMember($groupId , $userId)
        {
            $this->db->select('*');
            $this->db->from('group_ext');
            $this->db->where('userId',$userId);
            $this->db->where('groupId',$groupId);
            $query=$this->db->get();
            $numrows = $query->num_rows();
            if($numrows>0)  return true;
            else return false;
        }

        public function searchIdea($key)
        {
            $this->db->select('*');
            $this->db->from('userpost a');
            $this->db->join('user_dtl b', 'b.userId=a.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
            $this->db->join('user_md e', 'e.userId=a.userId','left');

            $this->db->like('a.postTitle', $match = $key, $side = 'both');
            $this->db->or_like('a.postContent', $match = $key, $side = 'both');
             $this->db->where('a.postType','1');
            $query = $this->db->get();
             return $query;
        }
        public function commentCount($postId)
        {
            $this->db->where('postId', $postId);
            $query = $this->db->get('comment_dtl');
            echo $query->num_rows()." comments";
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
            if($this->getUserType($this->session->userdata('userId'))=='Ideator')
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
            $this->db->select('*');
            $this->db->from('user_md a');
            $this->db->join('user_dtl b', 'a.userId=b.userId','left');
            $this->db->join('company_dtl c', 'c.userId=a.userId','left');
            $this->db->join('userpost d', 'd.userId=a.userId');
            $this->db->join('userpost_ext f','f.postId=d.postId','left');
            $this->db->join('avatar_dtl e', 'e.userId=d.userId');
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
            $this->db->where('d.postType','1');
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
            $this->db->where('d.postType','1');
            $this->db->order_by('postDate', 'DESC');
            $this->db->limit('5');
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
            $this->db->where('d.postType','investpost');
            $this->db->order_by('postDate', 'DESC');
            $this->db->limit('5');
            $query = $this->db->get();
            return $query;
        }
    }


?>