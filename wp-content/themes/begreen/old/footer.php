    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="googlemap">
                <div class="googlemap_overlay">
                        <div class="footer-col">
                            <h3>Location</h3>
                            <p>Sébikotane
                                <br>Région de Dakar, Sénégal</p>

                            <h3>Autour du web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.facebook.com/BeGreenSenegal" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-viadeo"></i></a>
                                </li>
                            </ul>

                            <h3>Par téléphone</h3>
                            <p><i class="fa fa-phone"></i> +221 77 3109595<br>
                            <i class="fa fa-phone"></i> +221 78 2254115</p>
                        </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30867.4154584749!2d-17.15343492716468!3d14.744960691470924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1987087e46419%3A0xfaee82acb56085b5!2zU8OpYmlraG90YW5lLCBTw6luw6lnYWw!5e0!3m2!1sfr!2sfr!4v1484090725734" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">

            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; BeGreen Company 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <?php $products = cr_get_product('aviculture'); ?>
    <?php foreach ($products as $product) : ?>
        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal-<?= $product->post_name; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2><?= $product->post_title; ?></h2>
                                <hr class="star-primary">
                                <img src="<?= product_image_url($product->ID); ?>" class="img-responsive img-centered" alt="">

                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</body>

</html>
