<?php

namespace App\Policies;

use App\Model\admin\admin;
use App\Model\user\post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the admin can view any posts.
     *
     * @param  \App\Model\admin\admin  $admin
     * @return mixed
     */
    public function viewAny(admin $admin)
    {
        //
    }

    /**
     * Determine whether the admin can view the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\post  $post
     * @return mixed
     */
    public function view(admin $admin)
    {
        //
    }

    /**
     * Determine whether the admin can create posts.
     *
     * @param  \App\Model\admin\admin  $admin
     * @return mixed
     */
    public function create(admin $admin)
    {
       return $this-> getPermission($admin,5);
    }

    /**
     * Determine whether the admin can update the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\post  $post
     * @return mixed
     */
    public function update(admin $admin)
    {
        return $this-> getPermission($admin,6);

    }

    /**
     * Determine whether the admin can delete the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\post  $post
     * @return mixed
     */
    public function delete(admin $admin)
    {
        return $this-> getPermission($admin,8);

    }
    public function tag(admin $admin)
    {
        return $this-> getPermission($admin,13);

    }
    public function category(admin $admin)
    {
        return $this-> getPermission($admin,14);

    }

    /**
     * Determine whether the admin can restore the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\post  $post
     * @return mixed
     */
    public function restore(admin $admin)
    {
        //
    }

    /**
     * Determine whether the admin can permanently delete the post.
     *
     * @param  \App\Model\admin\admin  $admin
     * @param  \App\post  $post
     * @return mixed
     */
    public function forceDelete(admin $admin)
    {
        //
    }

    protected function getPermission($admin,$p_id)
    {
        foreach($admin->roles as $role)
        {
            foreach ($role -> permission as $permission){
                if ($permission->id==$p_id){
                    return true;
                }
            }
        }
        return false;
    }
}
