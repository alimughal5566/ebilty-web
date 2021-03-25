(function ($) {
    "use strict";

    $(document).ready(function () {

        // Your JS & jQuery Code here
        let langImg = $(".topnav.topnav--lang .languages.drop .pPanel ul li.active img");
        $(".topnav.topnav--lang .languages.drop .topnav-item span.topnav-item--image").html(langImg);

    });// end of document ready

})(jQuery);