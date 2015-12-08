<?php 

class Post extends CI_Model {


        public function upvotecount($postId)
        {
                $this->db->where('postId', $postId);
                $query = $this->db->get('upvote_dtl');
                echo $query->num_rows()." Upvotes";

        }

        

      
}
?>