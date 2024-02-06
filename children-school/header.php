<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package children_School
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'children-school' ); ?></a>

	<!--Header Start-->
<div class="header-wrap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-12 navbar-light">
        <div class="logo"> 
		<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$children_school_description = get_bloginfo( 'description', 'display' );
			if ( $children_school_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $children_school_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="classes.html">Classes</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="classes.html">Classes</a></li>
                    <li><a href="classes-details.html">Classes Details</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="teachers.html">Teachers</a>
                  <ul class="submenu">
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="teachers-details.html">Teachers Details</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#.">Pages</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="teachers.html">Our Teachers</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="pricing.html">Our Pricing</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                    <li><a href="blog-list.html">Blog List sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="header_info">
          <div class="search"><a href="#"><i class="fas fa-search"></i></a></div>
          <div class="loginwrp"><a href="login.html">Login/Register</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 
