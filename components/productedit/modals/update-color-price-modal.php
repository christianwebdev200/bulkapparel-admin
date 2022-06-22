 <!-- Start - Add new colorpricecodename update option in edit products - AP - 09/24/2021 -->
 <div class="backdrop-new" id="cpcnModal" style="display:none;overflow:hidden;">
     <div class="modal__content" style="height: auto;">
         <div class="modal--feedback">
             <button class="btn modal__exit cpcnClose close">✖</button>

             <div class="modal__body mt-2 px-lg-2 px-1" style="text-align: center;">
                 <h2 class="modal__heading mb-1 mb-lg-1 mt-2 mt-lg-3 title">Update Color Price Code Name</h2>
                 <div class="modal__text text-left extra mt-1 mb-2" style="color: #000;">
                     <label for="colorPriceCodeName">Enter color price code name:</label>
                     <input type="hidden" id="skuColorPriceCodeName" value="">
                     <input type="hidden" id="skuCodeName" value=""> <!-- Start - issue on updating CPCN - RM - 10/21/2021 -->
                     <input type="text" class="form-control" name="colorPriceCodeName" id="colorPriceCodeName" />
                 </div>
             </div>

             <div class="modal__body d-flex px-2 mt-2">
                 <button type="button" class="btn btn--feedback cpcnClose mr-auto" style="color:#fff !important;">Close</button>
                 <button type="submit" id="btnSaveColorPriceCodeName" class="btn " style="color:#fff !important; margin-right:0 !important;">Save</button>
             </div>
         </div>
     </div>
 </div>
 <script>
     var cpcnModal = $('#cpcnModal');

     function showCpcnModal(value, closeFunction) {
         var browserBody = $('body,html');

         $(cpcnModal).find('#colorPriceCodeName').val(value);

         cpcnModal.show();
         browserBody.css('overflow', 'hidden');

         $(cpcnModal).find('.cpcnClose').on('click', function() {
             cpcnModal.hide();
             browserBody.css('overflow', 'visible');
             if (closeFunction) {
                 closeFunction();
             }
         })
     }
 </script>
 <!-- End - Add new colorpricecodename update option in edit products - AP - 09/24/2021 -->