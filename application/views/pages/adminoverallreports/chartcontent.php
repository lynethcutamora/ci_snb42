<!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="<?php echo base_url(); ?>plugins/flot/jquery.flot.min.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="<?php echo base_url(); ?>plugins/flot/jquery.flot.resize.min.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="<?php echo base_url(); ?>plugins/flot/jquery.flot.pie.min.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="<?php echo base_url(); ?>plugins/flot/jquery.flot.categories.min.js"></script>
    <!-- Page script -->	
    <script>
      $(function () {
   /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {label: "Company", data: <?php
                         $query = $this->db->query("SELECT * from user_md where user_Type = 'Company'");
                         $company = $query->num_rows(); 
                           echo json_encode($company);
                          ?>, color: "#3c8dbc"},
          {label: "Investor", data: <?php
                         $query = $this->db->query("SELECT * from user_md where user_Type = 'Investor'");
                         $investor = $query->num_rows(); 
                           echo json_encode($investor);
                          ?>, color: "#0073b7"},
          {label: "Ideator", data: <?php
                         $query = $this->db->query("SELECT * from user_md where user_Type = 'Ideator'");
                         $ideator = $query->num_rows(); 
                           echo json_encode($ideator);                
                          ?>, color: "#00c0ef"}
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */

      });

    

       $(function () {
   /*
         * DONUT CHART
         * -----------
         */
    
        var donutData = [
          {label: "Likes", data: <?php
                         $query = $this->db->query("SELECT * from upvote_dtl where voteType = '1'");
                         $like = $query->num_rows(); 
                           echo json_encode($like);
                          ?>, color: "#4ffdbc"},
          {label: "Comment", data: <?php
                         $query = $this->db->query("SELECT * from comment_dtl where commentType = '1'");
                         $comment = $query->num_rows(); 
                           echo json_encode($comment);
                          ?>, color: "#ff73b7"},
          {label: "Post Idea", data: <?php
                         $query = $this->db->query("SELECT * from userpost");
                         $post = $query->num_rows(); 
                           echo json_encode($post);
                          ?>, color: "#00ffff"}
        ];
        $.plot("#donut-chart1", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */

      });

       /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br>"
                + Math.round(series.percent) + "%</div>";
      }
    </script>