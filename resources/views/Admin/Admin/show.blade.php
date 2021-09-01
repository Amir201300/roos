<div class="modal fade" id="userInfoModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="userName"><i class="ti-marker-alt m-r-10"></i> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 showDetilse">
                            <h5><i class="fa fa-check"></i>رقم العضو</h5>
                            <p class="name_ar valueModal" id="idShow"></p>
                        </div>
                        <div class="col-md-6 showDetilse">
                            <h5><i class="fa fa-check"></i>الاسم</h5>
                            <p class=" valueModal" id="nameUserShow"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><span class="btn-label"><i class="fas fa-dollar-sign"></i></span> رقم الهاتف</h5>
                            <p class="name_en valueModal" id="phoneShow"></p>
                        </div>
                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-star"></i>البريد الالكتروني</h5>
                            <p class="main valueModal" id="emailShow"></p>
                        </div>
                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-image"></i>النوع</h5>
                            <p class="status valueModal" id="genderShow"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-check"></i>رصيد المحفظة</h5>
                            <p class="status valueModal" id="balance"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-check"></i>وضع المندوب</h5>
                            <p class="status valueModal" id="deliveryShow"></p>
                        </div>

                        <div class="col-md-6 showDetilse">
                            <h5><i class="fas fa-calendar"></i>تاريخ التسجيل :</h5>
                            <p class="valueModal" id="created_atUser"></p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('main.close')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

