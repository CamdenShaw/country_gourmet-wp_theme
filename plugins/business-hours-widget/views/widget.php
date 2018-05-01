<div class="country_gourmet-business_hours">
    <div class="country_gourmet-hours">
        <?php if ( strlen( trim( $monday ) ) > 0 ) : ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Monday:</span> <?php echo $monday; ?>
        </p>
        <?php endif; ?>

        <?php if ( strlen( trim( $tuesday ) ) > 0 ) ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Tuesday:</span> <?php echo $tuesday; ?>
        </p>
        <?php if ( strlen( trim( $wednesday ) ) > 0 ) : ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Wednesday:</span> <?php echo $wednesday; ?>
        </p>
        <?php endif; ?>

        <?php if ( strlen( trim( $thursday ) ) > 0 ) ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Thursday:</span> <?php echo $thursday; ?>
        </p>
        <?php if ( strlen( trim( $friday ) ) > 0 ) : ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Friday:</span> <?php echo $friday; ?>
        </p>
        <?php endif; ?>

        <?php if ( strlen( trim( $saturday ) ) > 0 ) ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Saturday:</span> <?php echo $saturday; ?>
        </p>
        <?php if ( strlen( trim( $sunday ) ) > 0 ) : ?>
        <p>
            <span class="day-of-the-week country_gourmet-text-uppercase">Sunday:</span> <?php echo $sunday; ?>
        </p>
        <?php endif; ?>
    </div>
    <div class="country_gourmet-widget-address">
        <p>
            <span class="widget_address">Address:</span> <?php echo $address; ?>
        </p>
    </div>
</div>
<?php endif; ?>