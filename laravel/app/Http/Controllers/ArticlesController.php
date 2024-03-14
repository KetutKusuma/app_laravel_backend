<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\ArticleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{



    public function welcomeInfo(){
        $list = new Article();
        $list = $list->getWelcomeInfo();
        //$list['article_content']=html_entity_decode($list['article_content']);
        foreach ($list as $item){
            $item['article_content']=strip_tags($item['article_content']);
            $item['article_content']=$Content = preg_replace("/&#?[a-z0-9]+;/i"," ",$item['article_content']);
        }
        return response()->json($list);
    }
    public function test(){
        dd("enter");
    }

    public function register(){
        dd("masuk");
        $validator = Validator::make(request()->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->messages());
        }
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);
        if($user){
            return response()->json(['message' => 'pendaftaran berhasil']);
        }else{
            return response()->json(['message' => 'pendaftaran gagal']);
        }



    }


}
