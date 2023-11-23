<script src="{{ asset('frontend/assets') }}/js/plugins.js"></script>
<script src="{{ asset('frontend/assets') }}/js/designesia.js"></script>
<script src="{{ asset('frontend/assets') }}/js/jquery.event.move.js"></script>
<script src="{{ asset('frontend/assets') }}/js/jquery.twentytwenty.js"></script>

<!-- RS5.0 Core JS Files -->
<script src="{{ asset('frontend/assets') }}/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>

<!-- RS5.0 Extensions Files -->
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.layeranimation.min.js">
</script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('frontend/assets') }}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script>
    jQuery(document).ready(function() {
        // revolution slider
        jQuery("#slider-revolution").revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true
                },
                bullets: {
                    enable: false,
                    style: 'hermes'
                },

            },
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            },
            spinner: "off",
            gridwidth: 1140,
            gridheight: 700,
            disableProgressBar: "on"
        });
    });
</script>

<script>
    $(window).on("load", function() {
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
            default_offset_pct: 0.5
        });
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
            default_offset_pct: 0.5,
            orientation: 'vertical'
        });
    });
</script>
