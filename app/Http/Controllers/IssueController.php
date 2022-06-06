<?php

namespace App\Http\Controllers;

use App\General;
use App\Http\Requests\IssueRequest;
use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Http\Resources\IssueResource;
use App\Mail\ManageIssueMail;
use App\Models\Issue;
use App\Models\IssueMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function App\Helpers\ko;
use function App\Helpers\ok;

class IssueController extends Controller
{
    public function createIssue(IssueRequest $request)
    {
        $user = auth()->user();

        $journey =  $user->journeys()->where('id', $request->journey_id)->first();

        if (!$journey)
            return ko(__('custom_messages.journey_not_found'));

        $issue = Issue::create([
            "journey_id"  => $journey->id,
            "subject"     => $request->subject,
            "description" => $request->description,
        ]);

        if (isset($request->images)) {
            foreach ($request->images as $image) {
                $media = General::uploadImage($image, Issue::IMG_FOLDER);
                IssueMedia::create([
                    "issue_id" => $issue->id,
                    "media" => $media
                ]);
            }
        }

        return ok(IssueResource::make(Issue::find($issue->id)));
    }

    public function manageView(Request $request, int $id)
    {
        $issue = Issue::find($id);

        if (!$issue) abort(404);

        return view('vendor.voyager.issues.manage', compact('issue'));
    }

    public function manage(Request $request, int $id)
    {
        $issue = Issue::find($id);

        Mail::to($issue->journey->user->email)->send(new ManageIssueMail($id, $request->message));

        return redirect('voyager.issues.index');
    }
}
