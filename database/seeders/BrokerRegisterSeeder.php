<?php

namespace Database\Seeders;

use App\Models\BrokerRegister;
use Illuminate\Database\Seeder;

class BrokerRegisterSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(base_path("database/data/broker_register.csv"), "r");

        while (($data = fgetcsv($file, 2000, ",")) !== FALSE) {
            BrokerRegister::create([
                'broker_id' => $data[0],
                'broker_name' => $data[1],
                'so_do_wo' => $data[2],
                'preffered_code' => $data[3],
                'doj' => $data[4],
                'gender' => $data[5],
                'dob' => $data[6],
                'address' => $data[7],
                'pan_no' => $data[8],
                'phone_no' => $data[9],
                'driving_lic_no' => $data[10],
                'passport_no' => $data[11],
                'bank_name' => $data[12],
                'bank_account' => $data[13],
                'ifsc_code' => $data[14],
            ]);
        }

        fclose($file);
    }
}
