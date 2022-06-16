<div class="modal fade" id="uploadVideoModal" tabindex="1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="uploadImageInput">Choose Video</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadVideoInput" accept="video/*">
                            <label class="custom-file-label" for="uploadVideoInput">Browse Video</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="uploadImageInput">Choose Thumbnails for the video</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadVideoThumbnailInput" accept="image/*">
                            <label class="custom-file-label" for="uploadVideoThumbnailInput">Browse Image</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="videoFilenameInput">Custom Filename</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="videoFilenameInput">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="videoFilenameInput">.jpeg</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>