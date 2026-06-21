<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_heading', 'banner_sub_heading',
        'about_heading', 'about_content',
        'contact_address', 'contact_email', 'contact_phonenumber',
        'our_service_heading_one', 'our_service_body_one',
        'our_service_heading_two', 'our_service_body_two',
        'our_service_heading_three', 'our_service_body_three',
        'our_service_heading_four', 'our_service_body_four',
        'our_service_heading_five', 'our_service_body_five',
        'our_service_heading_six', 'our_service_body_six'
    ];

    public function getSiteAttribute($data)
    {
        //
    }
}
