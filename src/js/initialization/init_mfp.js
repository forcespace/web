$(window).on("load", function ()
{
    InitPopupWindows();
    InitPopupWindowsVideo();
    console.log('тут')
});

function InitPopupWindows()
{
    $('.js-popup-link').magnificPopup({
        type: 'inline', removalDelay: 300, callbacks: {
            beforeOpen: function ()
            {
                this.st.mainClass = 'mfp-zoom-in';
            }
        }, midClick: true
    }, 0);
}


function InitPopupWindowsVideo()
{
    $('.js-popup-video').magnificPopup({
        type: 'inline', removalDelay: 500, callbacks: {
            beforeOpen: function ()
            {
                this.st.mainClass = this.st.el.attr('data-effect');
            }, open: function ()
            {
                this.content.find("iframe").attr("src", this.content.data('youtube-video'));
            },
        }, midClick: true
    });
}