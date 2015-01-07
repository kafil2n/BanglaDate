<?php
namespace bangladate; 


class EnglishDateInBangla
{


    private $date = '';
    private $cdate = '';
    private $ind = '';
    private $cind = '';

    public function set_date($date = '')
    {
        if (empty($date) || $date == '' || ! isset($date))
        {
            $this->date = date('F - j,Y');
        }
        else
        {
            $this->date = $date;
        }

    }

    public function convert()
    {
        $engArray = array(
            1,2,3,4,5,6,7,8,9,0,
            'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
            'am', 'pm', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
        );

        $bangArray = array(
            '১','২','৩','৪','৫','৬','৭','৮','৯','০',
            'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
            'সকাল', 'দুপুর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
        );

        $this->cdate = str_replace($engArray, $bangArray, $this->date);
        $this->cind = str_replace($engArray, $bangArray, $this->ind);
    }

    public function get_date()
    {
        return $this->cdate;
    }

    public function set_ind($ind = '')
    {
        if (empty($ind) || $ind == '' || ! isset($ind))
        {
            $this->ind = date('l');
        }
        else
        {
            $this->ind = $ind;
        }
    }

    public function get_ind()
    {
        return $this->cind;
    }
}
