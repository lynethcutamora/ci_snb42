      <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Post
            <!-- <small>"Start with an idea and boost it here."</small> -->
          </h1>
          <!-- <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
        <!-- Callouts -->
        <?php foreach($postDetail as $row): ?>
        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-edit"></i>
              <h3 class="box-title"><?php echo strtoupper($row['postTitle']); ?></h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                  <!-- form start -->
                 <form method="post" action="" id="upload_file" enctype="multipart/form-data" class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="producttitle" class="col-sm-2 control-label" >Product Name*</label>
                        <div class="col-sm-10">
                        <?php echo form_error('ideatitle'); ?>
                          <input type="hidden" class="form-control" name="postid" value="<?php echo $row['postId']; ?>"/>
                          <input type="text" class="form-control" name="producttitle" id="producttitle" placeholder="Product Title" value="<?php echo strtoupper($row['postTitle']); ?>"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ideatitle" class="col-sm-2 control-label">Category*</label>
                        <input type="hidden" class="form-control" name="extid" value="<?php echo $this->post->getCategoryId($row['postId']); ?>"/>
                        <div class="col-sm-4">
                          <select name="categorytxt" id="categorytxt" class="form-control" onChange="changeCategory(this)">
                            <option value="1">-- select category --</option>
                            <option value="androidapp"<?php if($this->post->getPostCategory($row['postId'])=="androidapp"){echo "selected";} ?>>android application</option>
                            <option value="website" <?php if($this->post->getPostCategory($row['postId'])=="website"){echo "selected";} ?>>web site</option>
                            <option value="desktopapp" <?php if($this->post->getPostCategory($row['postId'])=="desktopapp"){echo "selected";} ?>>desktop application</option>
                         </select>
                        </div>
                        <label for="ideatitle" name="optional1" id="optional1" style="display:block" class="col-sm-2 control-label">/ others:</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="optional" id="optional" placeholder="Specify category" value="<?php echo $this->post->getPostCategory($row['postId']); ?>" style="display:block" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputDescription"  class="col-sm-2 control-label">Description*</label>
                        <div class="col-sm-10">
                         <?php echo form_error('inputDescription'); ?>
                          <textarea class="form-control"name="inputDescription" id="inputDescription" placeholder="Description" ><?php echo $row['postContent']; ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="downloadlink" class="col-sm-2 control-label">Links</label>
                        <div class="col-sm-10">
                        <?php echo form_error('downloadlink'); ?>
                          <input type="hidden" class="form-control" name="extid1" value="<?php echo $this->post->getRelatedLinksId($row['postId']); ?>"/>
                          <input type="text" class="form-control" name="downloadlink" id="downloadlink" placeholder="Download Link" <?php echo "value=\"".$this->post->getLinkEdit($row['postId'])."\"" ?> />
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                    <table>
                        <tr>
                          <td>
                            <div class="col-md-2">
                              <input type="hidden" class="form-control" name="extid2" value="<?php echo $this->post->getPostImgId($row['postId']); ?>"/>
                              <img src="<?php echo base_url().'/post_image/'.$this->post->getpostImg($row['postId']).''; ?>" height="100px" width="100px" alt="Attachment image">
                            </div>
                          </td>
                          <td>
                            <small>Upload Product Branding (logo)</small>
                            <input type="file" name="pic" id="pic" size="20" />
                            <div id="files"></div>
                          </td>
                        </tr>
                      </table>
                          <button class="btn btn-info pull-right" type="submit" id="updateproduct" name="updateproduct">Update Product</button>
                    </div>
                  </form>
            </div>
          </div><!-- /.box -->
        <?php endforeach; ?>
        </div>
           
        </section><!-- /.content -->
      </div><!-- /.container -->
      </div><!-- /.content-wrapper -->

<script>
 function changeCategory(obj){
   var x = document.getElementById("categorytxt").value;

   if(x=='1'){
    document.getElementById("optional").style.display="block";
    document.getElementById("optional1").style.display="block";
   }else{
    document.getElementById("optional").style.display="none";
    document.getElementById("optional1").style.display="none";
  }
} 
</script>

<script>
  $('button[name="updateproduct"]').click(function(e){
    var form = new FormData(document.getElementById('upload_file'));
         
    e.preventDefault();
            
    $.ajax({
      type: 'post',
      url:"<?php echo base_url().'pages/upateStartupProduct'?>",
        data:form,
        mimeType:"multipart/form-data",
        cache: false,
        contentType: false, //must, tell jQuery not to process the data
        processData: false, //must, tell jQuery not to set contentType
        success: function (data) {
         
          alert("successfully updated");
      }
    });
  });

</script>