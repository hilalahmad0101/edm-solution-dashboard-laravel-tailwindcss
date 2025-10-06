@props(['title' => '', 'icon' => ''])
<button class="border-2 border-[#0000001A] px-4 py-2.5 flex items-center space-x-4 rounded-lg">
    <div>
        {!! $icon !!}
    </div>
    <p class="font-[Arial] font-normal text-[14px] leading-[20px] tracking-[0px]">
        {{ $title }}
    </p>
</button>
