<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CommandCenter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, env('COMMAND_CENTER_URL').'/get-akun/'.$request->route('id'));
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        $content = curl_exec ($ch);
        curl_close ($ch); 

        $data = json_decode($content, true);
        
        if(!$data['data']['count'] > 0){
            return response()->json([
                'success' => false,
                'message' => 'Access denied',
            ]);
     
        }
        return $next($request);
    }
}
