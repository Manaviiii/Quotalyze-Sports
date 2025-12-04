<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Carbon\Carbon;

class LogVisit
{
    /**
     * Maneja el registro de visitas.
     */
    public function handle($request, Closure $next)
    {
        // 👉 IMPORTANTE: Ignorar cualquier petición que NO sea GET
        if (!$request->isMethod('get')) {
            return $next($request);
        }

        // IP del usuario
        $ip = $request->ip();

        // Página visitada
        $pagina = $request->path();
        if ($pagina === '') {
            $pagina = '/';
        }

        // User agent
        $userAgent = $request->header('User-Agent');

        // Evitar guardar bots
        $bots = ['bot', 'crawl', 'spider', 'slurp'];
        foreach ($bots as $bot) {
            if (stripos($userAgent, $bot) !== false) {
                return $next($request);
            }
        }

        // Buscar si ya existe registro de esta IP en esta página
        $visit = Visit::where('ip', $ip)
                      ->where('pagina', $pagina)
                      ->first();

        if ($visit) {
            // Actualizar contador
            $visit->visitas += 1;
            $visit->ultima_visita = Carbon::now();
            $visit->save();
        } else {
            // Registrar nueva visita
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
