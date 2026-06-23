<?php namespace Bloom\Products\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'bloom_products_';

    // public $jsonable = ['images'];
    // public $attachMany = [
    //     'images' => \System\Models\File::class
    // ];

        // protected $jsonable = ['images'];
    
    // Or use casts
        protected $casts = [
            'images' => 'array'
        ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];
    

    // public $attachMany = [
    //     'images' => \System\Models\File::class
    // ];


    // public function beforeSave()
    // {
    //     $this->images = json_encode([
    //         $this->image1,
    //         $this->image2,
    //         $this->image3,
    //         $this->image4,
    //     ]);
    // }

    public function beforeSave()
        {
            trace_log('Images data: ' . print_r(post('Product.images'), true));
        }

}
