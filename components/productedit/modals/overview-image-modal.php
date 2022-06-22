<!-- Start - Able to choose what image to display in overview page - RM - 05/27/2021 -->
<div class="modal fade" id="overviewImageModal" tabindex="-1" role="dialog" aria-labelledby="overviewImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="overviewImageModalLabel">Add Overview Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php $attributes = array('class' => 'overviewImage', 'id' => 'overviewImage', 'enctype' => 'multipart/form-data', 'role' => 'overviewImageForm'); ?>
            <?php echo form_open($this->class . '/addOverviewImage', $attributes); ?>
            <div class="modal-body">
                <fieldset>
                    <div class="form-group">
                        <label for="image">Overview Image</label>
                        <input type="hidden" name="overviewStyleID" id="overviewStyleID">
                        <input type="hidden" name="isRemove" id="isRemove" value="0">
                        <input type="file" class="form-control" id="imagepath" name="imagepath" />
                        <!-- <img src="/" width="100px" id="overviewImageShow" style="display:none;"> -->
                        <!-- Start - Optimize Product edit - AP - 10/25/2021 -->
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary removeOverviewImage">Remove</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- End - Able to choose what image to display in overview page - RM - 05/27/2021 -->