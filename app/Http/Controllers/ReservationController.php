<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationCreated;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();

      if ($user->isAdmin()) {
        $reservations = Reservation::get();
      } else {
        $reservations = $user->reservations;
      }

      return response()->json($reservations, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate the input
      //
      // save to Database
      //
      // Create user with random password
      //
      // send email notification to user with reservation details and user login to change their details


      $validateData = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|string|max:100',
        'phone' => 'required|string|max:25',
        'seats' => 'required|integer|max:250',
        'date' => 'required|string|max:100',
      ]);


      $email = $request->email;

      // If user does not exist
      // Create a new user with a random password
      if (Auth::user()) {
        $user = Auth::user();
      } else {
        $user = User::where('email', $email)->first();
      }

      $newUser = false;

      if (!$user)
      {
        $password = $this->randomPassword(8);
        $encrypted = password_hash($password, PASSWORD_DEFAULT);

        $user = new User([
          'name' => $request->name,
          'email' => $email,
          'password' => $encrypted,
        ]);

        $user->save();

        $newUser = true;
      }

      // create the reservation
      if ($user)
      {
        $reservation = Reservation::create([
          'user_id' => $user->id,
          'name' => $request->name,
          'email' => $email,
          'phone' => $request->phone,
          'seats' => $request->seats,
          'date' => $request->date,
        ]);

        $reservation->save();

        // Send email confirmation to user with reservation & user details
        try {
            if($newUser) {
              Mail::to($email)->send(new ReservationCreated($reservation, $email, $password));
            } else {
              Mail::to($email)->send(new ReservationCreated($reservation, $email));
            }

        } catch (\Exception $e) {
            return $e;
        }

        return response()->json('Your reservation has been saved. Thank you. An confirmation will soon be sent to: ' . $email . '', 200);
      }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|string|max:100',
        'phone' => 'required|string|max:25',
        'seats' => 'required|integer|max:250',
        'date' => 'required|string|max:100',
        ]);

      $reservation = Reservation::findOrFail($id);
      $user = Auth::user();
      $reservation_owner = $reservation->owner->id;

      // Admin can edit everything, user can only edit what they own.
      if ($user->isAdmin()) {
        $reservation->update($request->all());
      }
      elseif ($user->id === $reservation_owner) {
        $reservation->update($request->all());
      }
      else {
        return response()->json('Unauthorized', 401);
      }

      return response()->json('Successfully updated your reservation.', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reservation = Reservation::findOrFail($id);
      $user = Auth::user();

      $user_id = $user->id;
      $reservation_owner = $reservation->owner->id;

      if ($user->isAdmin()) {
        $reservation->delete();
      }
      elseif ($user_id === $reservation_owner) {

        $reservation->delete();
      }
      else {
        return response()->json('Unauthorized', 401);
      }

      return response()->json('Successfully deleted reservation', 200);
    }

    /**
   * Generate a cryptographical secure password
   * @param  integer $length   Number of character length to generate
   * @param  string $keyspace  Allowed characters
   * @return string
   */
  public function randomPassword($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
      $pieces [] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
  }
}