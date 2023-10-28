<?php require_once("include/header.php"); ?>

<!---time scroller---->
<div class="wrapper">
    <section class="block">
        <div class="each-year">
            <div class="title">OUR HIRING PROCESS</div>
            <div class="each-event">
                <div class="event-description">
                    <div class="row"><img src="" alt=""></div>
                    <div class="row">
                        <h4>Screening Round</h4>
                        <p>Based on the process, we perform a general screening that includes an interview round as per the job description matrix.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="each-event">
            <div class="event-description">
                <div class="row"><img src="" alt=""></div>
                <div class="row">
                    <h4>Screening Round</h4>
                    <p>Based on the process, we perform a general screening that includes an interview round as per the job description matrix.
                    </p>
                </div>
            </div>
        </div>
        <div class="each-event">
            <div class="event-description">
                <div class="row"><img src="" alt=""></div>
                <div class="row">
                    <h4>Screening Round</h4>
                    <p>Based on the process, we perform a general screening that includes an interview round as per the job description matrix.
                    </p>
                </div>
            </div>
        </div>

        <div class="each-event">
            <div class="event-description">
                <div class="row"><img src="" alt=""></div>
                <div class="row">
                    <h4>Screening Round</h4>
                    <p>Based on the process, we perform a general screening that includes an interview round as per the job description matrix.</p>
                </div>
            </div>
        </div>
        <div class="each-event">
            <div class="event-description">
                <div class="row"><img src="" alt=""></div>
                <div class="row">
                    <h4>Screening Round</h4>
                    <p>Based on the process, we perform a general screening that includes an interview round as per the job description matrix.</p>
                </div>
            </div>
        </div>

        <div class="each-event">
            <div class="event-description">
                <h4>Screening Round</h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum adipisci porro nulla magnam error eligendi? Quos!</p>
            </div>
        </div>

        <div class="each-event">
            <h4>Screening Round</h4>
            <div class="event-description">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, vitae, ex voluptates repudiandae molestias modi veniam cumque, iusto qui quia illum ipsa laborum adipisci porro nulla magnam error eligendi? Quos!</p>
            </div>
        </div>
</div>
</section>

<!-- <section class="block">
        <div class="each-year">
            <div class="title">2015</div>
            <div class="each-event">
                <div class="event-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
            </div>
        </div>
    </section>--->
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
    var $element = $('.each-event, .title');
    var $window = $(window);
    $window.on('scroll resize', check_for_fade);
    $window.trigger('scroll');

    function check_for_fade() {
        var window_height = $window.height();

        $.each($element, function(event) {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_offset = $element.offset().top;
            space = window_height - (element_height + element_offset - $(window).scrollTop());
            if (space < 60) {
                $element.addClass("non-focus");
            } else {
                $element.removeClass("non-focus");
            }
        });
    };
</script>
<?php require_once("include/footer.php"); ?>