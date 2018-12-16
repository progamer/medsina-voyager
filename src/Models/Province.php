<?php

namespace TCG\Voyager\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;
use TCG\Voyager\Traits\Spatial;
use TCG\Voyager\Traits\Resizable;

class Province extends Model
{
    use Translatable;
    use Spatial;

    protected $translatable = ['name'];

    protected $guarded = [];

    protected $spatial = ['coordinates'];
}
