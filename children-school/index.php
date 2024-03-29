<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package children_School
 */

get_header();
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<title>International School System</title>

<?php wp_head();?>
</head>
<body>
 


<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php echo get_template_directory_uri();?>./assets/images/dummy.png" data-lazyload="<?php echo get_template_directory_uri();?>./assets/images/slider.jpg">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> Education Bright Future </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, <br/>
          pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum.</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="#"><i class="fas fa-edit"></i> Enroll Today</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="#"><i class="far fa-calendar-alt"></i> Schedule a Tour</a> </div>
      </li>
      <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="<?php echo get_template_directory_uri();?>./assets/images/slider1.jpg">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> International School </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, <br/>
          pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum.</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="#"><i class="fas fa-edit"></i> Enroll Today</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="#"><i class="far fa-calendar-alt"></i> Schedule a Tour</a> </div>
      </li>
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!-- School Start -->
<div class="our-course-categories-two ">
  <div class="container">
    <div class="categories_wrap">
      <ul class="row unorderList">
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="<?php echo get_template_directory_uri();?>./assets/images/teacher.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Expert teachers</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="<?php echo get_template_directory_uri();?>./assets/images/book.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Quality Education</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" >
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="<?php echo get_template_directory_uri();?>./assets/images/support.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Life Time Support</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="<?php echo get_template_directory_uri();?>./assets/images/scholarship.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Scholarship News</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- School End --> 

<!-- About Start -->
<div class="about-wrap  " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="<?php echo get_template_directory_uri();?>./assets/images/aboutImg.png" alt=""></div>
      </div>
      <div class="col-lg-5">
        <div class="about_box">
          <div class="title">
            <h1>Online Learing <span>PLatform</span></h1>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
          <ul class="edu_list">
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/education.png" alt=""></div>
                <div class="learn_info">
                  <h3>Special Education</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/class.png" alt=""></div>
                <div class="learn_info">
                  <h3>Honors classes</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/academy.png" alt=""></div>
                <div class="learn_info">
                  <h3>Traditional academies</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End --> 

<!-- Classes Start -->
<div class="class-wrap">
  <div class="container">
    <div class="title">
      <h1> Our Popular Classes </h1>
    </div>
    <ul class="owl-carousel  ">
      <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="images/education_img.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Education Programs System</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div>
          </div>
        </div>
      </li>
      <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="images/kid_game.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Games Program held in a Week</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor.</p>
            <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div>
          </div>
        </div>
      </li>
      <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="images/lab.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Labs Programs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor adipiscing consectetur.</p>
            <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- Classes End --> 

<!-- Choice Start -->
<div class="choice-wrap ">
  <div class="container">
    <div class="title">
      <h1>We Are The Best <span>Choice For Your Child</span></h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at eleifend est. Donec dictum at diam ut finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam diam magna, condimentum in nibh sed, mattis fermentum diam.</p>
    <div class="readmore"><a href="#">Contact Us</a></div>
  </div>
</div>
<!-- Choice End --> 

<!-- Video Start -->
<div class="video-wrap  ">
  <div class="container">
    <div class="title center_title">
      <h1>Watch Our Video</h1>
    </div>
    <div class="video">
      <div class="playbtn"><a data-fancybox="" href="https://youtu.be/PZY-hB2C_Iw"><span></span></a></div>
    </div>
  </div>
</div>
<!-- Video End --> 

<!-- Gallery Start -->
<div class="gallery-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="gallery_box">
          <div class="gallery_left">
            <div class="title">
              <h1>Photo Gallery</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            <div class="readmore"><a href="#">View All Gallery</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-1.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-1.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-2.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-2.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-3.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-3.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-4.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-4.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-5.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-5.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-6.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-6.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery End --> 

<!-- Testimonials Start -->
<div class="testimonials-wrap ">
  <div class="container">
    <div class="title">
      <p>Testimoinials</p>
      <h1> What Parents Say </h1>
    </div>
    <ul class="owl-carousel testimonials_list unorderList">
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-1.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-2.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. </p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-3.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-1.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- Testimonials End --> 

<!-- Enroll Start -->
<div class="choice-wrap enroll-wrap">
  <div class="container">
    <div class="title">
      <h1>Call To Enroll Your Child</h1>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at eleifend est. Donec dictum at diam ut finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent.</p>
    <div class="phonewrp"><img src="images/phone_icon.png" alt=""><a href="#">(770) 132 4657</a></div>
  </div>
</div>
<!-- Enroll End --> 

<!-- Teacher Start -->
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container">
    <div class="title center_title">
      <h1>Our Teachers</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers01.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Stella Roffin</h3>
            <div class="designation">Art teacher</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers02.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Chris Miller</h3>
            <div class="designation">Mathematic</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers03.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Jesica Matt</h3>
            <div class="designation">English Teacher</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers04.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href=""><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Lena Bodie</h3>
            <div class="designation">Science Teacher</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Teacher Start --> 

<!-- Blog Start -->
<div class="blog-wrap flight-wrap ">
  <div class="container">
    <div class="title">
      <h1> Our Blog </h1>
    </div>
    <ul class="row unorderList">
      <li class="col-lg-4">
        <div class="blog_box">
          <div class="blogImg"><img src="images/blog1.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Education Programs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor gravida.</p>
          </div>
        </div>
      </li>
      <li class="col-lg-4">
        <div class="blog_box">
          <div class="blogImg"><img src="images/blog2.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Games Program</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
          </div>
        </div>
      </li>
      <li class="col-lg-4">
        <div class="blog_box">
          <div class="blogImg"><img src="images/blog3.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Labs Programs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- Blog End --> 

<!--Newsletter Start-->
<div class="newsletter-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title">
          <h1>Newsletter</h1>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="col-lg-6">
        <div class="news-info">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Email Address">
              <div class="form_icon"><i class="fas fa-envelope"></i></div>
            </div>
            <button class="sigup">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Newsletter End--> 



<?php get_footer();?>
</body>
</html>