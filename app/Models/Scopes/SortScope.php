<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SortScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        //Aplicar ordenamiento
        if (empty(request('sort'))) {
            return;
        }
        $sortFields = explode(',', request('sort'));
        foreach ($sortFields as $sortField) {
            $direction = 'asc'; // Por defecto, orden ascendente

            if (substr($sortField, 0, 1) == '-') {
                $direction = 'desc'; // Si el campo comienza con '-', orden descendente
                $sortField = substr($sortField, 1); // Eliminar el '-' del nombre del campo
            }

            $builder->orderBy($sortField, $direction);
        }
    }
}
