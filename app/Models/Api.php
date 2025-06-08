<?php

namespace App\Models;

use App\Models\Scopes\FilterScope;
use App\Models\Scopes\IncludeScope;
use App\Models\Scopes\SelectScope;
use App\Models\Scopes\SortScope;
use Illuminate\Database\Eloquent\Model;


class Api extends Model
{
    protected static function booted(): void
    {
        static::addGlobalScopes([
            FilterScope::class,
            SelectScope::class, // Asegúrate de que SelectScope esté importado correctamente
            SortScope::class, // Asegúrate de que SortScope esté importado correctamente
            IncludeScope::class // Asegúrate de que IncludeScope esté importado correctamente
        ]);
    }

    public function scopeGetOrPaginate($query)
    {
        //Crear consulta
        if (request('perPage')) {
            return $query->paginate(request('perPage'));
        }
        return $query->get();
    }
}
