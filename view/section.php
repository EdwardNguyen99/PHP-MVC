<section>
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="title">
                        <i class="fa fa-bars"></i>  
                        PRODUCT LIST</div>
                      <div class="category">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">PLAYSTATION 4</a>
                                <a href="#" class="list-group-item">PLAYSTATION 5</a>
                                <a href="#" class="list-group-item">NINTENDO SWITCH</a>
                                <a href="#" class="list-group-item">GAMES</a>
                                <a href="#" class="list-group-item">WATCH</a>
                                <a href="#" class="list-group-item">MACBOOK</a>
                                <a href="#" class="list-group-item">IPAD</a>
                                <a href="#" class="list-group-item">IPHONE</a>
                                <a href="#" class="list-group-item">PS VISTA</a>
                                <a href="#" class="list-group-item">ACCESSORIES</a>
                            
                            </div>
                        </div>
                        <div class="title">
                            <i class="fa fa-bars"></i> 
                            HOT SALE</div>
                        <div class="best-saller">
                            <div class="product-sub">
                                <img src="img/slide-ps1.png"> <br>
                                <h4 style="text-align:center">PES 2020</h4> 
                                <hr>
                            </div>
                            <div class="product-sub">
                                <img src="img/23.jpg"> <br>
                                <h4 style="text-align:center">GOD OF WARS</h4> 
                                <hr>
                            </div>
                            <div class="product-sub">
                                <img src="img/rs4.webp"> <br>
                                <h4 style="text-align:center">RESIDENT EVIL</h4> 
                                <hr>
                            </div>
                            <div class="product-sub">
                                <img src="img/ninja-gaiden-ps4.900x.jpg"> <br>
                                <h4 style="text-align:center">NINJA GARDEN 5</h4> 
                                <hr >
                            </div>
                        </div>
                  </div>    
                  <div class="col-md-9 p-l-0">
                    <ul class="breadcrumb">
                      <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home </a></li>
                      <li><a href="#">List Products</a></li>
                      <li><a href="#">Products</a></li>
                      <li class="active"><a href="#">Contact</a></li>
                      <li><a href="#">ABOUT</a></li>
                    </ul>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        
                    
                        <div class="carousel-inner">
                          <div class="item active">
                            <img src="img/slider_img_fix1.webp" style="width:100%; height:400px">
                            <div class="carousel-caption">
                            
                              </div>
                          </div>
                          <div class="item">
                            <img src="img/slider_img_fix3.webp"  style="width:100%;height:400px">
                          </div>
                          <div class="item">
                            <img src="img/slider_img_fix6.webp"  style="width:100%;height:400px">
                          </div>
                          <div class="item">
                            <img src="img/slider_img_fix8.webp"  style="width:100%;height:400px">
                          </div>
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>  
                      <div class="introduce">
                          <h1>HALO SHOP - NICE TO SERVICE</h1>
                          <p>
                              Naomi leads the way.<a href="" style="color:#0563ff">Three major titles.</a> Two in Queens. One world-changing voice. Congrats,Naomi
                          </p>
                          <p>
                             <span style="color:red;">A modern PLAY STATION 5</span>specs and news fpr Sony's PlayStation 5<span style="color:red;"> Lead system architect Mark Cerny discussed the PS5's system architecture, revealing the inner workings of the PS5.</span>
                              a streamlined, digital-only console without a disc drive.
                          </p>
                      </div>
                        <div class="title-steel"> 
                            <span class="text">GAMES</span>
                            <span class="more"><a href="">View All</a></span>
                        </div>
                       
                            <div class="row">
                            <?php $bg = $dt->Game(4);?>
                            <?php while ($row = $bg ->fetch_assoc() ) { ?>
                                <div class="col-md-4">
                                    <div class="product">
                                        <a href="view/viewgame.php"> <img src="img/123.jpeg" class="img-responsive center-block"></a>
                                            <h3>NBA 2K21</h3>
                                            <h2 style="text-align:center">1,380,000d</h2>
                                        
                                    </div>
                                    <div class="product">
                                        <a href="view/viewgame.php"> <img src="img/12.jfif" class="img-responsive center-block"></a>
                                        <h3>SONIC </h3>
                                        <h2 style="text-align:center">690,000d</h2>
                                    
                                    </div>
                                </div>
                            <?php } ?>
                                <!-- <div class="col-md-4">
                                    <div class="product">
                                       
                                        <a href="view/viewgame.php"> <img src="img/12.jpg" class="img-responsive center-block"></a>
                                        <h3>DRAGON BALL Z:Kakarot</h3>
                                        <h2 style="text-align:center">1,480,000d</h2>
                                    
                                    </div>
                                    <div class="product">
                                        <a href="view/viewgame.php"> <img src="img/rd.jpg" class="img-responsive center-block"></a>
                                        <h3>Red Dead Redemption 2</h3>
                                        <h2 style="text-align:center">1,500,000</h2>
                                    </div>    
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="product">
                                       
                                        <a href="view/viewgame.php"> <img src="img/FIFA.jpg " class="img-responsive center-block"></a>
                                        <h3>EA SPORTS UTF</h3>
                                        <h2 style="text-align:center">1,400.000d</h2>
                                    </div>
                                    <div class="product">
                                        <a href="view/viewgame.php"> <img src="img/images.jfif" class="img-responsive center-block"></a>
                                        <h3>DIABLO 3</h3>
                                        <h2 style="text-align:center">1,400.000d</h2>
                                </div> -->
                            </div>
                       
                  </div>
              </div>
          </div>
      </section>