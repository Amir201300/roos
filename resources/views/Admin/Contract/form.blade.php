<div class="modal fade bd-example-modal-lg" id="formModel" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formSubmit">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="titleOfModel"><i class="ti-marker-alt m-r-10"></i> Add new </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">اسم الباقه </label>
                                <input type="text" id="package_name" name="package_name"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">اسم الباقه بالعربيه</label>
                                <input type="text" id="package_name_ar" name="package_name_ar"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email"> سعر الباقه</label>
                                <input type="text" id="price" name="price"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email"> مده الباقه</label>
                                <input type="text" id="duration" name="duration"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email"> لينك تعريفي يويتوب</label>
                                <input type="text" id="link" name="link"  class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">صوره</label>
                                <input type="file" id="photo" name="photo"  class="form-control"   >
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">عرض في الرئيسية</label>
                                <select  id="status" name="status"  class="form-control"   >
                                    <option value="1">نعم</option>
                                    <option value="2">لا</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-email"> معلومات الباقه</label>
                                <textarea type="text" cols="5" rows="4" id="about_package" name="about_package"  class="form-control" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-email"> معلومات الباقه بالعربيه</label>
                                <textarea type="text" cols="5" rows="4" id="about_package_ar" name="about_package_ar"  class="form-control" ></textarea>
                            </div>
                        </div>


                    </div>
                </div>
                <div id="err"></div>
                <input type="hidden" name="id" id="id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">اغلاق</button>
                    <button type="submit" id="save" class="btn btn-success"><i class="ti-save"></i> حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
