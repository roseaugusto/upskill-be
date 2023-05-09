<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\UploadedFile;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attachable(): MorphTo
    {
        return $this->morphTo();
    }

    public static function transformAvatarFileRequest(UploadedFile $file, string $filename): array
    {
        return [
            'url' => '/storage/' . $filename,
            'file_name' => $filename,
            'extension' => $file->getClientOriginalExtension(),
            'type' => 'avatar'
        ];
    }
}
