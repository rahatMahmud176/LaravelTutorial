<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>multipleRowInsert</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
 
<form action="multipleRowInfoSubmit" method="POST">
    @csrf
    <table class="table">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Model</th>
            <th scope="col">Supplier</th>
            <th scope="col">Qty</th>
            <th scope="col"> <a href="javascript:;" class="btn btn-success addRow">+</a> </th>
          </tr>                       

        </thead>
        <tbody>

          <tr>
            <th scope="row">1</th>
            <td>  
              <select class="form-control" name="modelName[]" id="">
                <option value="xiaomi">Xiomi</option> 
                <option value="sam">Sam</option> 
                <option value="realme">Realme</option> 
              </select> 
            </td>
            <td>
                <select class="form-control" name="supplierName[]" id="">
                    <option value="rana">Rana</option> 
                    <option value="rahat">Rahat</option> 
                    <option value="akash">Akash</option> 
                  </select> 
            </td>
            <td> <input type="text" name="qty[]" id=""></td>
            <td><button class="btn btn-danger deleteRow">-</button></td> 
          </tr> 
        </tbody>
      </table>
        <button class="btn btn-success" type="submit">Submit</button>
</form>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



      <script>
          $('thead').on('click','.addRow',function(){
              var tr =  '<tr>'+
                '<th scope="row">1</th>'+
            '<td>'+  
                '<select class="form-control" name="modelName[]" id="">'+
                '<option value="xiaomi">Xiomi</option>'+ 
                '<option value="sam">Sam</option>'+ 
                '<option value="realme">Realme</option>'+ 
                '</select>'+ 
              '</td>'+
            '<td>'+
                '<select class="form-control" name="supplierName[]" id="">'+
                    '<option value="rana">Rana</option>'+ 
                    '<option value="rahat">Rahat</option>'+ 
                    '<option value="akash">Akash</option>'+ 
                    '</select>'+ 
                  '</td>'+
            '<td> <input type="text" name="qty[]" id=""></td>'+
            '<td><button class="btn btn-danger deleteRow">-</button></td>'+ 
            '</tr>'

            $('tbody').append(tr)
          })

          $('tbody').on('click','.deleteRow',function(){
              $(this).parent().parent().remove();
          })
          
      </script>






</body>
</html>