<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payload = [
            [
                'question' => 'What is Carby?',
                'answer'   => 'Carby is a carsharing company that allows the user to reserve, open and drive any available vehicle, returning it by parking anywhere within the Carby area.',
            ],
            [
                'question' => 'What are the main advantages of Carby?',
                'answer'   => 'With Carby, you will travel wherever you want. Further, safer and more comfortable. With a large area in the urban centers to finish the journey, and with the possibility of parking in the bses and concerted car parks.',
            ],
            [
                'question' => 'What is the minimum age to be a client?',
                'answer'   => 'The minimum age to be a Carby client is 18 years old.',
            ],
            [
                'question' => 'Can I leave Spain with the car?',
                'answer'   => 'Not actually.',
            ],
            [
                'question' => 'What do I do if I detect damage to the vehicle before starting the journey?',
                'answer'   => 'It is important that before starting the jounrey, check the condition of the vehicle and, if you detect any damage, create an issue',
            ]
        ];

        Faq::insert($payload);
    }
}
