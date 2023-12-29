<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrmsPollingData extends Model
{
    use HasFactory;
    protected $fillable=[
            'HRMSCODE',
            'NAME',
            'FATHER_HUSBAND',
            'DOB',
            'DOR',
            'DEPTCODE',
            'OFFICECODE',
            'DESIGCODE',
            'GENDER',
            'CLASS',
            'PAYLEVEL',
            'BASICPAY',
            'OFFICENAME',
            'DISTRICT',
            'DISTCODE',
            'MOBILE',
            'EMAIL',
            'BANKNAME',
            'IFSCCODE',
            'ACCOUNTNO',
            'STATUS',
            'EMPLOYEETYPE',
            'DDO_CODE',
            'IFMSPAYEECODE',
            'HANDICAPPED',
            'ONLEAVE',
    ];
}
