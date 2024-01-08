<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\AuthorConferenceFile;

class ConferenceFileType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function AuthorConferenceFile(): HasOne
    {
        return $this->hasOne(AuthorConferenceFile::class);
    }
}
