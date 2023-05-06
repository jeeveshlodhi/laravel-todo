<div x-show="open" x-transition
    class="absolute z-10 w-screen flex justify-center items-center h-screen bg-slate-500/40 top-0 left-0 ">
    <form action="{{ route('todo.store') }}" method="post" class="bg-white p-8 w-2/5 rounded-2xl">
        @csrf
        <div class="flex items-center justify-between ">
            <button type="button" @click="open = false">Cancel</button>
            <button type="submit" class="rounded-full bg-slate-600 text-white py-2 px-6 ">Add</button>
        </div>
        <h5 class=" font-semibold text-lg pt-4">Title</h5>
        <input type="text" name="title" placeholder="add a title ..." id=""
            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
        <h5 class=" font-semibold text-lg pt-4">Description</h5>
        <textarea placeholder="add a description ..." name="description" id=""
            class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "></textarea>
        <h5 class=" font-semibold text-lg pt-4">Tags</h5>
        <ul class="flex items-center justify-between" x-data="{ selectedTag: '' }">
            <button type="button" x-on:click="selectedTag = 'work'">
              <li class="flex items-center" x-bind:class="selectedTag === 'work' ? 'bg-gray-500' : ''">
                <div class="rounded-full w-6 h-6 m-2 bg-violet-200"></div> work
              </li>
            </button>
            <button type="button" x-on:click="selectedTag = 'study'">
              <li class="flex items-center" x-bind:class="selectedTag === 'study' ? 'bg-gray-500' : ''">
                <div class="rounded-full w-6 h-6 m-2 bg-cyan-200"></div> study
              </li>
            </button>
            <button type="button" x-on:click="selectedTag = 'entertainment'">
              <li class="flex items-center" x-bind:class="selectedTag === 'entertainment' ? 'bg-gray-500' : ''">
                <div class="rounded-full w-6 h-6 m-2 bg-pink-200"></div> entertainment
              </li>
            </button>
            <button type="button" x-on:click="selectedTag = 'family'">
              <li class="flex items-center" x-bind:class="selectedTag === 'family' ? 'bg-gray-500' : ''">
                <div class="rounded-full w-6 h-6 m-2 bg-emerald-200"></div> family
              </li>
            </button>
            <input type="hidden" x-model="selectedTag" id="tags" name="tags" />
          </ul>

    </form>
</div>
