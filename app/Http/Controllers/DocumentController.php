<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function show(User $user, $filename)
    {
        // find the document from DB
        $document = $user->documents()->where('filename', $filename)->first();

        // authorize user making the request
        if (! request()->user()->isAdmin()) {
            abort(403); // not authorized
        }

        // stream the file to the browser
        if ($document->extension == 'pdf') {
            return response(Storage::disk('s3')->get('/documents/'.$user->id.'/'.$filename))
                ->header('Content-Type', 'application/pdf');
        }
    }
}
