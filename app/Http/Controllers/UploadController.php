<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //controller dedicado a upload de arquivos 

    public function store(Request $request){
        
        $upload->save();
        
        return redirect('/'); // redireciona o usuario para a pagina index da aplicação
        
    }

    public function userImage(Request $request){
        $file = $request->file('user-image');

        $extensionFile =  $file->getExtension();
    }
}
