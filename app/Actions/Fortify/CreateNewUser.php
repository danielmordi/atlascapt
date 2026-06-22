<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Notifications\WelcomeEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $referrer = User::whereUsername(session()->pull('referrer'))->first();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role_id' => 2,
            'referrer_id' => $referrer->id ?? null,
        ]);

        // $user->notify(new WelcomeEmail($user));

        // Notify admin of new account registration
        $admin = User::where('role_id', 1)->first();
        if ($admin) {
            $admin->notify(new \App\Notifications\AdminNotification(
                'New Account Registration',
                "A new user has registered and is awaiting account activation. Name: {$user->name}, Email: {$user->email}. Please review and activate their account."
            ));
        }

        return $user;
    }
}
