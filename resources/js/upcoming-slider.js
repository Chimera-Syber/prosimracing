/** 
 * Upcoming evets on main page
 */

var widgets = document.getElementsByClassName('widget_item');

if (widgets.length != 0) { // Check element

    var widgetIndex = 1;
    showWidget(widgetIndex);

    function plusWidget(n) {
        showWidget(widgetIndex += n);
    }

    function showWidget(n) {
        var i;
        var widgets = document.getElementsByClassName('widget_item');
        var widgetWidth = widgets[0].scrollWidth;
        var widgetList = document.querySelector('.widget_list');

        if (n > widgets.length) {
            widgetIndex = 1;
        }

        if (n < 1) {
            widgetIndex = widgets.length;
        }

        var x = widgetWidth * (widgetIndex-1);
        widgetList.style.transform = "translateX(-" + x + "px)";


    }

}

