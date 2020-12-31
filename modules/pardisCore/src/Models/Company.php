<?php

namespace Modules\PardisCore\Models;

use App\Models\Province;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Plank\Mediable\Mediable;

class Company extends Model
{
    use HasFactory, SoftDeletes, Mediable;

    protected $fillable = [
        'name', 'approved', 'approved_by', 'registration_number', 'company_nid', 'company_financial_code',
        'phone', 'fax', 'province_id', 'city', 'postal_code', 'address',
        'is_knowledge_base', 'knowledge_base_type', 'is_member_of_pardis_tech_park', 'is_member_of_pardis_tech_area', 'apply_for_mahamax_membership', 'apply_for_tamadkala_membership',
        'manager', 'foundation_year', 'company_introduction',
    ];

    public function getApprovedLabelAttribute()
    {
        switch ($this->approved) {
            case 'confirmed':
                $label = 'تایید شده';
                break;
            case 'not_approved':
                $label = 'تایید نشده';
                break;
            default:
                $label = 'در انتظار تایید';
        }
        return $label;
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
