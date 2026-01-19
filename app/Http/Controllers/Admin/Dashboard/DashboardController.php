<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Administrative\TempUser;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function verificationNotice()
    {
        return view('auth.verification-notice');
    }

    public function verify(string $token)
    {
        $tempUser = TempUser::where('verification_token', $token)->firstOrFail();

        // Move to users table
        User::create([
            'name' => $tempUser->name,
            'email' => $tempUser->email,
            'mobile' => $tempUser->mobile,
            'gender_id' => $tempUser->gender_id,
            'organization' => $tempUser->organization,
            'occupation_designation' => $tempUser->occupation_designation,
            'present_address' => $tempUser->present_address,
            'password' => $tempUser->password,
        ]);

        // Delete temp user
        $tempUser->delete();

        return redirect()->route('login')->with('success', 'Your account has been verified. You can login now!');
    }
}
