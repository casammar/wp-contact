<?php
    /**
     * Template for skills test contact form 
     *
     * @package WordPress
     * @subpackage contact
     */
    ?>
    
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php
            the_content();
            ?>
      
            <form id="contact" action="" method="POST">
                <h3>CONTACT US!</h3>
                <h4>fill out the form below and one of our team members will contact you!</h4>
                <fieldset>
                    <input name="name" placeholder="name:" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input name="phone" placeholder="phone:" type="tel" tabindex="2" required>
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="email:" type="email" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit">SEND THIS FORM</button>
                </fieldset>
            </form>
       
    </div>
    <!-- .entry-content -->
</article>
<!-- #post-## -->




