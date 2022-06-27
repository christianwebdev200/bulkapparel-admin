var productSearchCard = $('.product-search-card');
var productSearchSelected = 'card-selected';
var searchSidebarTabs = $('.search-sidebar__tabs');
var sectionCardHeader = $('#sectionCardHeader');

function setActiveTab(target) {
    searchSidebarTabs.find('a').removeClass('active');
    searchSidebarTabs.find(`a[data-target=${target}]`).addClass('active');
}

function setSectionHeader(show, content) {
    if (show) {
        sectionCardHeader.find('.card-title').text(content.title)
        sectionCardHeader.find('.card-subtitle').text(content.subtitle)
        sectionCardHeader.show()
    } else {
        sectionCardHeader.hide();
    }
}

searchSidebarTabs.find('a').on('click', function () {
    var target = $(this).data('target');
    selectedTarget(target);
})

var sectionContent = {
    "overview": {
        title: 'Overview',
        subtitle: 'Edit all product information'
    },
    "details": {
        title: 'Details',
        subtitle: 'Edit product details of the product'
    },
    "canned": {
        title: 'Canned Message',
        subtitle: 'Edit canned message of the product'
    },
    "price": {
        title: 'Price',
        subtitle: 'Edit price of the product'
    },
    "images": {
        title: 'Images',
        subtitle: 'Edit images of the product'
    },
    "colors": {
        title: 'Colors',
        subtitle: 'Edit colors  of the product'
    },
    "inventory": {
        title: 'Inventory',
        subtitle: 'Edit  of inventory the product'
    },
    "options": {
        title: 'Product Options',
        subtitle: 'Edit Options of the product'
    },
    "meta": {
        title: 'Meta Tag',
        subtitle: 'Edit Meta tags of the product'
    },
    "oldVersion": {
        title: 'Product Edit Versions',
        subtitle: 'View and restore previous version of the product'
    },

}


var bulkPriceSection = $('.product-edit__bulk-price');
var basicStyleDetailsSection = $('.product-edit__basic-style-details');
var imageSection = $('.product-edit__image-section');
var cannedMessageSection = $('.product-edit__canned-message-section');
var optionsSection = $('.product-edit__options-section');
var colorSection = $('.product-edit__color-section');
var metaTagSection = $('.product-edit__meta-tag-section');
var colorCodePriceSection = $('.product-edit__color-code-prices-section');
var inventorySection = $('.product-edit__inventory');
var infoBodySection = $('.product-edit__info-body')

function sectionToggle(show, sections) {
    sections.forEach(element => {
        if (show) {
            element.show();
        } else {
            element.hide();
        }
    });
}

function overviewTab() {
    sectionToggle(true, [
        bulkPriceSection,
        basicStyleDetailsSection,
        imageSection,
        cannedMessageSection,
        optionsSection,
        colorSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
        infoBodySection
    ])
}

function detailsTab() {
    sectionToggle(false, [
        bulkPriceSection,
        colorSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
    ])
    sectionToggle(true, [
        basicStyleDetailsSection,
        infoBodySection,
        imageSection,
        cannedMessageSection,
        optionsSection,

    ])
}

function cannedTab() {
    sectionToggle(false, [
        bulkPriceSection,
        imageSection,
        optionsSection,
        colorSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
        infoBodySection
    ])
    sectionToggle(true, [
        basicStyleDetailsSection,
        cannedMessageSection,
    ])
}

function priceTab() {
    sectionToggle(false, [
        imageSection,
        optionsSection,
        metaTagSection,
        inventorySection,
        infoBodySection,
        basicStyleDetailsSection,
        cannedMessageSection,
        colorSection,
    ])
    sectionToggle(true, [
        colorCodePriceSection,
        bulkPriceSection,
    ])
}

function imagesTab() {
    sectionToggle(false, [
        bulkPriceSection,
        optionsSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
        infoBodySection,
        cannedMessageSection,
        colorSection
    ])
    sectionToggle(true, [
        basicStyleDetailsSection,
        imageSection,
    ])
}

function colorsTab() {
    sectionToggle(false, [
        bulkPriceSection,
        optionsSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
        infoBodySection,
        cannedMessageSection,
        basicStyleDetailsSection,
        imageSection,
    ])
    sectionToggle(true, [
        colorSection
    ])
}

function inventoryTab() {
    sectionToggle(false, [
        bulkPriceSection,
        optionsSection,
        metaTagSection,
        colorCodePriceSection,
        infoBodySection,
        cannedMessageSection,
        basicStyleDetailsSection,
        imageSection,
        colorSection
    ])
    sectionToggle(true, [
        inventorySection,
    ])
}

function optionsTab() {
    sectionToggle(false, [
        bulkPriceSection,
        metaTagSection,
        colorCodePriceSection,
        infoBodySection,
        cannedMessageSection,
        imageSection,
        inventorySection,
    ])
    sectionToggle(true, [
        basicStyleDetailsSection,
        optionsSection,
    ])
}

function metaTab() {
    sectionToggle(false, [
        bulkPriceSection,
        colorCodePriceSection,
        infoBodySection,
        cannedMessageSection,
        imageSection,
        inventorySection,
        basicStyleDetailsSection,
        optionsSection,
    ])
    sectionToggle(true, [
        metaTagSection,
    ])
}

function oldVersionTab() {
    sectionToggle(false, [
        bulkPriceSection,
        basicStyleDetailsSection,
        imageSection,
        cannedMessageSection,
        optionsSection,
        colorSection,
        metaTagSection,
        colorCodePriceSection,
        inventorySection,
        infoBodySection
    ])
}


function selectedTarget(target) {
    setActiveTab(target);
    setSectionHeader(true, sectionContent[target])
    switch (target) {
        case "overview":
            setSectionHeader(false);
            return overviewTab();
        case "details":
            return detailsTab()
        case "canned":
            return cannedTab()
        case "price":
            return priceTab()
        case "images":
            return imagesTab()
        case "colors":
            return colorsTab()
        case "inventory":
            return inventoryTab()
        case "options":
            return optionsTab()
        case "meta":
            return metaTab()
        case "oldVersion":
            return oldVersionTab()
    }
}


productSearchCard.on('click', function (e) {
    if ($(e.target).hasClass('viewstyleid')) {
        var base_url = $('#currentparent').val();
		$(this).parents('li').siblings().removeClass('selected');
		$(this).parents('li').addClass("selected");
    }
})