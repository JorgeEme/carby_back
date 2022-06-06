<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Http\Resources\FaqResource;
use App\Models\Faq;
use Illuminate\Http\Request;

use function App\Helpers\ok;

class FaqController extends Controller
{
    public function getFaqs(Request $request)
    {
        return ok(FaqResource::collection(Faq::all()));
    }
}
