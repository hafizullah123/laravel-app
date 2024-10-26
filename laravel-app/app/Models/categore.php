<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categore extends Model
{
    use HasFactory;

    // Specify the table name if different from 'categories'
    protected $table = 'categore';

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'id',      // The unique identifier for the category
        'name',    // The name of the category
        'status',  // The status of the category (e.g., active/inactive)
    ];

    // Optionally, define constants for common statuses (e.g., active/inactive)
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    /**
     * Get the status label (active/inactive) for the category.
     *
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        return $this->status == self::STATUS_ACTIVE ? 'Active' : 'Inactive';
    }
}
