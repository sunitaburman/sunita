<?php
Class ThreadFilters{
public function index(Channel $channel)
{
    if ($channel->exists) {
        $threads = $channel->threads()->latest();
    } else {
        $threads = Thread::latest();
    }
 
    if ($username = request('by')) {
        $user = \App\User::where('name', $username)->firstOrFail();
        $threads->where('user_id', $user->id);
    }
 
    $threads = $threads->get();
 
    return view('threads.index', compact('threads'));
}
}
?>