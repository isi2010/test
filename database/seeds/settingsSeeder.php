<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Base\Constants\Setting\Settings as SettingSlug;
use App\Base\Constants\Setting\SettingCategory;
use App\Base\Constants\Setting\SettingSubGroup;
use App\Base\Constants\Setting\SettingValueType;

class SettingsSeeder extends Seeder
{
    /**
     * List of all the settings_from_seeder to be created along with their details.
     *
     * @var array
     */
    protected $settings_from_seeder = [

        SettingSlug::SERVICE_TAX => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::ADMIN_COMMISSION_TYPE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::SELECT,
            'option_value' => '{"percentage":1,"fixed":2}',
            'group_name' => null,
        ],
            SettingSlug::ADMIN_COMMISSION => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::WALLET_MIN_AMOUNT_FOR_TRIP => [
            'category'=>SettingCategory::WALLET,
            'value' => 50,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::WALLET_MIN_AMOUNT_TO_ADD => [
            'category'=>SettingCategory::WALLET,
            'value' => 20,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::WALLET_MAX_AMOUNT_TO_ADD => [
            'category'=>SettingCategory::WALLET,
            'value' => 5000,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::DRIVER_SEARCH_RADIUS => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 3,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::USER_CAN_MAKE_A_RIDE_AFTER_X_MINIUTES => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::MINIMUM_TIME_FOR_SEARCH_DRIVERS_FOR_SCHEDULE_RIDE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::MAXIMUM_TIME_FOR_FIND_DRIVERS_FOR_REGULAR_RIDE => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 5,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::TRIP_ACCEPT_REJECT_DURATION_FOR_DRIVER => [
            'category'=>SettingCategory::TRIP_SETTINGS,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
    //General category settings
        SettingSlug::LOGO => [
            'category'=>SettingCategory::GENERAL,
            'value' => null,
            'field' => SettingValueType::FILE,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::FAVICON => [
            'category'=>SettingCategory::GENERAL,
            'value' => null,
            'field' => SettingValueType::FILE,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::APP_NAME => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'Tagxi',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'INR',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY_SYMBOL => [
            'category'=>SettingCategory::GENERAL,
            'value' => '₹',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::DEFAULT_COUNTRY_CODE_FOR_MOBILE_APP => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'IN',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        // SettingSlug::DEFAULT__LANGUAGE_CODE_FOR_MOBILE_APP => [
        //     'category'=>SettingCategory::GENERAL,
        //     'value' =>  'en-GB',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],
        // SettingSlug::HEAD_OFFICE_NUMBER => [
        //     'category'=>SettingCategory::GENERAL,
        //     'value' => '+8299600007',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],
        // SettingSlug::HELP_EMAIL_ADDRESS => [
        //     'category'=>SettingCategory::GENERAL,
        //     'value' => 'sales@tagyourtaxi.com',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],
        SettingSlug::DRIVER_WALLET_MINIMUM_AMOUNT_TO_GET_ORDER => [
            'category'=>SettingCategory::WALLET,
            'value' => -10000,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        // Installation settings
        // SettingSlug::GOOGLE_BROWSER_KEY => [
        //     'category'=>SettingCategory::INSTALLATION,
        //     'value' => '**********************',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],
        // SettingSlug::TWILLO_ACCOUNT_SID => [
        //     'category'=>SettingCategory::INSTALLATION,
        //     'value' => 'AC75a5048afaf14beaafec1a8c9e92e766',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => SettingSubGroup::TWILLO_SETTINGS,
        // ],
        // SettingSlug::TWILLO_AUTH_TOKEN => [
        //     'category'=>SettingCategory::INSTALLATION,
        //     'value' => 'b5d1f1cc4517066251673d53fad53734',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => SettingSubGroup::TWILLO_SETTINGS,
        // ],
        // SettingSlug::TWILLO_NUMBER => [
        //     'category'=>SettingCategory::INSTALLATION,
        //     'value' => '+12562779152',
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => SettingSubGroup::TWILLO_SETTINGS,
        // ],

           SettingSlug::ENABLE_STRIPE => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

         SettingSlug::STRIPE_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::TEXT,
             'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

         SettingSlug::STRIPE_TEST_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'pk_test_51IuYWUSBCHfacuRqacrdy8IOlL3uUPq1XI0BZaRlqDPPcNsmywe6rSqjpM9HhVmELhXWhx95CH1pvNyQ8pvQEil900eGE0jXN8',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_LIVE_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'pk_test_51IuYWUSBCHfacuRqacrdy8IOlL3uUPq1XI0BZaRlqDPPcNsmywe6rSqjpM9HhVmELhXWhx95CH1pvNyQ8pvQEil900eGE0jXN8',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'sk_test_51IuYWUSBCHfacuRqT79sG9pzvqyQqpwClyvlcrEm4ZvshYDdS5TGkYfIS2uYbcxcwhNES1J2cI03l8zxFPelK0yk007d8XvEAd',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],

        SettingSlug::STRIPE_LIVE_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'sk_test_51IuYWUSBCHfacuRqT79sG9pzvqyQqpwClyvlcrEm4ZvshYDdS5TGkYfIS2uYbcxcwhNES1J2cI03l8zxFPelK0yk007d8XvEAd',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::STRIPE_SETTINGS,
        ],
        
        SettingSlug::ENABLE_PAYSTACK => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::TEXT,
             'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'sk_test_afe3ea4a86db618f26157dcbb69aa4998db4cb99',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_PRODUCTION_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'sk_test_afe3ea4a86db618f26157dcbb69aa4998db4cb99',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],

        SettingSlug::PAYSTACK_TEST_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'pk_test_b4cb479fa0d654cb6db52663b27a019973ecfaf5',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::PAYSTACK_PRODUCTION_PUBLISHABLE_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'pk_test_b4cb479fa0d654cb6db52663b27a019973ecfaf5',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::PAYSTACK_SETTINGS,
        ],
        SettingSlug::ENABLE_FLUTTER_WAVE => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
         SettingSlug::FLUTTER_WAVE_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::TEXT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
        SettingSlug::FLUTTER_WAVE_TEST_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'FLWPUBK_TEST-9e6ca8625f1660a249809d7d979a0a72-X',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],
        SettingSlug::FLUTTER_WAVE_PRODUCTION_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'FLWPUBK_TEST-9e6ca8625f1660a249809d7d979a0a72-X',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::FLUTTERWAVE_SETTINGS,
        ],

        SettingSlug::ENABLE_CASH_FREE => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],
        SettingSlug::CASH_FREE_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],
        SettingSlug::CASH_FREE_TEST_APP_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '159508ae34a76191df96dff52d805951',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],
        SettingSlug::CASH_FREE_PRODUCTION_APP_ID => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '159508ae34a76191df96dff52d805951',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],
            SettingSlug::CASH_FREE_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '9fbbd7bf43e9470cb3cc6e6a36839258ebcd5ebf',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],
        SettingSlug::CASH_FREE_PRODUCTION_SECRET_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '9fbbd7bf43e9470cb3cc6e6a36839258ebcd5ebf',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::CASH_FREE_SETTINGS,
        ],

        SettingSlug::ENABLE_RAZOR_PAY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],

         SettingSlug::RAZOR_PAY_ENVIRONMENT => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'test',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"test":"test","production":"production"}',
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],

        SettingSlug::RAZOR_PAY_TEST_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'rzp_test_L58xOhOjEMu6wF',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
        SettingSlug::RAZOR_PAY_LIVE_API_KEY => [
            'category'=>SettingCategory::INSTALLATION,
            'value' => 'rzp_test_L58xOhOjEMu6wF',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => SettingSubGroup::RAZOR_PAY_SETTINGS,
        ],
     
        SettingSlug::REFERRAL_COMMISION_FOR_USER => [
            'category'=>SettingCategory::REFERRAL,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
          SettingSlug::REFERRAL_COMMISION_FOR_DRIVER => [
            'category'=>SettingCategory::REFERRAL,
            'value' => 30,
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        //  SettingSlug::MINIMUM_TRIPS_SHOULD_COMPLETE_TO_REFER_DRIVERS => [
        //     'category'=>SettingCategory::REFERRAL,
        //     'value' => 30,
        //     'field' => SettingValueType::TEXT,
        //     'option_value' => null,
        //     'group_name' => null,
        // ],

        SettingSlug::GOOGLE_MAP_KEY => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'AIzaSyBeVRs1icwooRpk7ErjCEQCwu0OQowVt9I',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ], 
        SettingSlug::GOOGLE_MAP_KEY_FOR_DISTANCE_MATRIX => [
            'category'=>SettingCategory::MAP_SETTINGS,
            'value' => 'AIzaSyBeVRs1icwooRpk7ErjCEQCwu0OQowVt9I',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ], 
         SettingSlug::FIREBASE_DB_URL => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'https://your-db.firebaseio.com',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
         SettingSlug::FIREBASE_API_KEY => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-api-key',
            'field' => SettingValueType::PASSWORD,
            'option_value' => null,
            'group_name' => null,
        ], 
           SettingSlug::FIREBASE_AUTH_DOMAIN => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-auth-domain',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
         SettingSlug::FIREBASE_PROJECT_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-project-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
         SettingSlug::FIREBASE_STORAGE_BUCKET => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-storage-bucket',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
        SettingSlug::FIREBASE_MESSAGIN_SENDER_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-messaging-sender-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
        SettingSlug::FIREBASE_APP_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-app-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ], 
         SettingSlug::FIREBASE_MEASUREMENT_ID => [
            'category'=>SettingCategory::FIREBASE_SETTINGS,
            'value' => 'your-firebase-measurement-id',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
         SettingSlug::CURRENCY => [
            'category'=>SettingCategory::GENERAL,
            'value' => 'INR',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::CURRENCY_SYMBOL => [
            'category'=>SettingCategory::GENERAL,
            'value' => '₹',
            'field' => SettingValueType::TEXT,
            'option_value' => null,
            'group_name' => null,
        ],
        SettingSlug::SHOW_RENTAL_RIDE_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
         SettingSlug::SHOW_RIDE_OTP_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],
         SettingSlug::SHOW_RIDE_LATER_FEATURE => [
            'category'=>SettingCategory::GENERAL,
            'value' => '1',
            'field' => SettingValueType::SELECT,
            'option_value' => '{"yes":1,"no":0}',
            'group_name' => null,
        ],

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingDB = Setting::all();

        foreach ($this->settings_from_seeder as $setting_slug=>$setting) {
            $categoryFound = $settingDB->first(function ($one) use ($setting_slug) {
                return $one->name === $setting_slug;
            });

            $created_params = [
                        'name' => $setting_slug
                    ];

            $to_create_setting_data = array_merge($created_params, $setting);

            if (!$categoryFound) {
                Setting::create($to_create_setting_data);
            }
        }
    }
}
