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

    <script type="text/javascript">
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
          $('button[name="approve"]').click(function(e){
            var key = $("#approve").val();
            e.preventDefault();
              var dataString = 'key='+ key;
            $.ajax({
              type: 'post',
              url:"<?php echo base_url().'pages/editStatusInvestor'?>",
              data:dataString,
              success: function (data) {
                alert('approved');
                 $("#request").load("<?php echo base_url().'pages/showrequestInvestor'; ?>");


              }
            });

          });

    </script>
