//loading sample
var loadingSpinner = $('#loadingSpinner');

setTimeout(function () {
    loadingSpinner.hide()
    $('.showroom').show();
}, 100)

// choose colors select and list box
var chooseColorList = $('#chooseColorList');
var chooseColorSelect = $("#chooseColorSelect");


function setValueChooseColor(color) {
    console.log(color)

    chooseColorSelect.find('.color-btn').attr('data-id', color.id).attr('data-name', color.name).attr('data-hex', color.hex);
    chooseColorSelect.find('.color-btn .color-box').css('background', color.hex);
    chooseColorSelect.find('.color-btn .color-name').text(color.name);
    chooseColorSelect.find('.dropdown-menu a').removeClass('active');
    chooseColorSelect.find('.dropdown-menu a[data-id="' + color.id + '"]').addClass('active');

    chooseColorList.find('li').removeClass('active');
    chooseColorList.find('li[data-id="' + color.id + '"]').addClass('active');
}

function getColorValues(element) {
    var color = {
        id: $(element).data('id'),
        hex: $(element).data('hex'),
        name: $(element).data('name')
    }

    setValueChooseColor(color);
}

function fetchColorMedia() {
    alert('Color Media Fetched');
    // fetch color media here...
}

chooseColorList.find('li').on('click', function () {
    getColorValues(this);
    fetchColorMedia();
})
chooseColorSelect.find('a').on('click', function () {
    getColorValues(this);
    fetchColorMedia()
})

// select media
var selectAllBtn = $("#selectAllBtn");
var selectNoneBtn = $("#selectNoneBtn");
var allCardMedia = $('.card-media')
var mediaSelectedClass = 'card-media--selected'
var allCardMediaCheckbox = $('.card-media-select');

selectAllBtn.on('change', function () {
    $(this).prop('checked', true);
    selectNoneBtn.prop('checked', false)
    allCardMediaCheckbox.prop('checked', true);
    allCardMedia.addClass(mediaSelectedClass);
})

selectNoneBtn.on('change', function () {
    $(this).prop('checked', true);
    selectAllBtn.prop('checked', false)
    allCardMediaCheckbox.prop('checked', false)
    allCardMedia.removeClass(mediaSelectedClass);
})

$(document).on('change', '.card-media-select', function () {
    var selected = this.checked;
    var id = $(this).data('id');
    var selectedCardMedia = $('.card-media[data-id="' + id + '"]');

    console.log(selected, id, selectedCardMedia)

    if (selected) {
        selectedCardMedia.addClass(mediaSelectedClass);
    } else {
        selectedCardMedia.removeClass(mediaSelectedClass);

    }
})


// select custom main model
var customModelCheckbox = $('.card-media-custom-model');
var customModelClass = 'card-media--custom-model';

customModelCheckbox.on('change', function () {
    var id = $(this).data('id')
    var selectedCardMedia = $('.card-media[data-id="' + id + '"]');
    if (this.checked) {
        customModelCheckbox.prop('checked', false)
        $(this).prop('checked', true);
        allCardMedia.removeClass(customModelClass)
        selectedCardMedia.addClass(customModelClass)
    } else {
        $(this).prop('checked', false);
        selectedCardMedia.removeClass(customModelClass)
    }
})

// choose media modals
var chooseMediaModal = $('#chooseMediaModal');
var addMediaBtn = $('.card-add-media');
var chooseMediaSelect = $('#chooseMediaSelect');
var uploadImageModal = $('#uploadImageModal');
var uploadVideoModal = $('#uploadVideoModal');
var uploadYoutubeModal = $('#uploadYoutubeModal');

addMediaBtn.on('click', function () {
    chooseMediaModal.modal('show')
})

function showUploadMediaModal(value) {
    chooseMediaModal.modal('hide');
    switch (value) {
        case 'image':
            uploadImageModal.modal('show')
            break;
        case 'video':
            uploadVideoModal.modal('show')
            break;
        case 'youtube':
            uploadYoutubeModal.modal('show')
            break;
    }

}

chooseMediaModal.find('.btn-next').on('click', function () {
    var selectedMedia = chooseMediaSelect.val();

    if (selectedMedia) {
        showUploadMediaModal(chooseMediaSelect.val())
    }

    chooseMediaSelect.val('')
})


//preview modals
var previewImageModal = $('#previewImageModal');
var previewYoutubeModal = $('#previewYoutubeModal');
var previewVideoModal = $('#previewVideoModal');
var imageShowroomCard = $('.card-media--image');
var videoShowroomCard = $('.card-media--video');
var youtubeShowroomCard = $('.card-media--youtube');


function showPreviewMediaModal(value, state = 'show') {
    switch (value) {
        case 'image':
            previewImageModal.modal(state)
            break;
        case 'video':
            previewVideoModal.modal(state)
            break;
        case 'youtube':
            previewYoutubeModal.modal(state)
            break;
    }

}

imageShowroomCard.find('img').on('click', function (e) {
    if (e.target !== this)
        return;
    // fetch image information here...
    showPreviewMediaModal('image');
})

videoShowroomCard.find('img').on('click', function (e) {
    if (e.target !== this)
        return;
    // fetch video information here...
    showPreviewMediaModal('video');
})

youtubeShowroomCard.find('img').on('click', function (e) {
    if (e.target !== this)
        return;
    // fetch youtube information here...
    showPreviewMediaModal('youtube');
})


previewImageModal.find('.edit-btn').on('click', function () {
    showPreviewMediaModal('image', 'hide');
    showUploadMediaModal('image');
})

previewVideoModal.find('.edit-btn').on('click', function () {
    showPreviewMediaModal('video', 'hide');
    showUploadMediaModal('video')

})

previewYoutubeModal.find('.edit-btn').on('click', function () {
    showPreviewMediaModal('youtube', 'hide');
    showUploadMediaModal('youtube')
})




//Edit main model 
var editMainModelBtn = $('#editMainModelBtn');
var editMainModelModal = $('#editMainModelModal');
var removeMediaModal = $('#removeMediaModal');

editMainModelBtn.on('click', function () {
    editMainModelModal.modal('show')
})

//remove media card
allCardMedia.find('.delete-btn').on('click', function () {
    removeMediaModal.modal('show')
})

removeMediaModal.find('.close-btn').on('click', function () {
    removeMediaModal.modal('hide')
})

removeMediaModal.find('.yes-btn').on('click', function () {
    // delete media card here...
    removeMediaModal.modal('hide')
})


var pageLoading = $('#productImageLoading')
var pageSelectFirst = $('#productImageSelectFirst')
var pageContent = $('#productImageMain')

function productImageState(state) {
    switch(state) {
        case 'loading':
            pageLoading.show();
            pageSelectFirst.hide();
            pageContent.hide();
            break;
        case 'select-first':
            pageLoading.hide();
            pageSelectFirst.show();
            pageContent.hide();
            break;
        case 'content':
            pageLoading.hide();
            pageSelectFirst.hide();
            pageContent.show();
            break;
    }
}