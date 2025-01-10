<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
   public function index()
    {
         $topics = [
            (object)['title' => 'Основы социальной инженерии'],
            (object)['title' => 'Фишинг и его разновидности'],
            (object)['title' => 'Манипуляции в социальной инженерии'],
            (object)['title' => 'Безопасность от социальной инженерии'],
        ];
        return view('topics_list', ['topics' => $topics]);
    }
}