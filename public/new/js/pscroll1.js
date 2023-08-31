(function($) {
    "use strict";

    if($('.main-notification-list').length != 0){
        const ps11 = new PerfectScrollbar('.main-notification-list', {
            useBothWheelAxes: true,
            suppressScrollX: true,
            suppressScrollY: false,
        });
    }
    if($('.main-message-list').length != 0){
        const ps22 = new PerfectScrollbar('.main-message-list', {
            useBothWheelAxes: true,
            suppressScrollX: true,
            suppressScrollY: false,
        });
    }

    //P-scrolling
})(jQuery);