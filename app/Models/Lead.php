<?php

namespace App\Models;

use App\Observers\LeadObserve;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LeadStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;


class Lead extends Model
{
    use HasFactory, Notifiable;
    public static $gender = ['M','F'];
    public static $status = [
        ['name'=>'New Lead', 'color'=>'green', 'Customer'=>'orange', 'Deleted'=>'red']
    ];

    protected $fillable = ['name','first_name','phone','email','address','postcode','city','country','gender','description','lead_status_id'];

    public function status(): BelongsTo{
        return $this->belongsTo(LeadStatus::class, 'lead_status_id');
    }

    public function scopeWithCoordinates(Builder $query){
        $query->where('lat','<>','')->where('lng','<>','');
    }

    protected function lat(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => floatval($value)
        );
    }

    protected function lng(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => floatval($value)
        );
    }

    public function tasks():HasMany{
        return $this->hasMany(Task::class);
    }

}
