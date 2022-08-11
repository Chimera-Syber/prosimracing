let widgets = document.getElementsByClassName('upcoming-events__widget-item');

if (widgets.length != 0) { // Check element

    let widgetIndex = 1;
    showWidget(widgetIndex);

    function plusWidget(n) {
        showWidget(widgetIndex += n);
    }

    function showWidget(n) {
        let i;
        let widgets = document.getElementsByClassName('upcoming-events__widget-item');

        let widgetWidth = widgets[0].offsetWidth;
        console.log(widgetWidth);
        let widgetList = document.querySelector('.upcoming-events__widget-container');

        if (n > widgets.length) {
            widgetIndex = 1;
        }

        if (n < 1) {
            widgetIndex = widgets.length;
        }

        let x = widgetWidth * (widgetIndex-1) + 5 * (widgetIndex-1);
        widgetList.style.transform = "translateX(-" + x + "px)";

    }

}