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
                                <label for="example-email">الاسم</label>
                                <input type="text" id="name" name="name" required class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-email">البريد الالكتروني</label>
                                <input type="email" id="email" name="email" required class="form-control"   >
                            </div>
                        </div>

                        <div class="col-md-6=4">
                            <div class="form-group">
                                <label for="example-email">كلمة السر</label>
                                <input type="text" id="password" name="password"  class="form-control" >
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-email">الهاتف</label>
                                <input type="number" id="phone" name="phone" class="form-control"  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-email">المسمى الوظيفي</label>
                                <input type="text" id="jop" name="jop" class="form-control"   >
                            </div>
                        </div>
                        {{-- role section --}}
                        @foreach($roles as $row)
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="example-email">{{$row->name}}</label>
                                <input type="checkbox" value="{{$row->id}}" id="role_{{$row->id}}" name="roles[]">
                            </div>
                        </div>
                        @endforeach

                        {{--end role section --}}


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
