<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<script>
    tailwind.config = {
      theme: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
      },
    };
  </script>

  <!-- Inter Google Font CDN -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <title>@yield('title','Taher') | {{ env('APP_NAME','Taher') }}</title>
