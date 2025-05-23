<?php

namespace modules\PkgEntretienInscrition\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    protected $fillable = ['question_id', 'participation_id'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function participation(): BelongsTo
    {
        return $this->belongsTo(Participation::class);
    }

    public function evaluation()
    {
        return $this->hasOne(Evaluation::class);
    }
}
