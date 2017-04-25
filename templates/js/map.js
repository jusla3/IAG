             function initialize() {
            var myOptions = {
                center: new google.maps.LatLng(51.595228, -0.086303),
                /* Controls */
                mapTypeControl: true,
                mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                /* More Controls */
                zoomControl: true,
				panControl: false,
				scaleControl: false,
				draggable: true,
				scrollwheel: false,
                zoomControlOptions: {
                style: google.maps.ZoomControlStyle.SMALL
                },
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
               styles: gmapOldStyle,
                };

        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        setMarkers(map, sites);
        infowindow = new google.maps.InfoWindow({
        content: "loading..."
        });
    }

    /* Plot/position the Markers */
    var sites = [
	['Park Lane Children’s Centre',51.602733, -0.062032, 1, '<div class="map"><strong>Park Lane</strong><br />Park Lane Children’s Centre, N17 0HB<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_park_lane_childrens_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Laurel’s Medical Practice,',51.581454, -0.087439, 2, '<div class="map"><strong>The Laurel’s</strong><br />The Laurel’s Medical Practice, N15 5AZ <br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_the_laurels_healthy_living_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Triangle Children’s Centre',51.578184, -0.077938, 3, '<div class="map"><strong>Triangle Children’s Centre</strong><br />Triangle Children’s Centre, N15 6NU<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_triangle_childrens_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Queenswood Medical Centre',51.584288, -0.131017, 4, '<div class="map"><strong>Queenswood Medical Centre</strong><br />Queenswood Medical Centre, N8 8JD <br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_queenswood_medical_centre.pdf"  target="_blank">Download Information Document<\/a><\/div>'],
    ['Broadwater Children’s Centre',51.595838, -0.079732, 5, '<div class="map"><strong>Broadwater Children’s Centre</strong><br />Broadwater Children’s Centre, N17 6HE <br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_broadwater-childrens_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Tottenham Community Sports',51.600714, -0.068249, 6, '<div class="map"><strong>Tottenham Community Sports</strong><br />Tottenham Community Sports Centre, N17 8AD<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_tottenham_community_sports_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['CAH, Tottenham Bureau',51.595603, -0.069198, 7, '<div class="map"><strong>CAH</strong><br />CAH, Tottenham Bureau N17 6SB<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_cah_tottenham_bureau.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Wood Green Library',51.595566, -0.109626, 8, '<div class="map"><strong>Wood Green Library</strong><br />Wood Green Library, N22 6XD<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_wood_green_library.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Pembury Children’s Centre',51.598525, -0.066444, 9, '<div class="map"><strong>Pembury Children’s Centre</strong><br />Pembury Children’s Centre, N17 9XE <br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_pembury_childrens_centre.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Haringey Recovery Service',51.577326, -0.082784, 10, '<div class="map"><strong>Haringey Recovery Service</strong><br />Haringey Recovery Service, N15 6HR <br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_haringey_recovery_service.pdf" target="_blank">Download Information Document<\/a><\/div>'],
    ['Recovery Enablement Team',51.601784, -0.111833, 11, '<div class="map"><strong>Recovery Enablement Team</strong><br />Recovery Enablement Team N22 8JT<br /><a href="http://www.haringeyadvicepartnership.co.uk/site/assets/files/1/hap_locations_and_info_east_haringey_recovery_team.pdf" target="_blank">Download Information Document<\/a><\/div>'], 
  
	];

    /* The Markers */
    function setMarkers(map, markers) {
       for (var i = 0; i < markers.length; i++) {
            var sites = markers[i];
            var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
            var marker = new google.maps.Marker({
                position: siteLatLng,
                map: map,
                animation: google.maps.Animation.DROP,
                icon: 'http://www.haringeyadvicepartnership.co.uk/site/templates/js/map_icon.png',
                title: sites[0],
                zIndex: sites[3],
                html: sites[4]
            });

            var contentString = "Some content";
            google.maps.event.addListener(marker, "click", function () {
            infowindow.setContent(this.html);
            infowindow.open(map, this);
             });
       }
  }

/*  Make it so ... */
window.onload = function() {
initialize();
}