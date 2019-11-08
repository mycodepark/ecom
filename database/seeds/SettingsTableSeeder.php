<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * @var array
     */
    protected $settings = [
        [
            'key'                       =>  'site_name',
            'value'                     =>  'Viscobox Mobilya',
        ],
        [
            'key'                       =>  'site_title',
            'value'                     =>  'Viscobox',
        ],
        [
            'key'                       =>  'default_email_address',
            'value'                     =>  'info@viscobox.com',
        ],
        [
            'key'                       =>  'default_phone_number',
            'value'                     =>  '0312 353 50 60',
        ],
        [
            'key'                       =>  'currency_code',
            'value'                     =>  'TL',
        ],
        [
            'key'                       =>  'currency_symbol',
            'value'                     =>  '₺',
        ],
        [
            'key'                       =>  'site_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'site_favicon',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'footer_copyright_text',
            'value'                     =>  'Copyright 2019 Viscobox. Her Hakkı Saklıdır.',
        ],
        [
            'key'                       =>  'seo_meta_title',
            'value'                     =>  'Viscobox',
        ],
        [
            'key'                       =>  'seo_meta_description',
            'value'                     =>  'Viscobox Mobilya, Yatak, Baza',
        ],
        [
            'key'                       =>  'seo_keywords',
            'value'                     =>  'Viscobox, Viscobox Mobilya Mağazası, Yatak, Baza, Başlık, Mobilya, Ev Eşyaları',
        ],
        [
            'key'                       =>  'social_facebook',
            'value'                     =>  'https://tr-tr.facebook.com/pages/category/Shopping---Retail/Viscobox-Yatak-Baza-Ba%C5%9Fl%C4%B1k-927051030766121/',
        ],
        [
            'key'                       =>  'social_twitter',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'social_instagram',
            'value'                     =>  'https://www.instagram.com/viscobox/?hl=tr',
        ],
        [
            'key'                       =>  'social_linkedin',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
