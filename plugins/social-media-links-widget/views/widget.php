<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $facebook ) ) > 0 ) : ?>
<div class="social-media-links-widget-content">
    <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
</div>
<?php endif;
if ( strlen( trim( $twitter ) ) > 0 ) : ?>
    <div class="social-media-links-widget-content">
        <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
    </div>
<?php endif;
if ( strlen( trim( $instagram ) ) > 0 ) : ?>
<div class="social-media-links-widget-content">
    <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
</div>
<?php endif;
if ( strlen( trim( $tumblr ) ) > 0 ) : ?>
    <div class="social-media-links-widget-content">
        <a href="<?php echo $tumblr; ?>" target="_blank"><i class="fa fa-tumblr"></i></a>
    </div>
<?php endif;
if ( strlen( trim( $googleplus ) ) > 0 ) : ?>
<div class="social-media-links-widget-content">
    <a href="<?php echo $googleplus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
</div>
<?php endif;
if ( strlen( trim( $flickr ) ) > 0 ) : ?>
    <div class="social-media-links-widget-content">
        <a href="<?php echo $flickr; ?>" target="_blank"><i class="fa fa-flickr"></i></a>
    </div>
<?php endif; ?>