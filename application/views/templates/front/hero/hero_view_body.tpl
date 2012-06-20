<div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
     <div id="myCarousel" class="carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
          <div class="active item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 1</h4>
                  <p>Text - 1</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 2</h4>
                  <p>Text - 2</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 3</h4>
                  <p>Text - 3</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 4</h4>
                  <p>Text - 4</p>
                </div>
          </div>
          <div class="item">
          	<img src="images/heroTempPics/slider.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Header - 5</h4>
                  <p>Text - 5</p>
                </div>
          </div>
        </div>  
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <!--  <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>-->
	
      <hr />
      <!-- Example row of columns -->
      <div class="row">
       {foreach from = $frontItems item = item}
        <div class="span4">
          <h2>{$item.icerikAdi}</h2>
           <p>{$item.icerikOzet}</p>
          <p>Devamı : {$item.icerikLink}</p>
        </div>
 	    {/foreach}       
      </div>
      <hr>

     