 <script type="text/javascript">

function saveScrollPositions(theForm) {

if(theForm) {

var scrolly = typeof window.pageYOffset != 'undefined' ? window.pageYOffset : document.documentElement.scrollTop;

var scrollx = typeof window.pageXOffset != 'undefined' ? window.pageXOffset : document.documentElement.scrollLeft;

theForm.scrollx.value = scrollx;

theForm.scrolly.value = scrolly;

}

}

</script>
 <div class="content-wrapper">
 <div class="row">
  <br>
  <div class="col-md-1">  </div>

<div class="col-md-10">
              <!-- Box Comment -->
              <?php foreach($postDetail as $postdtl):?>
              <div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                     <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $postdtl['avatar_name']?>' alt='user image'>
                     <span class="username">
                    <a href="#">
                         <?php 
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

                          ?>
                    </a></span>
                    <span class="description"> <?php echo $postdtl['postDate'];?></span>
                  </div><!-- /.user-block -->
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <h5><b><a href="<?php echo base_url()."pages/post/".$postdtl['postId'];?>" ><?php echo $postdtl['postTitle'];?></a></b></h3>
                  <p>
                    <?php 
                      $query= $this->post->showImage($postdtl['postId']);

                      foreach ($query->result_array() as $row) {
                        echo "<img src='".base_url().'/post_image/'.$row['extContent']."' height='200px' width='200px'>"; 
                      }
                    ?>
                  </p>  
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $postdtl['postContent'];?>
                  <p>
                    <?php 
                      $postId = $postdtl['postId'];
                      $query=$this->post->showLinks($postdtl['postId']);

                      foreach ($query->result_array() as $row) {
                        echo "<p>Related Links:</p>";
                        $myArray = explode(',', $row['extContent']);
                           foreach ($myArray as $row) {
                            
                            echo "<a href='http://".$row."' target='_blank'>".$row."</a><br>"; 
                            }
                      }
                    ?>
                  </p>
                      <table><tr><td>
                  <button class='btn btn-default btn-xs'><i class='fa fa-share'></i> Share</button></td>
                  <form method="POST" action="<?php echo base_url()."pages/upvote/".$postdtl['userId'];?>" name="form"  onsubmit="return saveScrollPositions(this);"> 
                  <input type="hidden" name="scrollx" id="scrollx" value="0" />

                     <input type="hidden" name="scrolly" id="scrolly" value="0" />
                    <input type="text" hidden="true" name="postId" value="<?php echo $postdtl['postId'];?>">
                      <?php if($this->post->validUpvote($postdtl['postId'])=='false'){
                echo "<td><button id='add' class='btn btn-default btn-xs'><i class='fa fa-arrow-circle-up'></i> Upvote</button> </td></form>";
               }
                else{
                  echo "<td><button class='btn btn-default btn-xs disabled' disabled><i class='fa fa-arrow-circle-up'></i> Upvoted</button></td></form>";
                }?></table>
                </form>
                  <span class='pull-right text-muted'><?php $this->post->upvotecount($postdtl['postId']);?> - <?php $this->post->commentCount($postdtl['postId']);?></span>
                
                </div><!-- /.box-body -->
                <div class="box-footer box-comments">
                  <?php foreach ($comments as $comment):?>
                  <div class="box-comment">
                    <!-- User image -->
                    <img class='img-circle' src='<?php echo base_url();?>user/<?php echo $comment['avatar_name']?>' alt='user image'>
                     <div class="comment-text">
                      <span class="username">
                         <?php 
                                  if($comment['user_Type']=='Ideator'||$comment['user_Type']=='Investor')
                                  {
                                      if($comment['user_midInit']==null)
                                         echo $comment['user_fName']."  ".$comment['user_lName'];
                                       else
                                         echo $comment['user_fName']." ".$comment['user_midInit'].". ".$comment['user_lName'];
                                  }
                                  else
                                  {
                                    echo $comment['company_name'];
                                  }
                          ?>
                        <span class="text-muted pull-right"> <?php echo $comment['commentDate'];?></span>
                      </span><!-- /.username -->
                     <?php 
                        if($comment['disallowed']>0){
                          echo '<i class="fa fa-warning pull-right" style="color:#f56954;">&nbsp;&nbsp;<span class="text-muted" style="color:#f56954;">(This comment contains disallowed words)</span>&nbsp;&nbsp;<a href="#">report user</a></i>'.$comment['commentContent'].'';
                        }else
                          echo $comment['commentContent'];

                      ?>
                    </div><!-- /.comment-text -->
                  </div><!-- /.box-comment -->
                      <?php  endforeach;?>
             
                </div><!-- /.box-footer -->
                <?php foreach ($data as $data):?>
                  
                <div class="box-footer">
                  <form action="<?php echo  base_url()."pages/comment/".$postId;?>" method="post" name='theForm'>

                   <img class='img-responsive img-circle img-sm' src='<?php echo base_url();?>user/<?php echo $data['avatar_name']?>' alt='user image'>
                     
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="hidden" name="scrollx" id="scrollx" value="0" />
                     <input type="hidden" name="scrolly" id="scrolly" value="0" />
                      <input class="form-control input-sm" placeholder="Press enter to post comment" type="text" name="commentContent">
                    </div>
                  </form>
                </div><!-- /.box-footer -->
                 <?php  endforeach;?>
              </div><!-- /.box -->
              <?php  endforeach;?>

            </div>
        </div>
      </div>
      <?php

$scrollx = 0;

$scrolly = 0;

if(!empty($_REQUEST['scrollx'])) {

$scrollx = $_REQUEST['scrollx'];

}

if(!empty($_REQUEST['scrolly'])) {

$scrolly = $_REQUEST['scrolly'];

}

?>

<script type="text/javascript">

  window.scrollTo(<?php echo "$scrollx" ?>, <?php echo "$scrolly" ?>);

</script>
