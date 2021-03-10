<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadAvatarUser(Request $request)
    {
        $cedula='0250366515';
        $path = $request->file('avatar')->store("file/$cedula/avatars");
        return $path;
    }
}
