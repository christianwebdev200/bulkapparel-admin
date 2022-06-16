<div class="modal fade" id="editMainModelModal" tabindex="1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Style Model Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <a href="https://www.bulkapparel.com/image/fashion-wear/16_fm.jpg" target="_blank">
                            <img height="420" src="https://www.bulkapparel.com/image/fashion-wear/16_fm.jpg" loading="lazy">
                        </a>
                    </div>
                    <div class="col-12 mt-3">
                        <form>
                            <div class="form-group">
                                <label for="editModelUploadImageInput">Choose Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="editModelUploadImageInput" accept="image/*">
                                    <label class="custom-file-label" for="editModelUploadImageInput">Browse Image</label>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">Upload image that has 1000px size above</small>
                            </div>

                            <div class="form-group mb-0">
                                <label for="editModelImageFilenameInput">Custom Filename</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-describedby="editModelImageFilenameInput">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="editModelImageFilenameInput">.jpeg</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>