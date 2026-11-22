<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\JpegEncoder;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required', 'unique:users,username'],
            'full_name' => ['required'],
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')->ignore($user->id)],
            'full_name' => ['required'],
            'avatar' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('avatar')) {
            $manager = new ImageManager(new Driver());
            $image = $manager->decodePath($request->file('avatar')->getRealPath())->cover(200, 200);
            $path = 'avatars/user-' . $user->id . '-' . Str::uuid() . '.jpg';
            Storage::disk('public')->put($path, (string) $image->encode(new JpegEncoder(85)));
            $validated['avatar'] = $path;
        } else {
            unset($validated['avatar']);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
}
