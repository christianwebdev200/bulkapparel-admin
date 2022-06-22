<div id="faqsListModal" class="modal " role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseFaqListModal" data-bs-dismiss="modal">&times;</button>
                <h4 class="modal-title">Manage FAQs</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 col-md-offset-9">
                        <button id="btnAddFaq" class="btn btn-primary pull-right">Add FAQ</button>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 200px;">Question</th>
                                <th>Answer</th>
                                <th style="width: 150px;">Author</th>
                                <th style="width: 120px;">Status</th>
                                <th style="width: 140px;">Action</th>
                            </tr>
                        </thead>
                        <tbody id="faqsList"></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btnCloseFaqListModal" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" style="display: none;">Save</button> <!-- Start - Q and A are not working please make sure to test. double check - RM - 01/28/2022 -->
            </div>
        </div>
    </div>
</div>