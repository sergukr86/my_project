<?php
include "header.php";
?>
<main role="main">
  <div class="container">
    <div class="row mt50">
      <div class="col-md-12">
        <h2 class="text-center">Gallery Colorbox</h2>
      </div>
      <div class="col-md-10">
        <a class="gal" href="img/Полёт.jpg" title="Plane"><img src="img/Полёт.jpg" width="200" height="150" alt=""></a>
        <a class="gal" href="img/volley.jpg" title="Volik"><img src="img/volley.jpg" width="100" height="150" alt=""></a>
        <a class="gal" href="img/прыжок.jpg" title="Jump"><img src="img/прыжок.jpg" width="200" height="150" alt=""></a>
      </div>
      <div class="col-md-6 mt50">
        <a href="#inline_content" class="inline btn btn-lg btn-info">Inline Content</a>
        <div style="display:none">
          <div id="inline_content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut nulla quae sunt, ipsa molestiae atque, rem quaerat. Ea temporibus reiciendis omnis vero deserunt quae, voluptas distinctio quos consequatur laudantium nobis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing mt50">
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
            </div><!-- /.container -->
            
            <!-- FOOTER -->
            <?php
            include "footer.php";
            ?>