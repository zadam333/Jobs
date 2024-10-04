<x-layout>

<div class="space-y-10">
<section>
    <div class="text-center">
        <h1 class="text-4xl text-bold">
            Find your job
        </h1>
        <form>
            <input type="text" placeholder="Developer..." class="mt-3 bg-white/5 border-white/10 rounded-xl px-5 py-4 max-w-xl" >
        </form>
    </div>
       
    </section>   
<section>
       <x-section-heading>Top jobs</x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-6">

        @foreach ($featuredJobs as $job)
        <x-job-card :$job/>
        @endforeach

       
        </div>
      
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-1">
        @foreach ($tags as $tag)
            <x-tag :$tag>{{$tag->name}}</x-tag>
        @endforeach
        </div>
    </section>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="space-y-10">
        @foreach ($jobs as $job)
        <x-job-card-wide :$job/>
        @endforeach
         
          
        </div>
    </section>
</div>

</x-layout>