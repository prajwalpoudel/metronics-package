<?php

namespace Prajwal\Metronics;

use App\Entities\Menu;
use Illuminate\Database\Eloquent\Model;

class MenuGroup extends Model
{
    /**
     * @return HasMany
     */
    public function menus() {
        return $this->hasMany(Menu::class);
    }
}
