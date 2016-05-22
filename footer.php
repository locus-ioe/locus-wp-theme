    <div id="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="footer-menu">
                                <div class="menu-item">
                                    <a href="http://locus.ioe.edu.np/leblog/">Blog</a>
                                </div>
                                <div class="menu-item">
                                    <a href="http://locus.ioe.edu.np/leevent/">Events</a>
                                </div>
                                <div class="menu-item">
                                    <a href="http://locus.ioe.edu.np/legallery/">Gallery</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#about">About</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#members">Committee</a>
                                </div>
                                <div class="menu-item">
                                    <a href="#sponsors">Sponsors</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="social">
                                <div class="title">Find us</div>
                                <div class="item">
                                    <a href="https://www.facebook.com/locus.ioe/?fref=ts"><i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="item">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                                <div class="item">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div id="contact-info">
                                <div class="title">Contact us</div>
                                <div><i class="fa fa-map-marker"></i>Central Campus, Pulchowk, Lalitpur</div>
                                <div><i class="fa fa-phone"></i><span class="country-code">+977</span>9849595371</div>
                                <div><a href="mailto:locus@ioe.edu.np"><i class="fa fa-envelope"></i>locus@ioe.edu.np</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="map">
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © Locus 2016. All rights reserved.</p>
            </footer>
        </div>

    </div>
    <?php wp_footer(); ?>
    <script>
    $(document).ready(function(){
        var sec = 0;
        countdownEnd = new Date("July 1, 2016 10:00:00");
        countdown();

        function countdown(){
            now = new Date();
            if( countdownEnd > now ){
                $('#countdown-timer').removeClass('hidden');

                // time remaining in seconds
                timeRemain = (countdownEnd.getTime() - now.getTime())/1000;

                daysRemain = parseInt(timeRemain/(60*60*24));

                secsAfterDays = timeRemain - daysRemain*24*60*60;
                hoursRemain = (secsAfterDays)/(60.0*60.0);
                minsRemain = (secsAfterDays%(60*60))/60;
                secsRemain = (secsAfterDays%60);
                daysRemain = parseInt(daysRemain);
                hoursRemain = parseInt(hoursRemain);
                hoursRemain = hoursRemain<10? '0'+hoursRemain : hoursRemain;
                minsRemain = parseInt(minsRemain);
                minsRemain = minsRemain<10?'0'+minsRemain: minsRemain;
                secsRemain = parseInt(secsRemain);
                secsRemain = secsRemain<10?'0'+secsRemain: secsRemain;
                $('#days-remain .time').text(daysRemain);
                $('#hours-remain .time').text(hoursRemain);
                $('#mins-remain .time').text(minsRemain);
                $('#secs-remain .time').text(secsRemain);
                setTimeout(countdown, 1000);
            }
        }
        $(function() {
            $('a[href*="#"]:not([href="#"])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 500);
                        return false;
                    }
                }
            });
        });
    });
    function initMap(){
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 27.6822289, lng: 85.3195064},
            scrollwheel: false,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        });
        var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}];
        map.setOptions({styles: styles});
        var marker = new google.maps.Marker({
            position: {lat: 27.6822289, lng: 85.3195064},
            draggable: true,
            animation: google.maps.Animation.DROP,
            title: "Event Location"
        });
        marker.setMap(map);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-nr38mjHS3Y_PapPYSmTaFFQ9ucQGwig&callback=initMap" async defer></script>
</body>
</html>
