<?php

namespace App\Enum;

enum RolesEnum: string
{
    case Admin = 'admin';
    case Commenter = 'commenter';
    case User = 'user';

    public function labels(): array
    {
        return [
            Self::Admin->value => 'Admin',
            Self::Commenter->value => 'Commenter',
            Self::User->value => 'User',
        ];
    }

    public function label()
    {
        return match ($this) {
            Self::Admin => 'Admin',
            Self::User => 'User',
            Self::Commenter => 'Commenter',
        };
    }
}
