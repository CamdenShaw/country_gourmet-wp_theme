<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
    <p><label for="<?php echo $this->get_field_id( 'title' ); ?>">Title</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
    </p>
    <p><label for="<?php echo $this->get_field_id( 'message' ); ?>">Message</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'message' ); ?>" name="<?php echo $this->get_field_name( 'message' ); ?>" type="text" value="<?php echo $message; ?>">
    </p>
</div>