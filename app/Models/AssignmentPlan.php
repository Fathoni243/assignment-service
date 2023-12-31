<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'objective',
        'description',
        'assignment_style',
        'output_instruction',
        'submission_instruction',
        'deadline_instruction',
        'is_group_assignment'
    ];

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
}
