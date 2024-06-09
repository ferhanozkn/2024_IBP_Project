<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Message::create($request->all());

        return redirect()->route('messages.index')
                         ->with('success', 'Message created successfully.');
    }

    public function edit(Message $Message)
    {
        return view('messages.edit', compact('Message'));
    }

    public function update(Request $request, Message $Message)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $Message->update($request->all());

        return redirect()->route('messages.index')
                         ->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $Message)
    {
        $Message->delete();

        return redirect()->route('messages.index')
                         ->with('success', 'Message deleted successfully.');
    }
}

