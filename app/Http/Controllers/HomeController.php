<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\categoria;
use App\libros;
use App\prop_libro;
use App\User;
use App\solicitud;
use App\sol_propietario;
use App\sol_solicitante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//       SELECT a.* FROM libro a, prop_libro b
// WHERE a.id_libro=b.id_libro
// ORDER by  b.fecha
// LIMIT 3
        return view('home');
    }
    public function login()
    {
      return view('auth.login');
    }
    public function libros()
    {
      $usuario = auth()->user()->id;
      $seleccion = DB::select('select a.* from libro a, prop_libro b where b.id_libro= a.id_libro and b.id_user = ?', [$usuario] );
      return view('inicio.libros')->with(['seles'=>$seleccion]);
    }
    public function upload()
    {
      $categorias = categoria::get();
      return view('inicio.upload')->with(['categ'=>$categorias]);
    }
    public function perfilu()
    {
      return view('perfil.perfilu');
    }
    public function todos_libros()
    {
      $lista = libros::get();
      return view('catalogo.todos_libros')->with(['listas'=>$lista]);
    }
    public function nuevasol($id)
    {
      $usuario = auth()->user()->id;
      $seleccion = DB::select('select a.* from libro a, prop_libro b where b.id_libro= a.id_libro and b.id_user = ?', [$usuario] );
      $consulta = libros::where('id_libro', '=', $id )->first();
      return view('solicitudes.newsol')->with(['consulta'=>$consulta, 'seles'=>$seleccion]);
    }
public function nuevo($id , $id2)
{
  // id2 es el libro que yo quiero y id es el libro que le estoy ofreciendo
      $datosol = prop_libro::where('id_libro', '=', $id2 )->first();
      $datoprop = prop_libro::where('id_libro', '=', $id )->first();
      $solicitud = new solicitud();
      $solicitud->fecha_sol = date('Y-m-d H:i:s');
      $solicitud->id_status = 1;
      $solicitud->save();
      $solicitud2 = new sol_propietario();
      $solicitud2->id_solicitud = $solicitud->id_solicitud;
      $solicitud2->id_user = $datoprop->id_user;
      $solicitud2->id_libro = $datoprop->id_libro;
      $solicitud2->save();
      $solicitud3 = new sol_solicitante();
      $solicitud3->id_solicitud = $solicitud->id_solicitud;
      $solicitud3->id_user = $datosol->id_user;
      $solicitud3->id_libro = $datosol->id_libro;
      $solicitud3->save();
      $usuario = auth()->user()->id;
      $solicitudes = DB::select('select a.*, b.id_solicitud, b.id_status FROM libro a, solicitud b, sol_propietario c WHERE a.id_libro = c.id_libro AND c.id_user = ?',[$usuario],'ORDER by b.id_status ASC');
      return view('solicitudes.enviadas')->with(['solicitudes'=>$solicitudes]);
}
    public function categorias()
    {
      $pruebas = categoria::get();
      return view('catalogo.categorias')->with(['resultado'=>$pruebas]);
    }
    public function filtro($id)
    {
      $lista = libros::where('id_tipo', '=', $id )->get();
      return view('catalogo.todos_libros')->with(['listas'=>$lista]);
    }
    public function aprobadas()
    {
      $usuario = auth()->user()->id;
    $aprobadas = DB::select('select a.* FROM libro a, users b, solicitud c, sol_propietario d, sol_solicitante e WHERE d.id_libro = a.id_libro AND d.id_solicitud = c.id_solicitud AND d.id_user = b.id AND c.id_status = 3 AND d.id_solicitud = e.id_solicitud AND e.id_user = ?',[$usuario]);
      return view('solicitudes.aprobadas')->with(['aprobadas'=>$aprobadas]);
    }
    public function pendientes()
    {
      $usuario = auth()->user()->id;
      $nsolicitud = DB::select('select a.nombre, a.imagen_libro, a.id_libro, COUNT(b.id_solicitud) as total FROM libro a LEFT JOIN sol_solicitante b ON a.id_libro = b.id_libro WHERE b.id_user = ?',[$usuario],'GROUP by a.id_libro');
      return view('solicitudes.pendientes')->with(['nsolicitud'=>$nsolicitud]);
    }
    public function ver($id)
    {
      $solicitudes = DB::SELECT('select a.* FROM libro a, sol_propietario b, sol_solicitante c, solicitud d WHERE c.id_solicitud = d.id_solicitud AND b.id_solicitud = d.id_solicitud AND d.id_status = 1 AND b.id_libro = a.id_libro AND c.id_libro = ?',[$id]);
      $libro = libros::where('id_libro', '=', $id )->first();
      return view('solicitudes.ver')->with(['solicitudes'=>$solicitudes , 'consulta'=>$libro]);
    }
    public function rechazar($id, $id2)
    {
    $solicitud = DB::SELECT('select a.* FROM solicitud a, sol_solicitante b, sol_propietario c
                  WHERE b.id_solicitud = a.id_solicitud
                  AND b.id_solicitud = c.id_solicitud
                  AND c.id_libro = ?',[$id]);
    $nsolicitud = DB::SELECT('update solicitud a set a.id_status = 2 WHERE a.id_solicitud = ?',[$solicitud[0]->id_solicitud]);
    return back();
    }
    public function enviadas()
    {
      $usuario = auth()->user()->id;
      $solicitudes = DB::select('select a.*, d.id_solicitud, d.id_status from libro a, sol_solicitante b, sol_propietario c, solicitud d, users e WHERE b.id_solicitud = c.id_solicitud and d.id_solicitud = b.id_solicitud and b.id_libro = a.id_libro AND e.id = c.id_user AND c.id_user = ?',[$usuario], 'ORDER BY d.id_status ASC');
      return view('solicitudes.enviadas')->with(['solicitudes'=>$solicitudes]);
    }
    public function save(Request $request)
    {

      $libros = new libros();
      $libros->ISBN = $request->get('ISBN');
      $libros->nombre = $request->get('nombre');
      $libros->autor = $request->get('autor');
      $libros->editorial = $request->get('editorial');
      $libros->paginas = $request->get('paginas');
      $libros->edicion = $request->get('edicion');
      $libros->id_tipo = $request->get('id_tipo');
      $libro = $request->file('imagen_libro');
      $libros->imagen_libro = $libro->getClientOriginalName();
      \Storage::disk('local')->put($libros->imagen_libro,  \File::get($libro));
      $libros->save();
      $propiedad = new prop_libro();
      $propiedad->id_user = auth()->user()->id ;
      $propiedad->id_libro = $libros->id_libro;
      $propiedad->fecha = date('Y-m-d H:i:s');
      $propiedad->save();
      flash('La informacion se ha guardado satisfactoriamente')->success();
      $categorias = categoria::get();
      return view('inicio.upload')->with(['categ'=>$categorias]);
    }
}
