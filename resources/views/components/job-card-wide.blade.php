@props(['job'])
<div class="p-4 bg-white/5 rounded-xl  flex-col border border-transparent hover:border-blue-800 transition-colors duration-800">
    <div class="grid lg:grid-cols-4 ">



        <div class="mr-10">
            <img class="rounded-xl w-90" src="{{$job->employer->logo}}" alt="">
        </div>

        <div class="flex justify-between space-x-4">


            <div class="font-bold">

                <div class="self-start text-xs text-white/50">

                    {{$job->employer->name}}
                    <div class="text-bold text-lg">
                        <h3 class="pt-1">
                            {{$job->name}}
                        </h3>
                        <p class="mt-5 text-white/50 text-xs">{{$job->schedule}} - From {{$job->salary}}</p>
                    </div>
                </div>




            </div>







        </div>
        <div class="mt-auto flex justify-between items-center col-start-4">


            @foreach ($job->tags as $tag)
            <x-tag :$tag>{{$tag->name}}</x-tag>
            @endforeach



        </div>
    </div>
</div>