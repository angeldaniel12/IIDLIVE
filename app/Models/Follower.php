<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Follower extends Model
{
    use HasFactory;

    protected $fillable = ['followers', 'follower_id', 'following_id'];

  

//     public function isFollowing(User $user)
//  {
//      return $this->following()->where('following_id', $user->id)->exists();
//  }
public function isFollowing(User $user)
{
    return $this->following()->where('following_id', $user->id)->exists();
}
public function follow(User $user)
{
    $this->following()->create(['following_id' => $user->id]);
}

public function unfollow(User $user)
{
    $this->following()->where('following_id', $user->id)->delete();
}


public function followers()
  {
         return $this->belongsTo(Follower::class,'followers', 'follower_id','following_id');
 }

 public function following()
  {
         return $this->belongsTo(Follower::class,'followers','following_id','follower_id');
 }
//  public function followers()
//  {
//      return $this->belongsTo(User::class,'followers','following_id');
//  }

//  public function following()
//  {
//      return $this->belongsTo(User::class,'followers','follower_id');
//  }
}
