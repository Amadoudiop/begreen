<?php
	/** 
	 * Template Name: contact
	 */
?>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Nous contacter</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php 
                    $contact_form = '[contact-form-7 id="40" title="Formulaire de contact 1"]';
                	echo do_shortcode($contact_form); 
                ?>
            </div>
        </div>
    </div>
</section>