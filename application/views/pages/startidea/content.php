            <br>
                <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
            <div class="content-wrapper">
               <div class="col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Generate Title</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
             
                  <div class="box-body">
                    <div id="title"></div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Generate</button>
                  </div>
            
              </div>
              </div>
            </div>
            <script>
                $(document).ready(function() {
                  $("#btnSubmit").click(function(){
                    var result1 = ["integrated","parallel","virtual","interactive","responsive","synchronized","balanced","virtual","meta-level","optimized","active","parameterized","conceptual","scalable","dynamic","high-level","collaborative","reliable","open","coordinated"][Math.floor(Math.random() * 21)]
                    var result2 = [ "mobility","functional","programmable"  ,"distributed","logical" ,"digital" ,"concurrent" ,"knowledge-based ","multimedia" ,"binary","object-oriented","secure" ,"high-speed ",  "real-time","functional" ,"parallelizing", "watermarking"  ,"proxy","cloud-based","big data","bioinformatic"][Math.floor(Math.random() * 21)]
                    var result3 = [ "network","preprocessor","compiler","system","interface","protocol","architecture","database","algorithm","toolkit","display","technology","solution","language","agent","theorem prover","work cluster","cache","network","data center","hypervisor"][Math.floor(Math.random() * 21)]
                    var result4 = ["integrated","parallel","virtual","interactive","responsive","synchronized","balanced","virtual","meta-level","optimized","active","parameterized","conceptual","scalable","dynamic","high-level","collaborative","reliable","open","coordinated"][Math.floor(Math.random() * 21)]
                    var result5= [ "mobility","functional","programmable"  ,"distributed","logical" ,"digital" ,"concurrent" ,"knowledge-based ","multimedia" ,"binary","object-oriented","secure" ,"high-speed ",  "real-time","functional" ,"parallelizing", "watermarking"  ,"proxy","cloud-based","big data","bioinformatic"][Math.floor(Math.random() * 21)]
                    var result6= [ "network","preprocessor","compiler","system","interface","protocol","architecture","database","algorithm","toolkit","display","technology","solution","language","agent","theorem prover","work cluster","cache","network","data center","hypervisor"][Math.floor(Math.random() * 21)]
                    var sen1 = [ "for","related to","derived from","applied to","embedded in"][Math.floor(Math.random() *5)]
                    var sentence = [result1+" "+result2+" "+result3,result1+" "+result2+" "+result3+" "+sen1+" "+result4+" "+result5+" "+result6][Math.floor(Math.random() * 2)]

                    var vowels = ['A', 'E', 'I', 'O', 'U','a','e','i','o','u'];  
                   
                    if (jQuery.inArray(sentence.substring(0,1),vowels)!=-1) {  
                      var a = 'An';  
                    } else {  
                      var a = 'A';  
                    }  
                    
                        $("#title").html(a+" "+sentence);
                  }); 
              });
           </script>
