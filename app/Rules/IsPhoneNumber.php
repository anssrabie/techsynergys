<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberToCarrierMapper;
use libphonenumber\PhoneNumberUtil;

class IsPhoneNumber implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $phoneUti; // To Get Instance From Lib
    protected $geoCoder; // TO Get Country name
    protected $carrierMapper; // To Get Type Of Line
    protected $region;
    public function __construct($region)
    {
        $this->phoneUti      = PhoneNumberUtil::getInstance();
        $this->geoCoder      = PhoneNumberOfflineGeocoder::getInstance();
        $this->carrierMapper = PhoneNumberToCarrierMapper::getInstance();
        $this->region        = strtoupper($region);
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            $region = $this->region;
            $phone  = $value;
            $parseNumber =  $this->phoneUti->parse($phone,$region);
            $is_valid = $this->phoneUti->isValidNumber($parseNumber);
            if($is_valid)
            {
                $data['country']      = $this->geoCoder->getDescriptionForNumber($parseNumber,'en');
                $data['country_code'] = $this->phoneUti->getCountryCodeForRegion($region);
                $data['phone']        = $this->phoneUti->getNationalSignificantNumber($parseNumber);
                $data['region']       = $region;
                return true;
            }
            return false;
        }
        catch (\Exception $exception){
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('a.Please enter the WhatsApp number correctly');
    }
}
