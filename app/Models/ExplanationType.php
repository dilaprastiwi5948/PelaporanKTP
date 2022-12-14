<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExplanationType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];

    public function ReportingIdCard()
    {
        return $this->belongsTo(ReportingIdCard::class, 'explanationtype_id');
    }
}
