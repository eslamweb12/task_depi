@extends('layout')

@section('title','home')

@section('content')

    <div class="notifications-container" style="position: relative; left: 200px; overflow: hidden;">
        <h1 class="text-center">User Notifications</h1>
        <ul class="notifications-list">
            <!-- Example Notification (Unread) -->
            <li class="notification unread">
                <div class="notification-header">
                    <h2 class="notification-title">book the ticket</h2>
                    <span class="notification-date">September 22, 2024</span>
                </div>
                <p class="notification-message">book by taking a ticket!</p>
            </li>

            <!-- Example Notification (Read) -->
            <li class="notification read">
                <div class="notification-header">
                    <h2 class="notification-title">ticket </h2>
                    <span class="notification-date">September 20, 2024</span>
                </div>
                <p class="notification-message">Don't forget to submit you request or any problem that you have</p>
            </li>
        </ul>
    </div>



@endsection
