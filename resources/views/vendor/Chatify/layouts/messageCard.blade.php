{{-- -------------------- The default card (white) -------------------- --}}
@if($viewType == 'default')
    @if($from_id != $to_id)
    <div class="message-card chat-widget-speaker left" data-id="{{ $id }}">
        <p class="chat-widget-speaker-message">{!! ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message) !!}

        </p>
        <sub title="{{ $fullTime }}" class="chat-widget-speaker-timestamp">{{ $time }}</sub>
        {{-- If attachment is a file --}}
        @if(@$attachment[2] == 'file')
        <a href="{{ route(config('chatify.attachments.download_route_name'),['fileName'=>$attachment[0]]) }}" style="color: #595959;" class="file-download">
            <span class="fas fa-file"></span> {{$attachment[1]}}</a>
        @endif
    </div>
    {{-- If attachment is an image --}}
    @if(@$attachment[2] == 'image')
    <div>
        <div class="message-card">
            <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$attachment[0]) }}')">
            </div>
        </div>
    </div>
    @endif
    @endif
@endif

{{-- -------------------- Sender card (owner) -------------------- --}}
@if($viewType == 'sender')
    <div class="message-card mc-sender chat-widget-speaker right" data-id="{{ $id }}">
        <p class="chat-widget-speaker-message">{!! ($message == null && $attachment != null && @$attachment[2] != 'file') ? $attachment[1] : nl2br($message) !!}

        </p>
        <sub title="{{ $fullTime }}" class="message-time chat-widget-speaker-timestamp">
            <span class="fas fa-{{ $seen > 0 ? 'check-double' : 'check' }} seen"></span> {{ $time }}</sub>
            {{-- If attachment is a file --}}
        @if(@$attachment[2] == 'file')
        <a href="{{ route(config('chatify.attachments.download_route_name'),['fileName'=>$attachment[0]]) }}" class="file-download">
            <span class="fas fa-file"></span> {{$attachment[1]}}</a>
        @endif
    </div>
    {{-- If attachment is an image --}}
    @if(@$attachment[2] == 'image')
    <div class="chat-widget-speaker right">
        <div class="message-card mc-sender ">
            <div class="image-file chat-image" style="width: 250px; height: 150px;background-image: url('{{ asset('storage/'.config('chatify.attachments.folder').'/'.$attachment[0]) }}')">
            </div>
        </div>
    </div>
    @endif
@endif
