<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?> 
     
     <br/> <br/>
      <p class="lead text-center text-muted">OUR LATEST BOOKS</p>
      <br><br>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>

    <br/><br/>
<p class="lead text-center text-muted">NEW ARRIVALS</p>
<br><br>
<div class="row">
  <?php
  // Retrieve different books for New Arrivals section
  $newArrivalsQuery = "SELECT * FROM books ORDER BY book_title DESC LIMIT 4";
  $newArrivalsResult = mysqli_query($conn, $newArrivalsQuery);

  // Loop through the retrieved books for New Arrivals
  while ($book = mysqli_fetch_assoc($newArrivalsResult)) {
  ?>
  <div class="col-md-3">
    <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
      <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
    </a>
  </div>
  <?php } ?>
</div>


<br/><br/>
<p class="lead text-center text-muted">BEST SELLERS</p>
<br><br>
<div class="row">
  <?php
  // Retrieve different books for New Arrivals section
  $newArrivalsQuery = "SELECT * FROM books ORDER BY book_author DESC LIMIT 4";
  $newArrivalsResult = mysqli_query($conn, $newArrivalsQuery);

  // Loop through the retrieved books for New Arrivals
  while ($book = mysqli_fetch_assoc($newArrivalsResult)) {
  ?>
  <div class="col-md-3">
    <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
      <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
    </a>
  </div>
  <?php } ?>
</div>
  </div>
  <hr><hr>
  <!-- Testimonial Area Start -->
  <div class="testimonial-area text-center">
    <div class="container">
      <div class="testimonial-title">
        <h2>OUR TESTIMONIAL</h2>
        <p>What our clients say about the books reviews and comments</p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial-list">
            <div class="single-testimonial">
              <img src="bootstrap/img/testimonial/1.jpg" alt="">
              <div class="testmonial-info clearfix">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> 
                <div class="testimonial-author text-center">
                  <h3>JOHN DOE</h3>
                  <p>The Author</p>
                </div>
              </div>
            </div>
            <div class="single-testimonial">
              <img src="bootstrap/img/testimonial/2.jpg" alt="">
              <div class="testmonial-info clearfix">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> 
                <div class="testimonial-author text-center">
                  <h3>Er Er</h3>
                  <p>CEO</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!-- Testimonial Area End -->
<br><br>
  		<!-- News Letter Area Start -->
      <div class="newsletter-area text-center">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="newsletter-title">
		                    <h2>SUBSCRIBE OUR NEWSLETTER</h2>
		                    <p>Subscribe here with your email us and get up to date.</p>
		                </div>
		                <div class="letter-box">
		                    <form action="#" method="post" class="search-box">
		                        <div>
                                    <input type="text" placeholder="Subscribe us">
                                    <button type="submit" class="btn btn-search">SUBSCRIBE<span><i class="flaticon-school-1"></i></span></button>
                                </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- News Letter Area End -->

    <!-- Footer Area Start -->
		<footer>
		    <div class="footer-top-area">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-3 col-sm-8">
		                    <div class="footer-left">
		                        <a href="index.php">
		                            <img src="bootstrap/img/logo-2.png" alt="">
		                        </a>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
		                        <ul class="footer-contact">
		                            <li>
		                                <i class="flaticon-location"></i>
		                                450 fifth Avenue, 34th floor. NYC
		                            </li>
		                            <li>
		                                <i class="flaticon-technology"></i>
		                                (+800) 123 4567 890
		                            </li>
		                            <li>
		                                <i class="flaticon-web"></i>
		                                info@bookstore.com
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 col-sm-4">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Information</h2>
		                        <ul class="footer-list"> 
		                            <li><a href="about.php">About Us</a></li>
		                            <li><a href="#">Delivery Information</a></li>
		                            <li><a href="#">Privacy & Policy</a></li>
		                            <li><a href="#">Terms & Conditions</a></li>
		                            <li><a href="#">Manufactures</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 hidden-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">My Account</h2>
		                        <ul class="footer-list">
		                            <li><a href="my-account.php">My Account</a></li>
		                            <li><a href="account.html">Login</a></li>
		                            <li><a href="cart.html">My Cart</a></li>
		                            <li><a href="wishlist.html">Wishlist</a></li>
		                            <li><a href="checkout.html">Checkout</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 hidden-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Shop</h2>
		                        <ul class="footer-list">
		                            <li><a href="#">Orders & Returns</a></li>
		                            <li><a href="#">Search Terms</a></li>
		                            <li><a href="#">Advance Search</a></li>
		                            <li><a href="#">Affiliates</a></li>
		                            <li><a href="#">Group Sales</a></li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-3 col-sm-8">
		                    <div class="single-footer footer-newsletter">
		                        <h2 class="footer-title">Our Newsletter</h2>
		                        <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</p>
		                        <form action="#" method="post">
		                            <div>
		                                <input type="text" placeholder="email address">
		                            </div>
		                            <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
		                            <i class="flaticon-networking"></i>
		                        </form>
		                        <ul class="social-icon">
		                            <li>
		                                <a href="#">
		                                    <i class="flaticon-social"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="#">
		                                    <i class="flaticon-social-1"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="#">
		                                    <i class="flaticon-social-2"></i>
		                                </a>
		                            </li>
		                            <li>
		                                <a href="#">
		                                    <i class="flaticon-video"></i>
		                                </a>
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-2 col-sm-4 visible-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Shop</h2>
		                        <ul class="footer-list">
		                            <li><a href="#">Orders & Returns</a></li>
		                            <li><a href="#">Search Terms</a></li>
		                            <li><a href="#">Advance Search</a></li>
		                            <li><a href="#">Affiliates</a></li>
		                            <li><a href="#">Group Sales</a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="footer-bottom">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
                            <div class="footer-bottom-left pull-left">
                                <p>Copyright &copy; 2016 <span><a href="#">DevItems</a></span>. All Right Reserved.</p>
                            </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="footer-bottom-right pull-right">
		                        <img src="bootstrap/img/paypal.png" alt="">
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		<!-- Footer Area End -->        
  <script>
    // Testimonial Slideshow
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("single-testimonial");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 5000); // Change slide every 5 seconds
    }

    function prevSlide() {
      slideIndex--;
      if (slideIndex < 1) {
        slideIndex = slides.length;
      }
      showSlides();
    }

    function nextSlide() {
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      showSlides();
    }
  </script>



<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>