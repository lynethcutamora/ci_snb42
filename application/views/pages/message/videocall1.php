<!-- Content Wrapper. Contains page content -->
    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <div class="content-wrapper">
              <!-- Content Header (Page header) -->
      
        <!-- Main content -->
        <section class="content">
          <div class="row">
  <button type="button"  id="openNewSessionButton" class="btn btn-app"  style="background-color:#3C8DBC;color:white;">
                        <i class="fa fa-video-camera"></i>Call a conference               
                      </button>
                                      <section id="local-media-stream">
                                      <style>
                                        video {
                                        width: 50%;
                                        }
                                        </style>
                                      </section>
                                       <section id="local-media-stream1">
                                      <style>
                                        video {
                                        width: 50%;
                                        }
                                        </style>
                                      </section>
                                      <script>
                                      
                                     var connection = new RTCMultiConnection().connect('<?php echo $msgId;?>');
                                      document.querySelector('#openNewSessionButton').onclick = function() {
                                          connection.open('<?php echo $msgId;?>');
                                          
                                      };
                                   
                                        connection.onstream = function(e) {
                                                var mediaElement = e.mediaElement;
                                                if (e.type === 'remote') document.getElementById('local-media-stream').appendChild(mediaElement);
                                                if (e.type === 'local') document.getElementById('local-media-stream1').appendChild(mediaElement);
                                            };
                                      </script>
          </div><!-- /.row -->
        </section><!-- /.content -->
      
          </div><!-- /.row -->
