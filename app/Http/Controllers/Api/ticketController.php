<?php

namespace App\Http\Controllers\Api;

use App\action\message;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ticketRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\TicketResourse;
use App\Models\comment;
use App\Models\ticket;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function create(ticketRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = Auth()->user()->id; // Ensure the user is authenticated

      $new_data=  ticket::query()->create($data);
        // Make sure 'Ticket' is correctly spelled and imported
        return message::success(TicketResourse::make($new_data),'this is a new ticket');
    }
    public function show()
    {
        $tickets = ticket::query()->orderBy('id', 'DESC')->get();

        return message::success(TicketResourse::collection($tickets),'this is all tickets');
    }
    public function createComment(CommentRequest $request, $id)
    {
        // Ensure ticket exists
        $ticket = ticket::findOrFail($id); // This returns a single model instance, not an array

        // Get validated data
        $commentData = $request->validated();
        $commentData['ticket_id'] = $id;

        // Check if parent_id is provided for replies
        $commentData['parent_id'] = $commentData['parent_id'] ?? null; // Sets parent_id to null if not provided

        // Assuming user is authenticated
        $commentData['user_id'] = Auth()->user()->id; // Add the user ID

        // Create the comment
        $new=comment::create($commentData);

        // Return success message (assuming you're using a resource here)
        return message::success(CommentResource::make($new),'this is a comment');
    }


}
