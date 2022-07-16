/** 
 * Upcoming evets on main page
 */

var widgets = document.getElementsByClassName('widget_item');

if (widgets.length != 0) { // Check element

    let widgetIndex = 1;
    showWidget(widgetIndex);

    function plusWidget(n) {
        showWidget(widgetIndex += n);
    }

    function showWidget(n) {
        let i;
        let widgets = document.getElementsByClassName('widget_item');
        let widgetWidth = widgets[0].scrollWidth + 3;
        let widgetList = document.querySelector('.widget_list');

        if (n > widgets.length) {
            widgetIndex = 1;
        }

        if (n < 1) {
            widgetIndex = widgets.length;
        }

        let x = widgetWidth * (widgetIndex-1);
        widgetList.style.transform = "translateX(-" + x + "px)";


    }

}

