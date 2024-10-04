

@props(["job"])

<div class="p-4 bg-white/5 rounded-xl flex-col text-center border border-transparent hover:border-blue-800 transition-colors duration-800">
            <div class="self-start text-sm">
                {{$job->employer->name}}
            </div>
            <div class="py-8 font-bold hover:text-blue-800 transition-colors duration-800">
                <h3>
                {{$job->name}}
                </h3>
                <p>{{$job->salary}}</p>
            </div>
            <div class="flex justify-between items-center mt-auto">
               

                <img class="rounded-xl " src="{{$job->employer->logo}}" alt="">
            </div>
            <div>
                    @foreach ($job->tags as $tag)
                        <x-tag :$tag>{{$tag->name}}</x-tag>
                    @endforeach


                </div>
        </div>