<?php
 
namespace App;
 
use App\User;
use Illuminate\Http\Request;
 
class ThreadFilters
{
    protected $request;
 
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
 
    public function apply($builder)
    {
        if (!$username = $this->request->by) return $builder;
 
        $user = User::where('name', $username)->firstOrFail();
        
        return $builder->where('user_id', $user->id);
    }
}

?>