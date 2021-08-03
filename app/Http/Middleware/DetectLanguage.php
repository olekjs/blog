<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DetectLanguage
{
    public function handle(Request $request, Closure $next)
    {
        $locale   = $request->route('locale');
        $language = Language::where('iso639_1_code', $locale)->firstOrFail();

        $request->merge([
            'language' => $language,
        ]);

        App::setLocale($locale);

        $request->route()->forgetParameter('locale');

        return $next($request);
    }
}
