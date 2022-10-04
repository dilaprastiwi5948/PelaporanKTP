<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportingType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function ReportingIdCard()
    {
        return $this->belongsTo(ReportingIdCard::class, 'reportingtype_id');
    }
}