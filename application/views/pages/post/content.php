       <!-- Post -->
        <div class="content-wrapper">
          
                      <?php  foreach($data as $userdtl):?>
            <?php foreach($postDetail as $postdtl):?>

          <div class="row">
          
            <div class="col-md-12">
            <!-- Box Comment -->
              <div class="box box-widget">
                <div class='box-header with-border'>
                  <div class='user-block'>
                    <img class='img-circle' src='<?php echo base_url();?>/user/<?php echo $postdtl['avatar_name']?>' alt='user image'>
                    <span class='username'>
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
                      </a>
                      </span>
                    &nbsp;&nbsp;&nbsp;<button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:Gold"></i> <span class="label label-primary">10</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:Silver"></i><span class="label label-primary">5</span> </button><button class='btn btn-default btn-xs'><i class='fa fa-star' style="color:SandyBrown "></i><span class="label label-primary">20</span> </button>
                    <span class='description'>    <?php echo $postdtl['postDate'];?></span>
                  </div><!-- /.user-block -->
                  <div class='box-tools'>

                  
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='box-body'>
                  <h5><b><a href="" ><?php echo $postdtl['postTitle'];?></a></b></h3>
                  <p>
                    <?php 
                      $query=$this->post->showImage($postdtl['postId']);
                      foreach ($query->result_array() as $row) {
                        echo "<img src='".base_url().$row['extContent']."' height='200px' width='200px'>"; 
                      }
                    ?>
                  </p>

                  <p><h4><?php echo $postdtl['postContent'];?></h4></p>
                  <p>
                    <?php 
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
                  <form method="POST" action="<?php echo base_url()."pages/upvote";?>" name="form"  onsubmit="return saveScrollPositions(this);"> 
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
                  <span class='pull-right text-muted'><?php $this->post->upvotecount($postdtl['postId']);?> - 3 comments</span>
                </div><!-- /.box-body -->
               

                          
              </div><!-- /.box -->
              
                  </div>
                  </div>

<?php  endforeach;?>

<?php  endforeach;?>
</div>