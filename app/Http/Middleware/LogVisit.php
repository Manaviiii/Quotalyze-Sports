<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visit;
use Carbon\Carbon;

class LogVisit
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $pagina = $request->path() ?: '/';
        $userAgent = $request->header('User-Agent');

        // Detectar bots básicos
        $bots = ['bot', 'crawl', 'spider', 'slurp'];
        foreach ($bots as $bot) {
            if (stripos($userAgent, $bot) !== false) {
                return $next($request); // ignorar bots
            }
        }

        // Buscar si ya existe visita previa
        $visit = Visit::where('ip', $ip)
                      ->where('pagina', $pagina)
                      ->first();

        if ($visit) {
            $visit->visitas += 1;
            $visit->ultima_visita = Carbon::now();
            $visit->save();
        } else {
            Visit::create([
                'ip' => $ip,
                'pagina' => $pagina,
                'user_agent' => $userAgent,
                'visitas' => 1,
                'primera_visita' => Carbon::now(),
                'ultima_visita' => Carbon::now(),
            ]);
        }

        return $next($request);
    }
}
