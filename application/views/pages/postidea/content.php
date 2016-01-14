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
    <div class="col-md-12">
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
