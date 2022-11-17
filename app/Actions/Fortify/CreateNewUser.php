<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Paciente;
use App\Models\Nutricionista;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $email = $input['email'];

        $user = new User([
            'name' => $input['name'],
            'email' => $email,
            'password' => Hash::make($input['password']),
            'role_id' => $input['role'],
        ]);


        if ($input['role'] == 2) {

            $paciente = new Paciente();
            $paciente->birthday = $input['birthday'];
            $user->save();
            $user->role()->save($paciente);
        } elseif ($input['role'] == 3) {
            $nutricionista = new Nutricionista();
            $nutricionista->tel = $input['tel'];
            $user->save();
            $user->role()->save($nutricionista);
        }
        return $user;
    }
}
