<?php

namespace App\Http\Controllers;

use App\Http\Requests\RateRequest;
use App\Models\Review;
use Illuminate\Http\Request;

use function App\Helpers\ok;

class ReviewController extends Controller
{
    public function rate(RateRequest $request)
    {
        Review::create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment ? $request->comment : null
        ]);

        return ok(true);
    }
}
