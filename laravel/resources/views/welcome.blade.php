@foreach($events as $event)
    <p>{{ $event->nome }} - {{ $event->data }}</p>
@endforeach
