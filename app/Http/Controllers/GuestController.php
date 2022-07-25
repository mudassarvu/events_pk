<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Classiebit\Eventmie\Notifications\MailNotification;

class GuestController extends Controller
{
    /**
     *  organizer create user
     */

    public function registerGuest(Request $request)
    {
        // 1. validate data
        $request->validate([
            'name'             => ['required', 'string', 'max:255'],
            'email'            => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        if(!empty(setting('apps.twilio_sid')) && !empty(setting('apps.twilio_auth_token')) && !empty(setting('apps.twilio_number')))
        {
            $request->validate([
                'phone'           => 'required|string|max:255',
            ]);        
        }


        // create user
        $user = User::create([
                    'name'          => $request->name,
                    'email'         => $request->email,
                    // 'password'      => \Hash::make($request->password),
                    'password'      => \Hash::make(\Str::random(8)),
                    'role_id'       =>  2,
                    'phone'         => $request->phone,
                ]);
        $user->roles()->sync([2]);

        $user->role_id = 2;

        $user->save();
        
        // login manually
        \Auth::login($user);


        // ====================== Notification ====================== 
        $mail['mail_subject']   = __('eventmie-pro::em.register_success');
        $mail['mail_message']   = __('eventmie-pro::em.get_tickets');
        $mail['action_title']   = __('eventmie-pro::em.login');
        $mail['action_url']     = route('eventmie.login');
        $mail['n_type']         = "user";

        /* Guest password reset notification */
        $msg                    = [];
        $msg[]                  = __('eventmie-pro::em.guest_password_reset');
        $mail['extra_lines']    = $msg;

        // notification for
        $notification_ids       = [
            1, // admin
            $user->id, // new registered user
        ];
        
        $users = User::whereIn('id', $notification_ids)->get();
        
        \App\Jobs\RegistrationEmailJob::dispatch($mail, $users, 'register')->delay(now()->addSeconds(10));
        /* Send email verification link */
        $user->sendEmailVerificationNotification();
        $user->markEmailAsVerified();

        /* Send email verification link */
        // ====================== Notification ======================     

        // if(setting('multi-vendor.verify_email') && empty($user->email_verified_at))
        // {
        //     $user->sendEmailVerificationNotification();
            
        //     return response()->json(['status' => true, 'user' => $user->only(['id', 'name', 'phone', 'email']),  'verify_email' => 0, 'is_verify_email' => setting('multi-vendor.verify_email')
        //     ]);

        // }
        $stripe_secret_key     = null;
        
        if(!empty(setting('apps.stripe_public_key')) && !empty(setting('apps.stripe_secret_key')))
            $stripe_secret_key = $user->createSetupIntent()->client_secret;

        
        return response()->json(['status' => true, 'user' => $user->only(['id', 'name', 'phone', 'email']),
        'verify_email' => 1, 'is_verify_email' => setting('multi-vendor.verify_email'), 'stripe_secret_key' => $stripe_secret_key
        ]);        
    } 
    
}
