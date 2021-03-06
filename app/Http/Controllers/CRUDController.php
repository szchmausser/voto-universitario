<?php

namespace App\Http\Controllers;

use App\Crud;
use App\Http\Requests\CrudRequest;
use Datatables;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use PDF;

//http://appdividend.com/2017/05/02/laravel-5-4-crud-example-scratch/

//http://appdividend.com/2017/05/08/generate-pdf-blade-laravel-5-4/
//composer require barryvdh/laravel-dompdf

//https://laraveles.com/implementacion-datatables-laravel-5-4/
//composer require yajra/laravel-datatables-oracle
//https://www.youtube.com/watch?v=WKS6kO9zJQI
//https://datatables.yajrabox.com/eloquent/basic-object
//https://github.com/yajra/laravel-datatables
//https://stackoverflow.com/questions/33122553/class-datatables-does-not-exist-error-when-using-yajra-laravel-datatables

//composer require fortawesome/font-awesome

class CRUDController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all()->toArray();
        return view('crud.index', compact('cruds'));
    }

    /**
     * [datatable description]
     * @return [type] [description]
     */
    public function datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(Crud::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrudRequest $request)
    {
        $crud = Crud::create(request()->all());
        return redirect()->to('crud')->with('info', 'El registro fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $crud = Crud::find($id);
            Log::info('El usuario '.Auth::user()->name.' esta editando el registro: '.$crud->id.', '.$crud->NOMBRES.', '.$crud->APELLIDOS.', '.$crud->UNIVERSIDAD.', '.$crud->VOTO.', '.$crud->TELEFONO);
            return view('crud.edit', compact('crud', 'id', 'user'));
        } catch (Exception $e) {
            Log::debug('El usuario '.Auth::user()->name.' intento editar el registro '.$id.' , pero ocurrio una excepcion: '.$e);
            return redirect()->to('crud')->with('warning', 'No es posible editar el registro especificado');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrudRequest $request, $id)
    {
        //Buscar el registro especifico el cual se va a editar
        $crud = Crud::find($id);
        //Capturar todos los datos que vienen desde la validacion correspondientes a ese registro
        $data = request()->all();
        //dd ($data);
        //Almacenar los nuevos valores en la BD
        $crud->update($data);
        Log::info('El usuario '.Auth::user()->name.' ha editado el registro: '.$crud->id.', '.request()->nombres.', '.request()->apellidos.', '.request()->universidad.', '.request()->voto.', '.request()->telefono);
        return redirect()->to('crud')->with('info', 'El registro fue editado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
        $crud->delete();

        return redirect()->to('crud')->with('info', 'El registro fue eliminado exitosamente');
    }

    /**
     * [descargarPDF description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function descargarPDF($id)
    {
        $crud = Crud::find($id);
        $pdf = PDF::loadView('crud.pdf', compact('crud'));
        return $pdf->download('invoice.pdf');
    }

    /**
     * [logout description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/crud');
    }
}
