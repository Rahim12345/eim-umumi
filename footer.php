<!-- Link Slider  -->
<div class="mt-2 col-md-10 offset-md-1" style="min-height: 100%;position:relative;" id="body-cont-print">
    <div id="linkCarousel" class="carousel slide m-0" style="width: 100%;" data-ride="carousel" data-interval="10000"
         data-type="multi">
        <div id="jssor_1"
             style="position: relative; margin: 0 auto;    margin-right: -1px; top: 0px; left: 0px; width: 1097px; height: 80px; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div
                        style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div
                        style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;">
                </div>
            </div>
            <div data-u="slides"
                 style="cursor: default; position: relative; top: 0px; left: 0px; width: 1097px; height: 80px; overflow: hidden; border-style:solid;border-width:0px;">
                <div style="display: none;">
                    <a href="http://www.president.az/azerbaijan/leader" target=_blank><img data-u="image"
                                                                                           src="<?= domain ?>/assets/images/ali-meclis.jpg"
                                                                                           class="slider-images" /></a>
                </div>
                <div style="display: none;">
                    <a href="http://president.az/" target=_blank><img data-u="image"
                                                                      src="<?= domain ?>/assets/images/h-a.jpg"
                                                                      class="slider-images" /></a>
                </div>
                <div style="display: none;">
                    <a href="http://www.heydar-aliyev-foundation.org/" target=_blank><img data-u="image"
                                                                                          src="<?= domain ?>/assets/images/ilham-aliyev.jpg"
                                                                                          class="slider-images" /></a>
                </div>
                <div style="display: none;">
                    <a href="http://www.azerbaijan.az/" target=_blank><img data-u="image"
                                                                           src="<?= domain ?>/assets/images/nazirler-k.jpg"
                                                                           class="slider-images" /></a>
                </div>
                <div style="display: none;">
                    <a href="https://mehriban-aliyeva.az/" target=_blank><img data-u="image"
                                                                              src="<?= domain ?>/assets/images/portal.jpg"
                                                                              class="slider-images" /></a>
                </div>
                <div style="display: none;">
                    <a href="http://www.president.az/administration" target=_blank><img data-u="image"
                                                                                        src="<?= domain ?>/assets/images/virtualqarabag.jpg"
                                                                                        class="slider-images" /></a>
                </div>
            </div>

        </div>


    </div>

</div>
<!--Link Slider_END-->


</div>
</div>

<div class="mt-2 mb-3 col-md-10 offset-md-1">
    <footer
        style="-moz-box-shadow: 0px 3px 8px #e0e0e0;-webkit-box-shadow: 0px 3px 8px #e0e0e0;box-shadow: 0px 3px 8px #e0e0e0;background-color: #fff;padding: 10px;background-color:#465990;color:white;">
        <div class="row">
            <div class="col-md-3 col-lg-3"><img src="<?= domain ?>/assets/images/footer-eif.png" style="width: 100%;" alt=""></div>
            <div class="col-md-2 col-lg-2">Əsas Səhifə</div>
            <div class="col-md-2 col-lg-2">Fond Haqqında</div>
            <div class="col-md-2 col-lg-2">Xəbərlər və Elanlar</div>
            <div class="col-md-2 col-lg-2">Elm və İnkisaf</div>
            <div class="col-md-1 col-lg-1">Əlaqə</div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3">
            © <?= date('Y') ?> Copyright: Designed by NMR Rabitə və Yeni Texnologiyalar Nazirliyi.
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!-- /.container -->
<!-- jQuery -->
<script>
    jssor_1_slider_init();
</script>

<script>
    $('.carousel').carousel({
        interval: 2000,
    });


    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
        }
        var $subMenu = $(this).next('.dropdown-menu');
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass('show');
        });


        return false;
    });
</script>
</body>

</html>