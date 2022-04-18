<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //
    public function index(){
       # return "Bienvenido a cursos";

       //Enviado una vista estructurada con html
        #$cursos = Curso::all();
        $cursos = Curso::orderBy('id', 'desc')->paginate(5);

       return view('cursos.index', compact('cursos'));
    }

    public function create(){
        #return "En esta página podrás crear un curso";

        //Enviado una vista estructurada con html
        return view('cursos.create');
    }

    public function show($curso){

        $curso = Curso::find($curso);

        #return "Este es el curso número: $curso";

       //Forma 1 de mandar variables a la vista
       #return view('cursos.show', ['curso'=>$curso]);

       //Forma 2
       //Enviado una vista estructurada con html y variables
       return view('cursos.show', compact('curso'));
    }

    public function store(StoreCurso $request, Curso $curso){

        #FORMA 1
       /*$curso = new Curso; 
       $curso->name = $request->name;
       $curso->description = $request->description;
       $curso->category = $request->category;
       $curso->save();
       return redirect()->route('cursos.index');*/

       #FORMA 2
        /* $curso = Curso::created([
           'name' => $request->name,
           'description' => $request->description,
           'category' => $request->category
       ]);*/

        #FORMA 3
        //$curso = Curso::create($request->all());

        #FORMA 4
        $curso->create($request->all());

        return redirect()->route('cursos.index');

    }

    public function edit(Curso $curso){

        return view('cursos.edit', compact('curso'));
        
    }

    public function update(StoreCurso $request, Curso $curso){

        #FORMA 1
        /*$curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();*/

        #FORMA 2
        $curso->update($request->all());
      
        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
