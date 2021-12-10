 <script>
     $(document).on('change', '#categoryId', function () {
        var catId = $(this).val();
        $.ajax({
            type: 'GET',
            url: "{{ url('sub-category-by-category-id') }}",
            data: {id:catId},
            dataType: 'json',
            success: function (res) {
                console.log(res);
            }
        })
    }) 
</script>



 <script>
     $(document).on('change', '#categoryId', function () {
        var catId = $(this).val();
        $.ajax({
            type: 'GET',
            url: "{{ url('sub-category-by-category-id') }}",
            data: {id:catId},
            dataType: 'json',
            success: function (res) {
               // console.log(res);
                var selectElement = $('#subCategoryId');
                selectElement.empty();
                var option = '';
                option +='<option selected disabled value="">--Select Sub Categroy--</option>';
                $.each(res, function(key, value){
                    option +='<option value=" '+value.id+' "> '+value.title+' </option>';
                })
                selectElement.append(option);
            }
        })
    }) 
</script>