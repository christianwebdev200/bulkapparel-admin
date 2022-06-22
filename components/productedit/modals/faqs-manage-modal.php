<div id="faqsManageModal" class="modal " role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btnCloseFaqModal" data-bs-dismiss="modal">&times;</button>
                <h4 class="modal-title">Manage FAQs</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input id="faqModalFaqId" type="hidden" name="faqID">
                        <!-- Start - Q and A manage adjustment - AP - 11/12/2021 -->
                        <div class="form-group">
                            <label><strong>Author</strong></label>
                            <input id="faqModalStyleAuthor" type="text" name="name" class="form-control">
                        </div>
                        <!-- End - Q and A manage adjustment - AP - 11/12/2021 -->
                        <div class="form-group">
                            <label><strong>Question</strong></label>
                            <input id="faqModalStyleQuestion" type="text" name="question" class="form-control">
                        </div>
                        <!-- Start - And easy window where our staff can write reviews for our items and goes live directly. also for Answers - AP - 09/22/2021 -->
                        <div class="form-group">
                            <!-- Start - Q and A manage adjustment - AP - 11/12/2021 -->
                            <input id="faqModalStylePublished" type="checkbox" name="isPublished" value="1">
                            <label for="faqModalStylePublished"><strong>Published</strong></label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="date" id="faqModalPublishedAt" name="published_at" class="form-control" />
                                </div>
                            </div>
                            <!-- End - Q and A manage adjustment - AP - 11/12/2021 -->
                        </div>
                        <!-- End - And easy window where our staff can write reviews for our items and goes live directly. also for Answers - AP - 09/22/2021 -->
                        <div class="heading-container" style="margin-top: 14px; display: flex; justify-content: space-between;">
                            <h5 class="heading"><strong>Answers</strong></h5>
                            <button id="btnAddAnswer" style="height: 30px; padding: 6px 15px; margin: auto 0;" class="btn btn-primary btn-sm btn-compact"><i class="fa fa-plus"></i> Add Answer</button>
                        </div>
                        <!-- <div id="answers-json" style="display: none;"></div> -->
                        <div id="answer-container"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCancelFaq" class="btn btn-default btnCloseFaqModal" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btnSaveFaq" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>