<x-app-layout>
    <x-slot name="sidepanel">
        <div class="fixed h-full py-12 w-[200px] flex flex-col items-center justify-between ">
            <p class=" text-5xl font-black cursor-pointer  " onclick="location.href='/dashboard'">todo</p>
            <ul class="flex flex-col">
                <button onclick="location.href='/dashboard/work'">
                    <x-todo-tag value="work" color="bg-violet-200" />
                </button>

                <button onclick="location.href='/dashboard/study'">
                    <x-todo-tag value="study" color="bg-cyan-200" />
                </button>
                <button onclick="location.href='/dashboard/entertainment'">
                    <x-todo-tag value="entertainment" color="bg-pink-200" />
                </button>
                <button onclick="location.href='/dashboard/family'">
                    <x-todo-tag value="family" color="bg-emerald-200" />
                </button>
            </ul>
            <div>
                <div class="px-6 py-2">
                    <input
                        class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-900 rounded focus:ring-blue-500  focus:ring-2 "
                        type="checkbox" name="done" id="done">
                    <label class=" text-sm" for="done">Hide Done Tasks</label>
                </div>

                <img src="/illustration.jpg" alt="">
            </div>
        </div>
    </x-slot>

    <div class=" ml-[200px] w-full">
        <x-header />
        <div class="flex flex-wrap justify-center ">

            @foreach ($todos as $todo)
                <x-todo title="{!! $todo['title'] !!}" description="{!! $todo['desc'] !!}" id="{!! $todo['id'] !!}" />
                {{-- {{ $todo['title'] }} --}}
            @endforeach

        </div>
    </div>
</x-app-layout>
