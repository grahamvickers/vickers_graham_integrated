<?php

use Illuminate\Database\Seeder;
use App\Listing;

class ListingSeeder extends Seeder
{   

    /**
     * 
     * Listing of default listings
     * 
     * @var array
     */
    protected $listings = [
        [
            'name' => 'Shipping Bros LTD.',
            'address' => '1459 Myers Road W, London, Ontario',
            'price' => '12,000,000',
            'profit' => '32%',
            'income' => '18,000,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Shipping Bros LTD. is a friends and family company that puts the needs of our customers first!' 
        ],
        [
            'name' => 'Davis Logistics Inc.',
            'address' => '1282 Long Road Dr., Sarnia, Ontario',
            'price' => '8,000,000',
            'profit' => '24%',
            'income' => '12,000,000',
            'img' => 'davis_log.jpg',
            'content' => 'Davis Logistics Inc. started in 1982 by the Davis family and has been family run ever since, now is your time to scoop of a deal of a business!' 
        ]
       
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->listings as $listing){
            Listing::firstOrCreate($listing);
        }
    }
}
