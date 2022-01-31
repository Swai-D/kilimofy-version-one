if ($request->hasFile('avatar')) {
    // allowed extensions
    $allowed_images = Chatify::getAllowedImages();

    $file = $request->file('avatar');
    // if size less than 150MB
    if ($file->getSize() < 150000000) {
        if (in_array($file->getClientOriginalExtension(), $allowed_images)) {
            // delete the older one
            if (Auth::user()->avatar != config('chatify.user_avatar.default')) {
                $path = storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . Auth::user()->avatar);
                if (file_exists($path)) {
                    @unlink($path);
                }
            }
            // upload
            $avatar = Str::uuid() . "." . $file->getClientOriginalExtension();
            $update = User::where('id', Auth::user()->id)->update(['avatar' => $avatar]);
            $file->storeAs("public/" . config('chatify.user_avatar.folder'), $avatar);
            $success = $update ? 1 : 0;
        } else {
            $msg = "File extension not allowed!";
            $error = 1;
        }
    } else {
        $msg = "File extension not allowed!";
        $error = 1;
    }
}
