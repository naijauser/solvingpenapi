<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class QuestionSpecialization extends Model
{
    /**
     * This variable contains an array of columns which can be mass assigned
     * 
     * @var array
     */
    protected $fillable = [
        'specialization_id',
        'question_id',
    ];

    /**
     * Primary key associated with table
     * 
     * @var array
     */
     protected $primaryKey = ['question_id', 'specialization_id']; 


     /**
      * Variable which indicates if the primary key is incrementing
      * 
      * @var string
      */
       public $incrementing = false;


       /**
        * Indicates if the model should be timestamped
        * 
        * @var boolean
        */
       public $timestamps = false;


       /**
        * Override the Model class's setKeysForSave function
        * to use composite key
        * 
        * @return Illuminate\Database\Eloquent\Builder
        */
       protected function setKeysForSaveQuery (Builder $query) {
           $getKeyForSaveQuery = $this->getKeyForSaveQuery();

           for ($i = 0; i < $this->primaryKey.count(); $i++) {
               $query->where($this->primaryKeys[i], '=', $getKeyForSaveQuery[i]);
           }
           return $query;
       }

       /**
        * Override the getKeyForSaveQuery to get the primary key values
        * for a save query.
        *
        * @return mixed
        */
       protected function getKeyForSaveQuery()
       {
           // This array will hold the primary key and its value
           $primaryKeysAndData = [];

           foreach ($primaryKey as $key) {
               $primaryKeysAndData.push(
                   $this->original[$key] ?? $this->getAttribute($key)
               );
           }
           return $primaryKeysAndData;
       }
}
