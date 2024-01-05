<?php



namespace App\Http\Middleware;



use Closure;

use Illuminate\Http\Request;

use Auth;

class Admin_Check

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

        if (Auth::check()) {
            
            $User_role = auth()->user()->role;
            if ($User_role != 1 && $User_role != 3) {
                
                return redirect('/adminpanel');
            }
        } else {
            
            // return redirect()->back();

            return  redirect('/adminpanel');
        }



        $response = $next($request);

        $response->headers->set('Cache-Control', 'nocache, no-store, max-age=0, must-revalidate');

        $response->headers->set('Pragma', 'no-cache');

        $response->headers->set('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');

        return $response;
    }
}
