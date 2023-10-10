@extends('layout.mainlayout',['activePage' => 'ourblogs'])

@section('content')
<div class="pt-14 border-b border-white-light mb-10 pb-10">
    <h1 class="font-fira-sans font-semibold text-5xl text-center leading-10">{{__('Our Blogs ')}}</h1>
    <div class="p-5">
        <p class="font-fira-sans font-normal text-lg text-center leading-5 text-gray">{{__('Lorem ipsum dolor sit
            amet,ng elit.')}}</p>
    </div>
    <div
        class="flex justify-center 2xl:flex-row xl:flex-row xlg:flex-row lg:flex-row xmd:flex-row md:flex-row sm:flex-row msm:flex-col xsm:flex-col xxsm:flex-col space-x-5
            xmd:space-y-0 sm:space-y-0 sm:space-x-5 msm:space-x-0 xsm:space-x-0 xxsm:space-x-0 msm:p-5 msm:space-y-2 xsm:space-y-2 xsm:p-5 xxsm:space-y-2 xxsm:p-2">
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="search" id="default-search"
                class="block p-2 pl-10 text-sm text-gray-100 bg-white-50 border border-white-light 2xl:w-96 xmd:w-72 sm:w-60 msm:w-96 xsm:w-60 h-12"
                placeholder="Search Doctor..." required>
        </div>
        <button type="button"
            class="text-white bg-primary text-center px-6 py-2 text-base font-normal leading-5 font-fira-sans sm:w-32 msm:w-32 xsm:w-32 xxsm:w-32 h-12"><i class="fa-solid fa-magnifying-glass"></i> {{__('Search')}}</button>
    </div>
</div>
<div class="xl:w-3/4 mx-auto">
    @if(count($blogs) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 xmd:grid-cols-3 gap-10 xxsm:mx-5 xl:mx-0 2xl:mx-0">
            @foreach ($blogs as $blog)
                <a href="{{ url('blog-details/'.$blog->id.'/'.Str::slug($blog->title)) }}">
                    <div class="md:mt-5 sm:mt-11 msm:mt-11 xsm:mt-11 xxsm:mt-11 w-full">
                        <img class="lg:h-60 lg:w-full bg-cover object-cover" src="{{asset($blog->fullImage)}}" alt="" />
                        <div class="text-gray text-left font-medium text-base py-2 leading-5 font-fira-sans flex">
                            @if (strlen($blog->title) > 30)
                            <div class="font-fira-sans text-primary text-base font-normal leading-5 md:text-sm">{!!
                                substr(clean($blog->title),0,30) !!}....</div>
                            @else
                            <div class="font-fira-sans text-primary text-base font-normal leading-5 md:text-sm">{!!
                                clean($blog->title) !!}</div>
                            @endif
                            {{ Carbon\Carbon::parse($blog->created_at)->format('d M,Y') }}
                        </div>
                        <p class="font-fira-sans font-normal text-xl leading-6 text-black text-left">{{ $blog->blog_ref }}</p>
                        <div class="leading-4 font-fira-sans font-normal text-sm text-gray text-left h-28 overflow-hidden">{!!
                            $blog->desc !!}</div>
                    </div>
                </a>
            @endforeach
        </div>
    @else
        <div class="flex justify-center mt-32 font-fira-sans font-normal text-base text-gray"> 
            {{__('No Data Avalaible')}}
        </div>
    @endif   
</div>
@endsection