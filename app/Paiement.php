<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
    'objet',
    'depositaire',
    'Montant',
    'datePaie'
  ];
}
