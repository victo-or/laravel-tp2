<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\Facades\App;

class localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if(session()->has('locale')){
        //     App::setLocale(session()->get('locale'));
        // }
        if(session()->has('locale') && session()->get('locale')!='en'){
            App::setLocale(session()->get('locale'));
            session()->put('localeDB', '_'.session()->get('locale'));
        }else{
            session()->put('localeDB', '');
        }
        return $next($request);
    }
}
