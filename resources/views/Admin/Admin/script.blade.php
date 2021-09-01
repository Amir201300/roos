@include('Admin.includes.scripts.dataTableHelper')

<script type="text/javascript">

    var table = $('#datatable').DataTable({
        bLengthChange: false,
        searching: true,
        responsive: true,
        'processing': true,
        'language': {
            'loadingRecords': '&nbsp;',
            'processing': '<div class="spinner"></div>',
            "search": "بحث :"
        },
        serverSide: true,

         order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],


        ajax: "{{ route('Admin.allData') }}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'jop', name: 'jop'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#formSubmit').submit(function (e) {
        e.preventDefault();
        saveOrUpdate(save_method =='add' ?"{{ route('Admin.create') }}": "{{ route('Admin.update') }}");
    });


    function editFunction(id) {

        save_method = 'edit';

        $('#err').slideUp(200);

        $('#loadEdit_' + id).css({'display': ''});

        $.ajax({
            url: "/Admin/Admin/edit/" + id,
            type: "GET",
            dataType: "JSON",

            success: function (data) {

                $('#loadEdit_' + id).css({'display': 'none'});

                $('#save').text('تعديل');
                $('#titleOfModel').text('تعديل الموظف');
                $('#formSubmit')[0].reset();
                $('#formModel').modal();
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#phone').val(data.phone);
                $('#jop').val(data.jop);
                $('#id').val(data.id);
                for (var i=0;i<12;i++) {
                    data.roles_ids.includes(i) ? $('#role_'+i).attr('checked', 'checked') : $('#role_'+i).prop('checked', false);
                }
            }
        });
    }


    function deleteFunction(id, type) {
        if (type == 2 && checkArray.length == 0) {
            alert('لم تقم بتحديد اي عناصر للحذف');
        } else if (type == 1) {
            url = "/Admin/Admin/destroy/" + id;
            deleteProccess(url);
        } else {
            url = "/Admin/Admin/destroy/" + checkArray + '?type=2';
            deleteProccess(url);
            checkArray = [];
        }
    }

    function ChangeStatus(status,id) {
        Toset('الطلب قيد التتنفيد','info','يتم تنفيذ طلبك الان',false);
        $.ajax({
            url : '/Admin/Admin/ChangeStatus/' +id +'?status='+status,
            type : 'get',
            success : function(data){
                $.toast().reset('all');
                table.ajax.reload();
                swal(data.message, {
                    icon: "success",
                });
            }
        })
    }

</script>


<script>
    $('#seachForm').submit(function(e){
        e.preventDefault();
        var formData=$('#seachForm').serialize();
        table.ajax.url('/Admin/Admin/allData?'+formData);
        table.ajax.reload();
        Toset('تمت العملية بنجاح','success','',5000);

    })
</script>
