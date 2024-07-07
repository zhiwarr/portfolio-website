@extends('layouts.master')
@section('content')
<div class="chatcontainer ">
    <div class="card shadow-lg border-0 text-light" style="background: #2a2f3a; border-radius:20px;">
        <div class=" p-4">
            <form action="{{ route('send-message') }}" method="POST">
                @csrf
                <!-- Send Message Section -->
                <div class="send-message mb-5 ">
                    <img src="{{ asset('assets/images/robot.gif') }}" class="ml-5" height="100" alt="">
                    <h5 class="text-center mt-2 mb-3">Send an anonymous message

                    </h5>
                    <textarea name="message" class="form-control mb-3 border-0 rounded bg-blend-color-dodge text-light"
                        rows="8" placeholder="Send an anonymous message"></textarea>
                    <button class="btn btn-primary ml-2 py-2" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
    @isset($chats)
    <!-- Chat Messages Section -->
    @foreach ($chats as $chat)

    <div class="chat-messages">
        <!-- Single Chat Message -->
        <div class="chat-message">
            <!-- Message Badge (Image) -->
            <img src="{{ asset('assets/images/mail.png') }}" class="message-badge" alt="Message Badge">
            <!-- Message Content -->
            <div class="message-content-container">
                <p style="font-size: 10px; margin-left:10px; color:white; position:absolute;">{{ $chat->time }}</p>
                <!-- Message Content -->
                <p class="message-content">{{ $chat->message }}</p>
            </div>
        </div>
        <!-- Add more messages as needed -->
    </div>
    @endforeach
    @endisset
</div>
@endsection