<div class="modal fade" id="uploadImageModal" tabindex="2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="uploadImageInput">Choose Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadImageInput" accept="image/*">
                            <label class="custom-file-label" for="uploadImageInput">Browse Image</label>
                        </div>
                        <small id="emailHelp" class="form-text text-muted">Upload image that has 1000px size above</small>
                    </div>

                    <div class="form-group">
                        <label for="imageFilenameInput">Custom Filename</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="imageFilenameInput">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="imageFilenameInput">.jpeg</span>
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