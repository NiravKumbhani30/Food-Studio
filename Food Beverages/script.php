<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/jquery.timepicker.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/slick.min.js"></script>

<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>

<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="assets/js/jquery-jvectormap-2.0.5.min.js"></script>
<script src="assets/js/jquery-jvectormap-world-mill.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.meanmenu.min.js"></script>

<script src="assets/js/script.js"></script>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/js/autologout.js" type="text/javascript"></script>

<script>
// jVector map intialization
var plants = [{
        name: 'US',
        coords: [50.0091294, 9.0371812],
        status: 'myMap',
        offsets: [0, 2]
    },
    {
        name: 'CA',
        coords: [50.8214822, -130.1406326],
        status: 'myMap',
        offsets: [0, 2]
    },
    {
        name: 'GL',
        coords: [67.8615556, -73.8257763],
        status: 'myMap',
        offsets: [0, 2]
    },
    {
        name: 'IN',
        coords: [20.0109007, 64.4350738],
        status: 'myMap',
        offsets: [0, 2]
    },
    {
        name: 'BD',
        coords: [23.4905796, 88.1000181],
        status: 'myMap',
        offsets: [0, 2]
    },
    {
        name: 'RU',
        coords: [49.7312587, 68.7480038],
        status: 'myMap',
        offsets: [0, 2]
    },
];

new jvm.Map({
    container: $('#map'),
    map: 'world_mill',
    backgroundColor: 'transparent',
    zoomButtons: false,
    regionStyle: {
        initial: {
            fill: '#7E8F9A'
        },
        hover: {
            fill: "#7E8F9A",
            "fill-opacity": 1,
        }
    },
    zoomOnScroll: false,
    markers: plants.map(function(h) {
        return {
            name: h.name,
            latLng: h.coords
        }
    }),
    labels: {
        markers: {
            render: function(index) {
                return plants[index].name;
            },
            offsets: function(index) {
                var offset = plants[index]['offsets'] || [0, 0];

                return [offset[0] - 7, offset[1] + 3];
            }
        }
    },
    series: {
        markers: [{
            attribute: 'image',
            scale: {
                'myMap': 'assets/images/location.png',
            },
            values: plants.reduce(function(p, c, i) {
                p[i] = c.status;
                return p
            }, {}),
            legend: {
                horizontal: false,
                cssClass: "map-legend",
            }
        }]
    }
});
</script>

<?php
ob_flush();
?>