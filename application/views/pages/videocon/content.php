<div class="content-wrapper">

   

  <div class="col-xs-2"></div>
    <button id="openNewSessionButton">Open New Room</button>

  <section id="local-media-stream">
  <style>
    video {
    width: 25%;
    }
    </style>
  </section>
  <script>
  
  var connection = new RTCMultiConnection().connect('<?php echo $groupId;?>');
  document.querySelector('#openNewSessionButton').onclick = function() {
      connection.open('<?php echo $groupId;?>');
      
  };
    connection.onstream = function(e) {
            var mediaElement = e.mediaElement;
            if (e.type === 'remote') document.getElementById('local-media-stream').appendChild(mediaElement);
            if (e.type === 'local') document.getElementById('local-media-stream').appendChild(mediaElement);
        };
  </script>

</div><!-- /.row -->