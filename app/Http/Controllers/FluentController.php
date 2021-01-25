<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>fluent strings</h1>';

        $slice = Str::of('Welcome to my youtube channel')->after('Welcome to');
        echo $slice.'<br>';
        $last = Str::of('momo.caleb.booo.abra.kadabr.home')->afterLast('.');
        echo $last .'<br>';
        $string = Str::of('hello ')->append('World');
        echo $string.'<br>';
        $lower = Str::of('MY NAME IS LARAVEL mine')->lower();
        echo $lower.'<br>';
        $upper = Str::of('MY NAME IS LARAVEL mine')->upper();
        echo $upper.'<br>';
        $john = 'SNK is boring';
        $replace = Str::of($john)->replace('boring', 'interesting');
        echo $replace.'<br>';
        $title = Str::of('this is a title')->title();
        echo $title.'<br>';
        $slug = Str::of('laravel 8 framework')->slug('-');
        echo $slug.'<br>';
        $str = Str::of('Laravel Framework')->substr(8,5);
        echo $str.'<br>';
        $str2 = Str::of('/8laravel8/')->trim('/');
        echo  $str2.'<br>';

    }
}
