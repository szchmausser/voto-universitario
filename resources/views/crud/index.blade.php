@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          
          <div class="panel-heading">Principal</div>
          <div class="panel-body">

            @if((Auth::user()->role === 'admin') || (Auth::user()->role === 'supervisor') || (Auth::user()->role === 'editor'))
              <a id="boton" href="{{action('CRUDController@create')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo registro</a>
            @elseif(Auth::user()->role === '')
              <a id="boton" class="btn btn-primary" disabled="disabled"><i class="fa fa-plus-square" aria-hidden="true"></i> Nuevo registro</a>
            @endif

            @include('crud.includes.info')
            @include('crud.includes.imports')

            <div class="scrollable">

              <table id="users-table" class="table table-striped table-hover table-condensed">
                <thead>
                  <tr>
                    <th>ACCIONES</th>
                    <th>VOTO</th>
                    <th>CEDULA</th>
                    <th>TELEFONO</th>
                    <th>APELLIDOS</th>
                    <th>NOMBRES</th>
                    <th>SEXO</th>
                    <th>UNIVERSIDAD</th>
                    <th>CARRERA</th>
                    <th>ESTADO</th>
                    <th>MUNICIPIO</th>
                    <th>PARROQUIA</th>
                    <th>CENTRO</th>
                    <th>SECTOR</th>
                    <th>SUBSECTOR</th>
                  </tr>
                </thead>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

  $(document).ready(function() {

    //Establecer formato de fecha en español para moment.js
    //http://momentjs.com/docs/#/i18n/
    moment.locale('es');

    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ URL::to('datatable') }}',
      //Visualizar y ordenar controles en la parte superior e inferior de la tabla
      //https://datatables.net/forums/discussion/29866/datatables-buttons-removes-the-length-menu
      dom:'<"top"Blfi<"clear">>rt<"bottom"Bpi<"clear">>',
      // OPCIONES DISPONIBLES PARA USAR EN EL DOM:
      //l - Length changing | f - Filtering input | t - The Table! | i - Information | p - Pagination | r - pRocessing
      //< and > - div elements | <"#id" and > - div with an id | <"class" and > - div with a class | <"#id.class" and > - div with an id and class
      pageLength: 10,
      lengthMenu: [
        [10, 25, 50, 100, 250, 500, 1000, -1],
        [10, 25, 50, 100, 250, 500, 1000,
        "Todos"]
      ],
      /*https://datatables.net/examples/basic_init/filter_only.html*/
      paging: true,
      /*https://stackoverflow.com/questions/13290626/datatable-hide-the-show-entries-dropdown-but-keep-the-search-box
      searching: false,*/
      buttons: [
      /*https://datatables.net/reference/option/buttons.buttons.text#Examples
      https://datatables.net/extensions/buttons/examples/html5/columns.html*/
        { extend: 'copyHtml5',
          title: 'Datos exportados',
          text: 'Copiar al portapapeles',
          exportOptions: {
            columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
          } 
        },
        { extend: 'excelHtml5',
            title: 'Datos exportados',
            text: 'Exportar a hoja de calculo',
            exportOptions: {
              columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
            }
        },
        /*https://github.com/bpampuch/pdfmake/blob/master/README.md*/
        { extend: 'pdfHtml5',
            filename: 'datos_exportados',
            title: 'RESULTADOS DE LA EXPORTACION:' + '\n' + moment().format('L'),
            message: '',
            text: 'Exportar a PDF',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            pageMargins: [ 10, 10, 10, 10 ],
            exportOptions: {
              columns: [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14 ]
            },
            /*https://stackoverflow.com/questions/40363322/how-to-style-title-in-exported-pdf-in-datatable*/
            customize: function(doc) {
              doc.styles.title = {
                color: '#2D4154',
                fontSize: '12',
                background: 'white',
                alignment: 'center'
              }
            }
        },
        { extend: 'print', text: 'Imprimir' }
      ],
      language: { /*https://datatables.net/reference/option/language*/
        "search": "_INPUT_",
        "searchPlaceholder": "Búsqueda general...", /*https://datatables.net/reference/option/language.searchPlaceholder*/
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
      columnDefs: [
        {orderable: false, targets: [0]}
      ],
      columns: [  
        {"mRender": function ( data, type, row ) {
          //https://datatables.net/reference/option/columns.searchable
          //https://stackoverflow.com/questions/30299202/crud-laravel-5-how-to-link-to-destroy-of-resource-controller
          //https://stackoverflow.com/questions/43842996/delete-a-value-from-a-laravel-5-4-database
          return '@if(Auth::user()->role === 'admin')<a href={{ URL::to("crud") }}/'+row.id+'/edit button type="button" class="anchofijo btn btn-info btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a><form method="POST" action="{{ URL::to("destroy") }}/'+row.id+'"><input type="hidden" name="_method" value="delete"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="anchofijo btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button></form>@elseif((Auth::user()->role === 'supervisor') || (Auth::user()->role === 'editor'))<div class="btn-group-xs btn-group-vertical"><a href={{ URL::to("crud") }}/'+row.id+'/edit button type="button" class="btn btn-info btn-xs delete-user"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a><a class="btn btn-danger btn-xs" disabled="disabled"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</a></div>@elseif(Auth::user()->role === '')<div class="btn-group-xs btn-group-vertical"><a class="btn btn-info btn-xs" disabled="disabled"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a><a class="btn btn-danger btn-xs" disabled="disabled"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</a></div>@endif';}},
        {data: 'VOTO'},
        {data: 'CEDULA'},
        {data: 'TELEFONO'},
        {data: 'APELLIDOS'},
        {data: 'NOMBRES'},
        {data: 'SEXO'},
        {data: 'UNIVERSIDAD'},
        {data: 'CARRERA'},
        {data: 'ESTADO'},
        {data: 'MUNICIPIO'},
        {data: 'PARROQUIA'},
        {data: 'CENTRO'},
        {data: 'SECTOR'},
        {data: 'SUBSECTOR'}
      ]
    });

  //SIN APLICAR TODAVIA: 
    //Desabilitar busqueda inteligente, por busqueda exactas:
      //https://datatables.net/forums/discussion/25335/searching-an-exact-match
      //https://stackoverflow.com/questions/8609577/jquery-datatables-filter-column-by-exact-match

  var table = $('#users-table').DataTable();

  //CAMPOS DE BUSQUEDA EN COLUMNAS INDIVIDUALES AL PIE DE TABLA //
  //https://stackoverflow.com/questions/25894660/how-to-disable-a-search-filter-on-a-specific-column-on-a-datatable

    // Setup - add a text input to each footer cell
    //Exclude columns 3, 4, and 5
    $('#users-table tfoot th').not(":eq(0),:eq(2),:eq(3),:eq(4),:eq(5),:eq(6)").each( function () {
      var title = $('#users-table thead th').eq( $(this).index() ).text();
      $(this).html( '<input style="width:100%;" type="text" placeholder="'+title+'" />' );
    });

    // DataTable
    var table = $('#users-table').DataTable();

      // Apply the search
    table.columns().eq( 0 ).each( function ( colIdx ) {
      //Do not add event handlers for these columns
      if (colIdx == 0 || colIdx == 2 || colIdx == 3 || colIdx == 4 || colIdx == 5 || colIdx == 6) return; 
        $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
          table.column( colIdx ).search( this.value ).draw();
        });
    });

  });
  </script>

@endsection