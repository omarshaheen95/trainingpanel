<?php
/**
 * Created by PhpStorm.
 * User: Dev Omar Shaheen
 * Date: 4/27/2019
 * Time: 12:47 AM
 */

namespace App\Repositories;


class BaseRepository
{

    public function getAll()
    {
        return $this->query()->get();
    }

    public function getPaginated($per_page, $available = '', $order_by = 'id', $sort = 'asc')
    {
        if($available){
            return $this->query()->where('available', $available)
                ->orderBy($order_by, $sort)
                ->paginate($per_page);
        }else{
            return $this->query()
                ->orderBy($order_by, $sort)
                ->paginate($per_page);
        }
    }

    public function getCount()
    {
        return $this->query()->count();
    }

    public function find($id)
    {
        return $this->query()->find($id);
    }

    public function query()
    {
        return call_user_func(static::MODEL.'::query');
    }

}