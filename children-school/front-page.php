<?php get_header(); ?>

<?php if( have_rows('slides') ): ?>
    <!-- Revolution slider start -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php while( have_rows('slides') ): the_row(); 
                $image = get_sub_field('image');?>
                
                <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php echo $image['url'];?>" data-lazyload="<?php echo $image['url'];?>">
                <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> Education Bright Future </span></div>
                <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, <br/>
                pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum.</div>
                
                <?php
                    $buttons = get_sub_field( 'button' );
                    if( $buttons == 'showBtn'): ?>
                    
                    <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="#"><i class="fas fa-edit"></i> Enroll Today</a> </div>
                    <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="#"><i class="far fa-calendar-alt"></i> Schedule a Tour</a> </div>
                <?php endif; ?>

                
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
   
<?php endif; ?>

<?php get_footer(); ?>