<?php

namespace App\Backoffice\Voyager\Widgets;

use App\Models\VehicleType;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;

class VehicleTypes extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = VehicleType::all()->count();
        $string = 'Vehicle Types';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tools',
            'title'  => "{$count} {$string}",
            // 'text'   => __('voyager::dimmer.date_text', ['count' => $count, 'string' => Str::lower($string)]),
            'text'   => "",
            'button' => [
                'text' => 'Vehicle Types',
                'link' => route('voyager.vehicle-types.index'),
            ],
            'image' => 'storage/widgets/vehicles-types-widget.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        // return Auth::user()->can('browse', Voyager::model('User'));
        return auth()->user()->hasRole(['admin']);
    }
}
