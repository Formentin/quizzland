<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use user;
use App\models\Quetionario;
class QuestionarioController extends Controller
{
    //

    public function create(){
        $auth = new Auth;
        $user = $auth::User();
        return view('Questions.create', ['auth' => $auth]);
    }

    public function store(Request $request){
        /*estancia uma noca classe postagen*/
        $questionario= new Questionario;
    
        /* monta os dados a serem salvos no db*/
            $questionario->id = uniqid();
            $questionario->title = $request->title;
            $questionario->id_user= Auth::User()->id;
            $questionario->pin = random_int(10000000,99999999);
        
        /*salva os dados do form  no db*/
        $questionario->save();
        
        return redirect('/'); // redireciona o usuario para a pagina index da aplicação
        
    }


    public function show($id){

        $post = Postagens::finOrFail($id);

        return view('postagens.show',['post'=>$post]);
    }
}
