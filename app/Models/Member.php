<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'address',
        'phone',
        'email',
        'gender',
        'maritalStatus',
        'weddingAnniversary',
        'bornAgain',
        'salvationDate',
        'previousChurch',
        'membershipClass',
        'membershipCompletion',
        'workerStatus',
        'department',
        'houseFellowshipStatus',
        'fellowshipLocation',
        'dateJoined',
        'IndividualStatus'
    ];

    public function scopeFilter($query, array $filters) {
        if($filters['member'] ?? false) {
            $query->where('firstname', 'like', '%'.request('member'). '%' )
            ->orWhere('lastname', 'like', '%'.request('member'). '%' );
        }
        if($filters['department'] ?? false) {
            $query->where('department', 'like', '%'.request('department'). '%');
        }
        if($filters['month'] ?? false) {
            $query->where('dob', 'like', '%'.request('month'). '%');
        }
        if($filters['weddingAnniversary'] ?? false) {
            $query->where('weddingAnniversary', 'like', '%'.request('weddingAnniversary'). '%');
        }
    }

    // public function scopeFilter($query, array $filters) {

    // }
}
