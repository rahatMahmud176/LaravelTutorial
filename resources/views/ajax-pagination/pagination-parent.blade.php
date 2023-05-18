<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Ajax pegination</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

    @csrf

        <div id="table_data">
            @include('ajax-pagination.pagination-child')
        </div>


<script> 
    $(document).ready(function(){
        $(document).on('click', '.relative', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            // console.log(page)
            fetch_data(page);
        }); 
        function fetch_data(page){
            var _token = $("input[name=_token]").val();
            $.ajax({
                url : "{{ route('pagination.fetch') }}",
                method: "POST",
                data  :{_token:_token, page:page},
                success: function(res){
                    console.log(res)
                    $('#table_data').html(res);
                }
            });
    } 
    }); 
</script>

</body>
</html>