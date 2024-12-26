<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Web;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class WebPageController extends Controller
{
    /**
     * Display the landingpage with all data.
     */
    public function landingpage()
    {
//      $data = DB::table('webs')->get();  // korrekt
        $data = DB::table('webs')->select('page', 'title', 'content')
            ->where('page', 'landingpage')
            ->get();
        return view('landingpage')->with(['data' => $data]);
    }

    public function datenschutz()
    {
        $data = DB::table('webs')
            ->select('page', 'title', 'content')
            ->where('page', 'datenschutz')
            ->get();
        return view('datenschutz', ['data' => $data]);
    }


    public function impressum()
    {
        $data = DB::table('webs')
            ->select('title', 'content')
            ->where('page', 'impressum')
            ->get();
        return view('landingpage')->with(['data' => $data]);
    }

    public function java(Request $request)
    {
        $path = $request->getPathInfo();
        $segments = explode('/', trim($path, '/'));
        $name = $segments[0]; // java
        $number = $segments[1]; // 1, 2, 3

        $data = DB::table('webs')
            ->select('content')
            ->where('title', $name)
            ->where('number', $number)
            ->get();

        $content = Purifier::clean($request->input('content'), [
            'HTML.Allowed' => 'ul,ol,li,b,strong,i,em,p,br',
        ]);

        return view('java')->with(['data' => $data]);
    }


    // ===== Admin Bereich ======

    public function index()
    {
        $webs = Web::all();
        return view('webs.index', compact('webs'));
    }

    public function create()
    {
        return view('webs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'page' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        Web::create($validated);
        return redirect()->route('webs.index')->with('Success', 'Web created successfully!');
    }

    public function show(Web $web)
    {
        return view('webs.show', compact('web'));
    }

    public function edit(Web $web)
    {
//        if (Auth::check()) {
            return view('webs.edit', compact('web'));
//        } else {
//            return redirect()->route('login')->with('error', 'You must be logged in.');
//        }
    }


    public function update(Request $request, Web $web)
    {
        $validated = $request->validate([
            'page' => 'required',
            'title' => 'required',
            'content' => 'nullable',
        ]);

        $web->update($validated);
        return redirect()->route('webs.index')->with('success', 'Web updated successfully!');
    }

    public function destroy(Web $web)
    {
        $web->delete();
        return redirect()->route('webs.index')->with('success', 'Web deleted successfully!');
    }

}


    /**
     * Update the user's profile information.
     */
//    public function update(ProfileUpdateRequest $request): RedirectResponse
//    {
//        $request->user()->fill($request->validated());
//
//        if ($request->user()->isDirty('email')) {
//            $request->user()->email_verified_at = null;
//        }
//
//        $request->user()->save();
//
//        return Redirect::route('profile.edit')->with('status', 'profile-updated');
//    }

    /**
     * Delete the user's account.
     */
//    public function destroy(Request $request): RedirectResponse
//    {
//        $request->validateWithBag('userDeletion', [
//            'password' => ['required', 'current_password'],
//        ]);
//
//        $user = $request->user();
//
//        Auth::logout();
//
//        $user->delete();
//
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
//
//        return Redirect::to('/');
//    }
//}
