 <script>
     function loadNowPlaying1(){
               
                $("#session").load("<?php echo base_url().'pages/sessionpoke'; ?>"); }
                setInterval(function(){loadNowPlaying1()}, 1000);

        $(function () {
     
         $('button[name="poke"]').click(function(e){
        var userId = $(this).attr("value");
        
          e.preventDefault();
            var dataString = 'userId='+ userId;
          $.ajax({
            type: 'post',
            url:"<?php echo base_url().'pages/getAll/'?>",
            data:dataString,
            success: function (data) {
        
              document.getElementById("userid").value = userId;
            }
          });

        });
            $('button[name="search1"]').click(function(e){
      
          var key = $("#key").val();
          e.preventDefault();
            var dataString = 'key='+ key;
          $.ajax({
            type: 'post',
            url:"<?php echo base_url().'pages/searchList'?>",
            data:dataString,
            success: function (data) {
              $('#listuser').html(data);
            }
          });

        });



      });


      </script>