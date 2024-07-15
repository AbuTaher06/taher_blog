<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- TailwindCSS CDN -->
  @include('layouts.partials.head-scripts')

</head>

<body class="antialiased bg-zinc-900">
  <!-- BG Gradient  -->
  <div class="absolute inset-0 mx-0 overflow-hidden -z-10 max-w-none">
    <div
      class="absolute left-1/2 top-0 ml-[-38rem] h-[25rem] w-[81.25rem] [mask-image:linear-gradient(white,transparent)] z-[-100] overflow-visible">
      <div
        class="absolute inset-0 bg-gradient-to-r [mask-image:radial-gradient(farthest-side_at_top,white,transparent)] from-[#36b49f]/30 to-[#DBFF75]/30 opacity-100">
        <svg aria-hidden="true"
          class="absolute inset-x-0 inset-y-[-50%] h-[200%] w-full skew-y-[-18deg] fill-black/40 stroke-black/50 mix-blend-overlay stroke-white/5">
          <defs>
            <pattern id=":S1:" width="72" height="56" patternUnits="userSpaceOnUse" x="-12" y="4">
              <path d="M.5 56V.5H72" fill="none"></path>
            </pattern>
          </defs>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#:S1:)"></rect>
          <svg x="-12" y="4" class="overflow-visible">
            <rect stroke-width="0" width="73" height="57" x="288" y="168"></rect>
            <rect stroke-width="0" width="73" height="57" x="144" y="56"></rect>
            <rect stroke-width="0" width="73" height="57" x="504" y="168"></rect>
            <rect stroke-width="0" width="73" height="57" x="720" y="336"></rect>
          </svg>
        </svg>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  @include('layouts.partials.navbar')
  <!-- Main Contents -->

  @yield('main_content')
</body>

</html>
