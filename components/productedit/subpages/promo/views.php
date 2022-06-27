<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h5 class="card-title">Promo</h5>
                <p class="card-subtitle text-muted">Edit Promo of your product</p>
            </div>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-12">
                <h6>Ribbon</h6>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="pr_ribbonText">Text</label>
                    <select id="pr_ribbonText" name="ribbonText" class="form-control">
                        <option value="">(Hide)</option>
                        <option value="Top Seller">Top Seller</option>
                        <option value="Our Pick">Our Pick</option>
                        <option value="Staff Pick">Staff Pick</option>
                        <option value="Popular">Popular</option>
                        <option value="Top Rated">Top Rated</option>
                        <option value="New">New</option>
                        <option value="Sale">Sale</option>
                        <option value="On Sale">On Sale</option>
                        <option value="Summer Sale">Summer Sale</option>
                        <option value="Winter Sale">Winter Sale</option>
                        <option value="Cyber Monday">Cyber Monday</option>
                        <option value="Holiday Sale">Holiday Sale</option>
                        <option value="XMAS sale">XMAS sale</option>
                        <option value="Super Sale">Super Sale</option>
                        <option value="Mega Sale">Mega Sale</option>
                        <option value="Free Shipping">Free Shipping</option>
                        <option value="Hanes Sale">Hanes Sale</option>
                        <option value="Gildan Sale">Gildan Sale</option>
                        <option value="Members Discount" selected="">Members Discount</option>
                        <option value="Clearance">Clearance</option>
                        <option value="Final Sale">Final Sale</option>
                        <option value="Bestseller">Bestseller</option>
                        <option value="Lowest Price">Lowest Price</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-group">
                        <label for="pr_ribbonCustomText">Custom Text</label>
                        <input class="form-control" id="pr_ribbonCustomText" placeholder="Custom text here">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="pr_ribbonPosition">Position</label>
                    <select id="pr_ribbonPosition" name="ribbonPosition" class="form-control">
                        <option value="1">Top-Left</option>
                        <option value="2">Top-Right</option>
                        <option value="3">Bottom-Left</option>
                        <option value="4">Bottom-Right</option>
                    </select>
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="pr_ribbonTextColor">Background Color</label>
                    <input class="form-control" type="color" value="#ff0000" id="pr_ribbonTextColor">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="pr_ribbonBgColor">Text Color</label>
                    <input class="form-control" type="color" value="#ff0000" id="pr_ribbonBgColor">
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="pr_ribbonShadow">
                            <label class="custom-control-label" for="pr_ribbonShadow">Enable Ribbon Shadow</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="pr_ribbonUseCustomRibbonText">
                            <label class="custom-control-label" for="pr_ribbonUseCustomRibbonText">Use Custom Ribbon Text</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="card-body d-flex pt-0 pb-3">
        <button class="btn btn-primary px-5 ml-auto">Save</button>
    </div>
</div>