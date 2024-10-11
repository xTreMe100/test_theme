<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetThemeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{

    /**
     * @param SetThemeRequest $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function changeTheme(SetThemeRequest $request): \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        Session::put('theme', $request->get('theme'));
        return redirect('/');
    }

}
