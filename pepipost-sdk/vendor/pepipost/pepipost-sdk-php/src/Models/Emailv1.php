<?php 
/*
 * PepipostAPIV10Lib
 *
 * This file was automatically generated by APIMATIC v2.0 on 04/08/2016
 */

namespace PepipostAPIV10Lib\Models;

use JsonSerializable;

class Emailv1 implements JsonSerializable {
    /**
     * Your secret API Key
     * @param string|null $apiKey public property
     */
    protected $apiKey;

    /**
     * TODO: Write general description for this property
     * @param EmailDetails|null $emailDetails public property
     */
    protected $emailDetails;

    /**
     * TODO: Write general description for this property
     * @param array|null $xAPIHEADER public property
     */
    protected $xAPIHEADER;

    /**
     * TODO: Write general description for this property
     * @param Settings|null $settings public property
     */
    protected $settings;

    /**
     * TODO: Write general description for this property
     * @param array|null $recipients public property
     */
    protected $recipients;

    /**
     * TODO: Write general description for this property
     * @param Attributes|null $attributes public property
     */
    protected $attributes;

    /**
     * TODO: Write general description for this property
     * @param Files|null $files public property
     */
    protected $files;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string|null       $apiKey          Initialization value for the property $this->apiKey       
	 * @param   EmailDetails|null   $emailDetails    Initialization value for the property $this->emailDetails 
	 * @param   array|null        $xAPIHEADER      Initialization value for the property $this->xAPIHEADER   
	 * @param   Settings|null     $settings        Initialization value for the property $this->settings     
	 * @param   array|null        $recipients      Initialization value for the property $this->recipients   
	 * @param   Attributes|null   $attributes      Initialization value for the property $this->attributes   
	 * @param   Files|null        $files           Initialization value for the property $this->files        
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->apiKey        = func_get_arg(0);
            $this->emailDetails  = func_get_arg(1);
            $this->xAPIHEADER    = func_get_arg(2);
            $this->settings      = func_get_arg(3);
            $this->recipients    = func_get_arg(4);
            $this->attributes    = func_get_arg(5);
            $this->files         = func_get_arg(6);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['api_key']       = $this->apiKey;
        $json['email_details'] = $this->emailDetails;
        $json['X-APIHEADER']   = $this->xAPIHEADER;
        $json['settings']      = $this->settings;
        $json['recipients']    = $this->recipients;
        $json['attributes']    = $this->attributes;
        $json['files']         = $this->files;
        return $json;
    }
}