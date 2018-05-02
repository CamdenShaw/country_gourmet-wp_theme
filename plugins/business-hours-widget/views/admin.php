<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
    <div class="country_gourmet-business_hours">
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
            <label for="<?php echo $this->get_field_id('monday'); ?>">Monday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('monday'); ?>" name="<?php echo $this->get_field_name('monday'); ?>" type="text" value="<?php echo $monday; ?>">
            <label for="<?php echo $this->get_field_id('tuesday'); ?>">Tuesday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('tuesday'); ?>" name="<?php echo $this->get_field_name('tuesday'); ?>" type="text" value="<?php echo $tuesday; ?>">
            <label for="<?php echo $this->get_field_id('wednesday'); ?>">Wednesday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('wednesday'); ?>" name="<?php echo $this->get_field_name('wednesday'); ?>" type="text" value="<?php echo $wednesday; ?>">
            <label for="<?php echo $this->get_field_id('thursday'); ?>">Thursday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('thursday'); ?>" name="<?php echo $this->get_field_name('thursday'); ?>" type="text" value="<?php echo $thursday; ?>">
            <label for="<?php echo $this->get_field_id('friday'); ?>">Friday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('friday'); ?>" name="<?php echo $this->get_field_name('friday'); ?>" type="text" value="<?php echo $friday; ?>">
            <label for="<?php echo $this->get_field_id('saturday'); ?>">Saturday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('saturday'); ?>" name="<?php echo $this->get_field_name('saturday'); ?>" type="text" value="<?php echo $saturday; ?>">
            <label for="<?php echo $this->get_field_id('sunday'); ?>">Sunday:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('sunday'); ?>" name="<?php echo $this->get_field_name('sunday'); ?>" type="text" value="<?php echo $sunday; ?>">
        </p>
    </div>
    <div>
        <p>
            <label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" ><?php echo $address; ?></textarea>
        </p>
    </div>
</div>