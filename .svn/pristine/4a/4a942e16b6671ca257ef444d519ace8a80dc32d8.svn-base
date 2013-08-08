<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    function valid_phone_number_or_empty($value)
    {
        $value = trim($value);
        if ($value == '') {
            return TRUE;
        }
        else
        {
            if (preg_match('/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/', $value))
            {
                return preg_replace('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', '($1) $2-$3', $value);
            }
            else
            {
                return FALSE;
            }
        }
    }
 
} 