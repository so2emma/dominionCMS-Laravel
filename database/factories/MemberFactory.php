<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender =  $this->faker->randomElements ( ['male', 'female']) [0];
        $maritalStatus =  $this->faker->randomElements ( ['single', 'married']) [0];
        $department =  $this->faker->randomElements ( ['Choir', 'Ushering','Technical','Sanctuary','Envagelism','Prayer Team']) [0];
        return [
        'firstname' =>$this->faker->firstname(),
        'lastname'=>$this->faker->lastname(),
        'dob'=>$this->faker->date(),
        'address' =>$this->faker->address(),
        'phone' =>$this->faker->numerify('###########'),
        'email' =>$this->faker->email(),
        'gender'=>$gender,
        'maritalStatus'=>$maritalStatus,
        'weddingAnniversary'=>$this->faker->date(),
        'bornAgain'=>'Born Again',
        'salvationDate'=>$this->faker->date(),
        'previousChurch'=>$this->faker->sentence(10),
        'membershipClass'=>'Completed',
        'membershipCompletion'=>$this->faker->date(),
        'workerStatus'=>'A worker',
        'department'=>$department,
        'houseFellowshipStatus'=>'none',
        'fellowshipLocation'=>$this->faker->address(),
        'dateJoined'=>$this->faker->date(),
        ];
    }
}
