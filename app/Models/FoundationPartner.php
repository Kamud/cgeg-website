<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $organisation
 * @property string $involvement_type
 * @property string $message
 * @property bool $reviewed
 */
#[Fillable(['name', 'email', 'phone', 'organisation', 'involvement_type', 'message', 'reviewed'])]
class FoundationPartner extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'reviewed' => 'boolean',
        ];
    }
}
