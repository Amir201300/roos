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
            'sSearch' : 'بحث :',
            "paginate": {
                "next": "التالي",
                "previous": "السابق"
            },
            "sInfo": "عرض صفحة _PAGE_ من _PAGES_",
        },
        serverSide: true,

        order: [[0, 'desc']],

        buttons: ['copy', 'excel', 'pdf'],

        ajax: "{{ route('Packages.allData',['package_id'=>$Package_id])}}",

        columns: [
            {data: 'checkBox', name: 'checkBox'},
            {data: 'id', name: 'id'},
            {data: 'photo', name: 'photo'},
            {data: 'package_name', name: 'package_name'},
            {data: 'price', name: 'price'},
            {data: 'duration', name: 'duration'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#formSubmit').submit(function (e) {
        e.preventDefault();
        saveOrUpdate( save_method == 'add' ?"{{ route('Packages.create') }}" : "{{ route('Packages.update') }}");
    });


    function editFunction(id) {

        save_method = 'edit';

        $('#err').slideUp(200);

        $('#loadEdit_' + id).css({'display': ''});

        $.ajax({
            url: "/Admin/Packages/edit/" + id,
            type: "GET",
            dataType: "JSON",

            success: function (data) {

                $('#loadEdit_' + id).css({'display': 'none'});

                $('#save').text('تعديل');

                $('#titleOfModel').text(' تعديل الباقه');

                $('#formSubmit')[0].reset();

                $('#formModel').modal();

                $('#title').val(data.title);
                $('#price').val(data.price);
                $('#duration').val(data.duration);
                $('#about_package').val(data.about_package);
                $('#link').val(data.link);
                $('#is_now').val(data.is_now);
                $('#package_name').val(data.package_name);
                $('#status').val(data.status);
                $('#package_name_ar').val(data.package_name_ar);
                $('#about_package_ar').val(data.about_package_ar);
                $('#id').val(data.id);
            }
        });
    }


    function deleteFunction(id,type) {
        if (type == 2 && checkArray.length == 0) {
            alert('برجاء تحديد عناصر للحذف');
        } else if (type == 1){
            url =  "/Admin/Packages/destroy/" + id;
            deleteProccess(url);
        }else{
            url= "/Admin/Packages/destroy/" + checkArray + '?type=2';
            deleteProccess(url);
            checkArray=[];
        }
    }


</script>

<script>
    function ChangeStatus(status,id) {
        Toset('طلبك قيد التنفيذ','info','',false);
        $.ajax({
            url : '/Admin/Packages/ChangeStatus/' +id +'?status='+status,
            type : 'get',
            success : function(data){
                $.toast().reset('all');
                table.ajax.reload();
                Toset('تمت العملية بنجاح','success','',5000);
            }
        })
    }
</script>


