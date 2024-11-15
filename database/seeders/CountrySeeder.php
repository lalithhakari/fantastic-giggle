<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://restcountries.com/v3.1/all');
        $countries = $response->json();
        foreach ($countries as $key => $country) {
            $name = 'United States dollar';
            $code = 'USD';
            $symbol = '$';
            $postalCode = [
                "format" => "#####-####",
                "regex" => "^(\\d{9})$"
            ];
            foreach ($country['currencies'] ?? [] as $key => $value) {
                $name = $value['name'];
                $symbol = $value['symbol'];
                $code = $key;
                break;
            }
            Country::create([
                'name' => $country['name']['common'],
                'cca2' => $country['cca2'],
                'cca3' => $country['cca3'],
                'ccn3' => $country['ccn3'] ?? 'Not available',
                'flag' => $country['flag'],
                'flag_cdn' => $country['flags']['svg'],
                'region' => $country['region'],
                'postal_code' => $country['postalCode'] ?? $postalCode,
                'currency_name' => $name,
                'currency_code' => $code,
                'currency_symbol' => $symbol,
                'is_active' => true,
            ]);
        }
    }
}
