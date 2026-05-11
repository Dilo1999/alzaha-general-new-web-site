<?php

namespace App\Http\Controllers;

use App\Services\SeoService;
use App\Support\FormMailer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function show(SeoService $seo): View
    {
        $seo->applyForPage('quote', [
            'meta_title' => 'Get a Quote',
            'meta_description' => 'Request a quote for premium sourcing and supply chain solutions. Discuss your procurement needs with Al Zaha.',
        ]);

        return view('pages.quote');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'industry' => ['nullable', 'string', 'max:255'],
            'details' => ['nullable', 'string', 'max:20000'],
            'file' => ['nullable', 'file', 'max:10240'],
        ]);

        $file = $request->file('file');

        if (! FormMailer::sendQuote($validated, $file)) {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'We could not send your quote request right now. Please try again later or contact us directly.',
                ]);
        }

        return redirect()->route('quote')->with('quote_success', true);
    }
}

