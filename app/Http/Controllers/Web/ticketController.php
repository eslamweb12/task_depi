<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ticketRequest;
use App\Models\comment;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ticketController extends Controller
{
    public  function __construct()
    {
        $this->middleware('auth');
    }

    public function create(ticketRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = Auth::user()->id; // Ensure the user is authenticated

        ticket::query()->create($data);
       // Make sure 'Ticket' is correctly spelled and imported
        return redirect()->back()->with('success', 'Ticket created successfully');
    }
    public function show()
    {
        $tickets = Ticket::query()->orderBy('id', 'DESC')->get();

        return view('allticket')->with('tickets', $tickets); // Correctly passing the variable
    }
    public function createComment(CommentRequest $request, $id)
    {
        // Ensure ticket exists
        $ticket = ticket::findOrFail($id);

        // Get validated data
        $commentData = $request->validated();
        $commentData['ticket_id'] = $id;

        // Check if parent_id is provided for replies
        if (isset($commentData['parent_id'])) {
            $commentData['parent_id'] = $commentData['parent_id'];
        }else{
            $commentData['parent_id'] = null;
        }



        // Assuming user is authenticated
        $commentData['user_id'] = Auth()->user()->id; // Add the user ID

        // Create the comment
        Comment::create($commentData);

        return redirect()->back()->with('success', 'Comment created successfully');
    }



}
