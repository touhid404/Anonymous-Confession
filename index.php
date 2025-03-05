<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Riyadh's Blog Platform</title>
  <link rel="icon" type="image/jpg" href="img/riyadh.jpg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
    rel="stylesheet" />
  <script src="https://kit.fontawesome.com/873c85c170.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="Css/style.css" />
</head>

<body class="bg-gray-50 font-quicksand text-gray-800">

  <!-- Header -->
  <header class="bg-blue-800 text-white py-6">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-semibold">Riyadh's Blog Platform</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#about" class="hover:text-blue-400 transition-colors">About</a></li>
          <li><a href="#contact" class="hover:text-blue-400 transition-colors">Contact</a></li>
          <!-- Blog Submission Button -->
          <li><button id="openModalBtn" class="bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-lg transition-all">Submit a Blog</button></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-8">
    <h2 class="text-4xl font-bold text-center mb-8">Latest Blog Posts</h2>

    <div class="space-y-8">
      <?php
      include "./actions/fethch_posts.php";
      foreach ($posts as $post) {

        // Convert to a more readable format
        $formatted_date = date("F j, Y \a\t g:i A", strtotime($post['created_at']));
        echo "
            <div class='bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300'>
              <h3 class='text-2xl font-semibold text-blue-800'>{$post['author_name']}</h3>
              <p class='text-sm text-gray-500 mb-4'>Published on {$formatted_date}</p>
              <p class='text-lg text-gray-700 mb-4'>{$post['content']}</p>
              <a href='#' class='text-blue-600 font-semibold hover:text-blue-400 transition-colors'>Read more</a>
            </div>
            ";
      }
      ?>
    </div>

    <!-- Blog Submission Modal -->
    <div id="blogModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden opacity-0 pointer-events-none transition-all duration-500 transform scale-95">
      <div class="bg-white p-8 rounded-xl shadow-lg w-96 transition-all duration-500 transform scale-95 opacity-0 modal-content">
        <h3 class="text-3xl font-semibold text-center text-blue-800 mb-6">Submit Your Blog Post</h3>

        <form action="submit_blog.php" method="POST" class="space-y-6">
          <div>
            <label for="author" class="block text-lg font-semibold">Author Name</label>
            <input type="text" id="author" name="author" class="w-full p-4 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400" required />
          </div>

          <div>
            <label for="title" class="block text-lg font-semibold">Blog Title</label>
            <input type="text" id="title" name="title" class="w-full p-4 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400" required />
          </div>

          <div>
            <label for="content" class="block text-lg font-semibold">Content</label>
            <textarea id="content" name="content" rows="6" class="w-full p-4 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400" required></textarea>
          </div>

          <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-600 text-white py-4 rounded-lg font-semibold hover:bg-blue-500 transition-colors">Submit</button>
            <button type="button" id="closeModalBtn" class="text-gray-600 hover:text-gray-800 transition-colors">Close</button>
          </div>
        </form>
      </div>
    </div>

  </main>

  <!-- Footer -->
  <footer class="bg-blue-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-sm">Designed & Developed by <span class="font-semibold">Touhidul Islam Riyadh</span></p>
      <p class="text-xs">&copy; <span id="footerYear"></span> All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Modal toggling
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const blogModal = document.getElementById("blogModal");
    const modalContent = document.querySelector(".modal-content");

    openModalBtn.addEventListener("click", () => {
      blogModal.classList.remove("hidden", "opacity-0", "pointer-events-none", "scale-95");
      blogModal.classList.add("opacity-100", "scale-100", "pointer-events-auto");
      modalContent.classList.remove("scale-95", "opacity-0");
      modalContent.classList.add("scale-100", "opacity-100");
    });

    closeModalBtn.addEventListener("click", () => {
      blogModal.classList.add("opacity-0", "scale-95", "pointer-events-none");
      blogModal.classList.remove("opacity-100", "scale-100", "pointer-events-auto");
      modalContent.classList.add("scale-95", "opacity-0");
      modalContent.classList.remove("scale-100", "opacity-100");
    });

    // Close modal if clicked outside
    window.addEventListener("click", (e) => {
      if (e.target === blogModal) {
        blogModal.classList.add("opacity-0", "scale-95", "pointer-events-none");
        blogModal.classList.remove("opacity-100", "scale-100", "pointer-events-auto");
        modalContent.classList.add("scale-95", "opacity-0");
        modalContent.classList.remove("scale-100", "opacity-100");
      }
    });

    // Update footer year
    const currentYear = new Date();
    document.getElementById("footerYear").textContent = currentYear.getFullYear();
  </script>
</body>

</html>
