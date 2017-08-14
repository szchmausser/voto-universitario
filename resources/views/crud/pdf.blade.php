<!-- pdf.blade.php -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <table class="table table-bordered">
    <tr>
      <td>
        {{$crud->CEDULA}}
      </td>
      <td>
        {{$crud->APELLIDOS}}
      </td>
    </tr>
    <tr>
      <td>
        {{$crud->NOMBRES}}
      </td>
      <td>
        {{$crud->UNIVERSIDAD}}
      </td>
    </tr>
  </table>
</body>

</html>