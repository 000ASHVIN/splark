<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        // $v8 = new \V8Js();

        // $jsOutput = $v8->executeString('
        //     var hello = "hello";
        //     var world = "world";
        //     hello + " " + world;
        // ');
        // $app_source = \File::get(public_path('js/server.js'));
        // dd($app_source);
        $html = $this->render();
        return view('welcome', ['html' => $html]);
    }

    public function render() {
        $renderer_source = \File::get(base_path('node_modules/vue-server-renderer/basic.js'));
        $app_source = \File::get(public_path('js/server.js'));
    
        $v8 = new \V8Js();
        
        ob_start();
    
        $v8->executeString('var process = { env: { VUE_ENV: "server", NODE_ENV: "production" }}; this.global = { process: process };');

        $v8->executeString($renderer_source);

        $v8->executeString($app_source);
    
        return ob_get_clean();
    }
}
