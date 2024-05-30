<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Key;

class KeyController extends Controller
{
    public function index()
    {
        $keys = Key::all();
        return view('keys.index', compact('keys'));
    }

    public function create()
    {
        return view('keys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:keys',
            'username' => 'required',
        ]);

        Key::create($request->all());

        return redirect()->route('keys.index')
            ->with('success', 'Key created successfully.');
    }

    public function edit(Key $key)
    {
        return view('keys.edit', compact('key'));
    }

    public function update(Request $request, Key $key)
    {
        $request->validate([
            'key' => 'required|unique:keys,key,' . $key->id,
            'username' => 'required',
        ]);

        $key->update($request->all());

        return redirect()->route('keys.index')
            ->with('success', 'Key updated successfully.');
    }

    public function destroy(Key $key)
    {
        $key->delete();

        return redirect()->route('keys.index')
            ->with('success', 'Key deleted successfully.');
    }

    public function showBulkCreateForm()
    {
        return view('keys.bulk-create');
    }

    public function bulkCreate(Request $request)
    {
        $request->validate([
            'keys' => 'required|string',
        ]);

        $keys = explode("\n", $request->input('keys'));

        foreach ($keys as $keyString) {
            $keyString = trim($keyString);
            if (!empty($keyString)) {
                Key::create(['key' => $keyString, 'username' => '', 'claimed' => false]);
            }
        }

        return redirect()->route('keys.index')->with('success', 'Keys created successfully.');
    }

    public function createWithObsTwitchApi(Request $request)
    {
        $request->validate([
            'key' => 'required|string',
            'username' => 'required|string',
            'hash' => 'required|string',
        ]);

        if ($request->input('hash') != env('HASH_OBS_TWITCH_API')) {
            return print 'la clave no coindice';
        }

        Key::create(['key' => $request->input('key'), 'username' => $request->input('username'), 'claimed' => false]);
        return print 'creado';
    }
}
