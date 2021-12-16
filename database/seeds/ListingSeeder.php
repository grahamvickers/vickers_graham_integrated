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
            'city' => 'London',
            'price' => '12,000,000',
            'profit' => '32%',
            'income' => '18,000,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Shipping Bros LTD. is a friends and family company that puts the needs of our customers first!' 
        ],
        [
            'name' => 'Davis Logistics Inc.',
            'address' => '1282 Long Road Dr., Sarnia, Ontario',
            'city' => 'Sarnia',
            'price' => '8,000,000',
            'profit' => '24%',
            'income' => '12,000,000',
            'img' => 'davis_log.jpg',
            'content' => 'Davis Logistics Inc. started in 1982 by the Davis family and has been family run ever since, now is your time to scoop of a deal of a business!' 
        ],
        [
            'name' => 'Mathews and Associates LTD',
            'address' => '1439 Harrison Rd N, London, Ontario',
            'city' => 'London',
            'price' => '3,500,000',
            'profit' => '21%',
            'income' => '5,025,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Mathews and Associates LTD is an private investment firm based out of london serving the areas financial needs.' 
        ],
        [
            'name' => 'Petro Canada - Franchise',
            'address' => '980 Oxford St. W, London, Ontario',
            'city' => 'London',
            'price' => '1,750,000',
            'profit' => '32%',
            'income' => '3,001,230',
            'img' => 'davis_log.jpg',
            'content' => 'This petro canada franchise has been operating for over 20+ years and now is the time to scoop up this deal!' 
        ],
        [
            'name' => 'Royal Hunt Landscape & Exteriors',
            'address' => '64 Fitzwilliam Blvd., London, Ontario',
            'city' => 'London',
            'price' => '600,000',
            'profit' => '26%',
            'income' => '1,200,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Royal Hunt Landscape & Exteriors is a newly found business with professional branding and high-end clients across SWO.' 
        ],
        [
            'name' => 'Kohler-Wehner',
            'address' => '120 King St W, Toronto, Ontario',
            'city' => 'Toronto',
            'price' => '2,200,000',
            'profit' => '34%',
            'income' => '5,400,000',
            'img' => 'davis_log.jpg',
            'content' => 'Reverse-Engineered 3Rdgeneration Project' 
        ],
        [
            'name' => 'Denesik and Sons',
            'address' => '190 Dundas St, Hamilton, Ontario',
            'city' => 'Hamilton',
            'price' => '3,500,000',
            'profit' => '28%',
            'income' => '6,900,000',
            'img' => 'davis_log.jpg',
            'content' => 'Customer-Focused Content-Based Portal' 
        ],
        [
            'name' => '	Runolfsdottir Ltd',
            'address' => '82 Bay St, Toronto, Ontario',
            'city' => 'Toronto',
            'price' => '5,400,000',
            'profit' => '22%',
            'income' => '12,400,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Total 24/7 Protocol' 
        ],
        [
            'name' => '	Lynch, Bednar and Kshlerin',
            'address' => '28 Main St, Guelph, Ontario',
            'city' => 'Guelph',
            'price' => '6,200,000',
            'profit' => '32%',
            'income' => '8,700,000',
            'img' => 'davis_log.jpg',
            'content' => 'A law firm that is there for you when you need them most!' 
        ],
        [
            'name' => 'Stark-Wiegand',
            'address' => '38 Rogers Road, Guelph, Ontario',
            'city' => 'Guelph',
            'price' => '920,000',
            'profit' => '21%',
            'income' => '620,000',
            'img' => 'shipping_bros.jpg',
            'content' => 'Customer-Focused Asynchronous Orchestration' 
        ],
        [
            'name' => 'Gulgowski-Keeling',
            'address' => '1983 12 Mile Road, Detroit, Michigan',
            'city' => 'Detroit',
            'price' => '1,100,000',
            'profit' => '24%',
            'income' => '830,000',
            'img' => 'davis_log.jpg',
            'content' => 'Centralized Asynchronous Help-Desk' 
        ],
        [
            'name' => 'Anderson-Doyle',
            'address' => '128 Jefferson St, Detroit, Michigan',
            'city' => 'Detroit',
            'price' => '1,800,000',
            'profit' => '24%',
            'income' => '1,120,000',
            'img' => 'davis_log.jpg',
            'content' => 'Synchronised Assymetric Neural-Net' 
        ],
        [
            'name' => 'Gutmann LLC',
            'address' => '12 Main St, Atlanta, Georgia',
            'city' => 'Atlanta',
            'price' => '8,000,000',
            'profit' => '32%',
            'income' => '5,300,000',
            'img' => 'davis_log.jpg',
            'content' => 'Serving Atlantas top 1% for private investments' 
        ],
        [
            'name' => 'Roob PLC',
            'address' => '180 Frank St, Buffalo, New York',
            'city' => 'Buffalo',
            'price' => '2,400,000',
            'profit' => '22%',
            'income' => '1,300,000',
            'img' => 'davis_log.jpg',
            'content' => 'Public-Key Coherent Firmware' 
        ],
        [
            'name' => 'King, Harber and Predovic',
            'address' => '92 Richmond St, Kitchener, Ontario',
            'city' => 'Kitchener',
            'price' => '4,500,000',
            'profit' => '29%',
            'income' => '2,200,000',
            'img' => 'davis_log.jpg',
            'content' => 'Kitchener premier legal team!' 
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
