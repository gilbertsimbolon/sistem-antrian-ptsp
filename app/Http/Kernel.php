namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
protected $routeMiddleware = [
    // default bawaan Laravel
    'auth' => \App\Http\Middleware\Authenticate::class,
    // tambahkan ini
    'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
}