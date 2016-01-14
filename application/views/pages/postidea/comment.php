    <?php  foreach($data as $userdtl):?>
  <?php foreach($alldata as $row):?>
 <div class='box-footer box-comments'>
                           
                            <div class='box-comment'>
                              <!-- User image -->
                              <img class='img-circle img-sm' src='<?php echo base_url();?>images/team/index3.jpg' alt='user image'>
                              <div class='comment-text'>
                                <span class="username">
                                  Edelito Albaracin Jr.
                                  <span class='text-muted pull-right'>8:03 PM Today</span>
                                </span><!-- /.username -->
                                The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English.<br/>
                                <button class='btn btn-default btn-xs'><i class='fa fa-thumbs-o-up'></i> Upvote</button>
                                <button class='btn btn-default btn-xs'><i class='fa fa-reply'></i> Reply</button><br/>
                              
                            
                              </div><!-- /.comment-text -->
                            </div><!-- /.box-comment -->
                          </div><!-- /.box-footer -->
                          <?php  endforeach;?>
                      <?php  endforeach;?>