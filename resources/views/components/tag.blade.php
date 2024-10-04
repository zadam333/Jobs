@props(['tag'])
<a class="bg-white/10 px-2 py-1 rounded-xl text-xs hover:bg-white/25 text-xs transition-colors duration-300 text-xs" href="/tags/{{$tag->name}}">{{$slot}}</a>