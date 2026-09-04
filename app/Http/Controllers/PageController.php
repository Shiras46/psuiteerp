<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeHero;
use App\Models\Solution;
use App\Models\Client;
use App\Models\DemoRequest;
use App\Models\ContactRequest;

class PageController extends Controller
{
    public function home()
    {
        $hero = HomeHero::first();
        $heroSlides = \App\Models\HeroSlide::where('is_active', true)->orderBy('order')->get();
        $solutions = Solution::all();
        $clients = Client::all();
        return view('pages.home', compact('hero', 'heroSlides', 'solutions', 'clients'));
    }

    public function solutions()
    {
        $solutions = Solution::all();
        return view('pages.solutions.index', compact('solutions'));
    }

    public function solution($slug)
    {
        $solution = Solution::where('slug', $slug)->firstOrFail();

        if (view()->exists("pages.solutions.custom.{$slug}")) {
            return view("pages.solutions.custom.{$slug}", compact('solution'));
        }

        return view('pages.solutions.show', compact('solution'));
    }

    public function clients()
    {
        $files = glob(public_path('images/client/*.*'));
        $clientImages = [];
        if ($files) {
            foreach ($files as $file) {
                $clientImages[] = asset('images/client/' . basename($file));
            }
        }
        return view('pages.clients', compact('clientImages'));
    }

    public function bookDemo()
    {
        $solutions = Solution::all();
        return view('pages.book-demo', compact('solutions'));
    }

    public function submitDemo(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:100',
            'solution_interested' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        DemoRequest::create($validated);

        $whatsappNumber = '96899107588';
        $whatsappMessage = "New Demo Request:\n"
            . "Name: {$validated['name']}\n"
            . "Company: {$validated['company']}\n"
            . "Email: {$validated['email']}\n"
            . "Phone: {$validated['phone']}\n"
            . "Country: {$validated['country']}\n"
            . "Solution: {$validated['solution_interested']}\n"
            . "Message: " . ($validated['message'] ?? 'N/A');

        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($whatsappMessage);

        return redirect()->away($whatsappUrl);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        ContactRequest::create($validated);

        $company = $request->input('company', 'N/A');
        $solution = $request->input('solution', 'N/A');

        $whatsappNumber = '96899107588';
        $whatsappMessage = "New Contact Request:\n"
            . "Name: {$validated['name']}\n"
            . "Email: {$validated['email']}\n"
            . "Phone: {$validated['phone']}\n"
            . "Company: {$company}\n"
            . "Solution: {$solution}\n"
            . "Message: {$validated['message']}";

        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text=" . urlencode($whatsappMessage);

        return redirect()->away($whatsappUrl);
    }
}
