
<script src="src/js/lightbox-plus-jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/macy@2.5.1/dist/macy.min.js "></script>
<!-- <script src="src/js/macy.js "></script> -->
<script src="src/js/hamburger.js "></script>
<script src="src/js/bar.js "></script>
<script src="src/js/detect.js "></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>

<script>
            $.getJSON("https://api.ipify.org?format=json",
                function(data) {

                    $("#ip").html(data.ip);
                })
</script>
