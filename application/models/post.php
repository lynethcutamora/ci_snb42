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
                $this->db->from('userpost a');
                $this->db->join('investor_dtl b','b.postId=a.postId','left');
                $this->db->where('a.postType',$groupId);
                $query=$this->db->get();

                return $query;
        }
          public function showImage($postId)
        {
                $this->db->select('*');
                $this->db->from('userpost a');
                $this->db->join('userpost_ext b','b.postId=a.postId','left');
                $this->db->where('b.postId',$postId);
                $this->db->where('b.extType','1');

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
        

      
}
?>