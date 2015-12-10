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
        

      
}
?>