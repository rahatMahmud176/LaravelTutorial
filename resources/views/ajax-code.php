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