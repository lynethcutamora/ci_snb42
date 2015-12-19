<?php 

class Post extends CI_Model {


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
        public function link($content, $type,$postId)
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
        if($numrows>0)
            return true;
        else
            return false;
    }

    public function searchIdea($key)
    {

        $this->db->select('*');
        $this->db->from('userpost a');
        $this->db->join('user_dtl b', 'b.userId=a.userId','left');
        $this->db->join('company_dtl c', 'c.userId=a.userId','left');
        $this->db->join('avatar_dtl d', 'd.userId=a.userId','left');
        $this->db->like('a.postTitle', $match = $key, $side = 'both');
        $this->db->or_like('a.postContent', $match = $key, $side = 'both');
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
        $this->db->like('a.groupname', $match = $key, $side = 'both');
        $this->db->or_like('a.groupdescription', $match = $key, $side = 'both');
        $query = $this->db->get();
         return $query;
    }
      
}
?>