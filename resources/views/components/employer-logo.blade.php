@props(['employer','width' => 90])

{{--<img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}" alt="" class="rounded-xl">--}}
<img src="{{ asset('storage/' . $employer->logo) }}" class="rounded-xl" width="{{$width}}" height="{{$width}}">
