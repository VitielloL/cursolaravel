<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function indexRedirect()
    {
        return redirect()->route('posts.index');
        ;
    }

    public function index()
    {
        return '<h1>Listagem do usuario com o codigo </h1>';
    }

    public function getData()
    {
        return '<h1>Disparou ação de GET</h1>';
    }

    public function postData(Request $request)
    {
        // dd($request);
        return '<h1>Disparou ação de POST</h1>';
    }

    public function testPut(Request $request)
    {
        echo '<h1>usuario da edição é o de codigo 1</h1>';

        return '<h1>Disparou ação de PUT</h1>';
    }

    public function testPatch(Request $request)
    {
        echo '<h1>usuario da edição é o de codigo 1</h1>';

        return '<h1>Disparou ação de PATCH</h1>';
    }

    public function testMatch(Request $request)
    {
        echo '<h1>disparou a função de put/patch</h1>';
        echo '<h1>usuario da edição é o de codigo 2</h1>';
    }

    public function destroy()
    {
        return '<h1>Disparou ação de Delete para o registro 1</h1>';
    }

    public function userComments($id, $comment = null)
    {
        echo 'controllet: users metodo: usercomments';
        var_dump($id, $comment);
    }

    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();

        dd($route, $name, $action);
    }
}
