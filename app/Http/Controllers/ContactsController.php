<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactsController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $text = Session::get('theme') === 'classic'
            ? 'Данный текст предназначен для темы CLASSIC'
            : 'Данный текст должен использоваться при выбранной теме CUBA';

        return view('contacts', ['text' => $text]);
    }

}
