<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserController extends Controller
{
   use SoftDeletes;
   
    protected $fillable = [
    'title',
    'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}