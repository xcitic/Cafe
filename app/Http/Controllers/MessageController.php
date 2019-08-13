<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\ContactFormRequest;
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
        $messages = Message::latest()->get();
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
    public function store(ContactFormRequest $request)
    {

      $validated = $request->validated();

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
    public function update(ContactFormRequest $data, int $id)
    {

      $validated = $data->validated();

      $message = Message::where('id', $id)->first();
      $user = Auth::user();
      // Check if message has a owner, and that owner is the logged in user
      if(isset($message->user_id) && $user->id === $message->owner->id) {
        $message->update([
          'name'=> $data->name,
          'email'=> $data->email,
          'subject' => $data->subject,
          'message' => $data->message
        ]);
      }
      // check if the user has role admin
       elseif ($user->isAdmin()) {
         $message->update([
           'name'=> $data->name,
           'email'=> $data->email,
           'subject' => $data->subject,
           'message' => $data->message
         ]);
       }
      // User did not pass requirements to edit
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

        $message = Message::where('id', $id)->first();
        $user = Auth::user();

        if(isset($message->user_id) && $user->id === $message->owner->id) {
          $message->delete();
        }
        elseif($user->isAdmin()) {
          $message->delete();
        }
        else {
          return response()->json('Unauthorized', 401);
        }

        return response()->json('Successfully deleted message', 200);
    }
}
