<!-- Footer -->

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-left">
                <img src="<?php bloginfo('template_directory')?>/images/veresk-logo/veresk-logo3.png" alt="veresk">
                <p class="footer-links">
                    <a target="_blank" href="/">
                        Home</a>
                    ·
                    <a target="_blank" href="https://panel.veresk.org">
                        Panel</a>
                </p>
                <div class="copyright">
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
            </div>
            <div class="col-lg-4 footer-center">
                <div class="mb-4">
                    <i class="fa fa-map-marker"></i>
                    <p class="pl-2 pr-2">
                        <span>
                            No 7, Balavar Alley </span>
                        Theatr-e-Shahr Crossroad, Tehran, Iran
                    </p>
                </div>
                <div class="mb-4">
                    <i class="fa fa-phone"></i>
                    <p class="pl-2 pr-2">
                        <span style="line-height: 1.5; direction: ltr">
                            +9821 66175322</span>
                    </p>
                </div>
                <div class="mb-4">
                    <i class="fa fa-envelope"></i>
                    <p class="pl-2 pr-2"><a href="mailto:info@veresk.org">info@veresk.org</a></p>
                </div>

            </div>
            <div class="col-lg-4 footer-right">
                <p class="footer-company-about">
                    <span>
                        About the Veresk</span>
                    Veresk startup became the first Iranian startup of rail transport accepted by the Samsung-Amir
                    Kabir Technology
                    Center and is also concluding an agreement with the Islamic Republic of Iran Railways for the
                    exchange of
                    information.
                </p>
                <div class="footer-icons">
                    <a target="_blank" href="https://twitter.com/veresk_org"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/veresk">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/veresk_org"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://t.me/veresk_org"><i class="fa fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

</div>

<script src="<?php bloginfo('template_directory')?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/styles/bootstrap/bootstrap.min.js"></script>
<?php if (is_single()): ?>
<script src="<?php bloginfo('template_directory')?>/plugins/parallax-js-master/parallax.min.js"></script>
<?php endif;?>
<script src="<?php bloginfo('template_directory')?>/js/script.js"></script>
<?php wp_footer();?>
</body>

</html>