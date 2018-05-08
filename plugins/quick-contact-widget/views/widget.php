<!-- This file is used to markup the public-facing widget. -->
<?php if ( strlen( trim( $message ) ) > 0 ) : ?>

    <p>
        <span class="qc-form-message"><?php echo $message; ?></span>
    </p>
<?php endif; ?>

<form class="qc-form">
    <input name="from" type="text" placeholder="name" />
    <input name="email" type="email" placeholder="email" />
    <input name="phone" type="tel" placeholder="phone" />
    <textarea name="content" type="text" placeholder="message"></textarea>
    <button class="submit-message" type="submit" value="submit">Submit</button>
    <p class="qc-form-status">clear</p>
</form>
