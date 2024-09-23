@extends('layout')

@section('title', 'All Tickets')

@section('content')
    <h1>All Tickets</h1>
    <ul>
        @foreach ($tickets as $ticket)
            <li>
                <p>title: {{ $ticket->title }}</p>
                <p>info: {{ $ticket->info }}</p>
                <p>Type {{ $ticket->type }}</p>

                <h2>Comments</h2>
                @foreach ($ticket->comments as $comment)
                    <div>

                        <p>{{ $comment->comment }}</p>


                        <form action="{{ route('createcomment', ['id' => $ticket->id]) }}" method="post">
                            @csrf
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                            <div class="form-group">
                                <textarea name="comment" class="form-control" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">reply</button>
                        </form>

                        <!-- Display replies -->
                        @foreach ($comment->replies as $reply)
                            <div style="margin-left: 20px;">

                                <p>{{ $reply->comment }}</p>
                            </div>
                        @endforeach
                    </div>
                @endforeach

                <!-- Main comment form for the ticket -->
                <h3>Add a Comment</h3>
                <form action="{{ route('createcomment', ['id' => $ticket->id]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="comment" class="form-control" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">submit Comment</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
