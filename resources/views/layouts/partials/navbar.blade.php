<header
class="inset-x-0 top-0 z-50 shadow-sm lg:static lg:overflow-y-visible backdrop-blur bg-zinc-900/20 ring-1 lg:flex text-zinc-400 ring-white/10">
<div class="w-full px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
  <div class="relative flex flex-row items-center justify-between gap-6 lg:gap-8">
    <!-- Logo -->
    <div class="flex items-center justify-start">
      <div class="flex items-center flex-shrink-0">
        <a href="{{ route('blog.index')}}">
          <img class="h-10 w-16 h-16 rounded-full" src="https://avatars.githubusercontent.com/u/83139817?s=400&u=f93bc3df48ca1efee64ef44a70f29f272256f252&v=4"
           alt="Logo" />
        </a>
      </div>
    </div>

    <!-- Search Box -->
    <div class="flex-grow min-w-0 px-0">
      <div class="flex items-center px-0 py-4 mx-auto">
        <form class="w-full" action="{{ route('blog.index')}}" method="GET">
          <label for="search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <!-- Search Icon -->
              <svg class="w-5 h-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                  clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search" name="search"
              class="block w-full py-3 pl-10 pr-3 text-lg transition border-0 rounded-full placeholder:text-zinc-400 focus:ring-2 focus:ring-inset focus:ring-emerald-600 sm:text-2xl sm:leading-6 ring-1 ui-not-focus-visible:outline-none lg:flex bg-white/5 text-zinc-400 ring-inset ring-white/10 hover:ring-white/20"
              placeholder="Search" value="{{ request('search') }}" type="search" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</header>
