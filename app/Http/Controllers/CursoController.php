<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreCurso;//al usar este la validate de store pasa a Storecurso/rules

class CursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate(); //en la var se almacenan todos los registros de la tabla cursos
        return view('cursos.index', compact('cursos')); //cursos es la carpeta, index el archivo blade
    }
    
    public function create(){
        return view('cursos.create');
    }
    
    public function store(StoreCurso $request){//ahora es un objeto de tipo StoreCurso

        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso);
    //laravel accede al id del objeto de $curso
    }//en create agrego la ruta en action del form */
    $curso = Curso::create($request->all());//hace lo mismo que lo de arriba
    return redirect()->route('cursos.show',$curso);

}
    
    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }
    
    public function edit(curso $curso){//recibo la var id que envia route en web.php
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request,Curso $curso){

        $request -> validate([//para que no ingrese campos vacios en el formulario, en la vista van los msj de error
//para poner mas de una regla de validacion, uso | seguido de la nueva
            'name'=>'required | max:10',
            'descripcion' => 'required | min:10',
            'categoria' => 'required'
        ]);
//ir a la vista cursos.edit y poner @error y value = {old('atributo')}
        /*$idcurso->name = $request->name;
        $idcurso->descripcion = $request->descripcion;
        $idcurso->categoria = $request->categoria;
        $idcurso->save(); la siguiente linea hace lo mismo que lo anterior*/
        
        $curso->update($request->all());
        
        return redirect()->route('cursos.show',$curso);
    }
   
    public function destroy(Curso $curso){
        
        $curso->delete();//agregar boton borrar en la vista show
        
        return redirect()->route('cursos.index');
    }
}
