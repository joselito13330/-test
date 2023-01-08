<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
        protected $dates = [
            'created_at',
            'updated_at',
         ];
        
        protected $fillable = [
             'titre', 'auteur', 'category', 'langue', 'lien',
                 ];

        public function getTitreAttribute($value)
            {
                return ucfirst($value);
            }
            
        public function getAuteurAttribute($value)
            {
                return ucfirst($value);
            }

        public function getCategoryAttribute($value)
            {
                return ucfirst($value);
            }
            
        public function getLangueAttribute($value)
            {
                return strtolower($value);
            }                              

}
