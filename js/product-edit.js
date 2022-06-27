function productOverviewSection(show) {
    var overviewEl = $('#productEditOverview');
    var contentEl = $('#productEditContent');
    if (show) {
        contentEl.addClass('col-9').removeClass('col-12')
        overviewEl.show()
    } else {
        contentEl.removeClass('col-9').addClass('col-12')
        overviewEl.hide()
    }
}

$('#search-sidebar-tab a').on('click', function (event) {
    event.preventDefault()
    $(this).tab('show')

    switch ($(this).attr('href').replace('#', '')) {
        case 'livePreview':
            $('.live-preview iframe').attr('src', $('#productUrl').val())
            productOverviewSection(false)
            break;

        case 'legacy':
            productOverviewSection(false)
            break;


        case 'inventory':
        case 'images':
        case 'reviews':
            productOverviewSection(false)
            break;


        default:
            productOverviewSection(true)
            break;
    }

})


