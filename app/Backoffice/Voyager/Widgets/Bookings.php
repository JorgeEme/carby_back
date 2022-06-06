<?php

namespace App\Backoffice\Voyager\Widgets;

use App\Models\Book;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Illuminate\Support\Facades\Auth;

class Bookings extends BaseDimmer
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
        $count = Book::all()->count();
        $string = 'Bookings';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-book',
            'title'  => "{$count} {$string}",
            // 'text'   => __('voyager::dimmer.date_text', ['count' => $count, 'string' => Str::lower($string)]),
            'text'   => "",
            'button' => [
                'text' => 'Bookings',
                'link' => route('voyager.books.index'),
            ],
            'image' => 'storage/widgets/bookings-widget.jpg',
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
