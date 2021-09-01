<script>
function addFunction() {
save_method = 'add';

$('#save').text('حفظ');

$('#titleOfModel').text($('#titleOfText').text());

$('#formSubmit')[0].reset();

$('#formModel').modal();
}
</script>

<script>
    function saveOrUpdate(url){
        $("#save").attr("disabled", true);

        Toset('الطلب قيد التتنفيد','info','يتم تنفيذ طلبك الان',false);
        var id = $('#id').val();

        var formData = new FormData($('#formSubmit')[0]);

        $.ajax({
            url: url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.status == 1) {

                    $("#save").attr("disabled", true);

                    $.toast().reset('all');
                    swal(data.message, {
                        icon: "success",
                    });
                    table.ajax.reload();
                    $("#formModel").modal('toggle');
                    $("#save").attr("disabled", false);
                    $('#err').slideUp(200);
                }
            },
            error: function (y) {
                var error = y.responseJSON.errors;
                $('#err').empty();
                $.toast().reset('all');
                for (var i in error) {
                    for (var k in error[i]) {
                        var message = error[i][k];
                        $('#err').append("<li style='color:red'>" + message + "</li>");
                    }
                }
                $("#save").attr("disabled", false);
                $('#err').slideDown(200);
            }
        });
    }
</script>


{{-- custom Function to checkBox --}}
<script>

    var checkArray = [];

    function check(id) {

        if ($("#checkBox_" + id.toString() + "").is(":checked") == true) {

            if (jQuery.inArray(id, checkArray) === -1 || checkArray.length === 0) {

                checkArray.push(id);

            }

        } else {

            checkArray.splice(checkArray.indexOf(id), 1);

        }
        console.log(checkArray);
    }
</script>

{{-- custom Function to Delete --}}
<script>
    function deleteProccess(url) {

        swal({


            title: "هل انت متاكد ؟",


            icon: "warning",


            buttons: true,


            dangerMode: true,

        }).then((willDelete) => {
            if (willDelete) {
                Toset('الطلب قيد التتنفيد','info','يتم تنفيذ طلبك الان',false);
                $.ajax({

                    url: url,
                    type: "get",
                    success: function (data) {
                        table.ajax.reload();
                        var msg = data.message ? data.message : 'تم الحذف بنجاح';
                        swal(msg, {
                            icon: "success",
                        });
                        $.toast().reset('all');
                    },
                    error: function () {
                        Toset('خطا','error','حدث خطا حاول مجددا',false);
                    }
                });

            } else {
                swal("لم تتم العملية!");
            }
        });
    }

</script>



<script>
    function sendAjaxForm(url,model,submitButton,formName){
        $("#"+submitButton).attr("disabled", true);

        Toset('الطلب قيد التتنفيد','info','يتم تنفيذ طلبك الان',false);
        var id = $('#id').val();

        var formData = new FormData($('#'+formName)[0]);

        $.ajax({
            url: url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.status == 1) {

                    $("#save").attr("disabled", true);
                    $.toast().reset('all');
                    swal(data.message, {
                        icon: "success",
                    });
                    table.ajax.reload();
                    $("#"+model).modal('toggle');
                    $("#"+submitButton).attr("disabled", false);
                    $('#err').slideUp(200);
                }
            },
            error: function (y) {
            alert('حاول مجددا')
                $("#"+submitButton).attr("disabled", false);

            }
        });
    }
</script>
