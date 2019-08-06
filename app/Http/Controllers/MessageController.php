<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();

      if($user->isAdmin()) {
        $messages = Message::get();
      } else {
        $messages = $user->messages;
      }

      return response()->json($messages);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
          'name' => 'required|string|max:75',
          'email' => 'required|email|max:75',
          'subject' => 'required|string|max:255',
          'message'=> 'required|string|max:750',
        ]);


      $emailExists = \App\User::where('email', $request->email)->first();

      if($emailExists) {
        $userId = $emailExists->id;
      } else {
        $userId = null;
      }

      $message = Message::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        'user_id' => $userId
      ]);

      $message->save();

      return response()->json('Thank you, your message has been received :)', 200);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $data, int $id)
    {

      $validateData = $data->validate([
        'name' => 'required|string|max:75',
        'email' => 'required|email|max:75',
        'subject' => 'required|string|max:255',
        'message'=> 'required|string|max:750',
      ]);

      $message = Message::findOrFail($id);
      $user = Auth::user();
      $message_owner = $message->owner->id;

      // Admin can edit everything, user can only edit what they own.
      if ($user->isAdmin()) {
        $message->update($data->all());
      }
      elseif ($user->id === $message_owner) {

        $message->update($data->all());
      }
      else {
        return response()->json('Unauthorized', 401);
      }


      return response()->json('Successfully updated your message.', 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $message = Message::findOrFail($id);
        $user = Auth::user();

        $message_owner = $message->owner->id;

        if($user->isAdmin() ) {
          $message->delete();
        }
        elseif ($user->id === $message_owner) {
          $message->delete();
        }
        else {
          return response()->json('Unauthorized', 401);
        }

        return response()->json('Successfully deleted message', 200);
    }
}
