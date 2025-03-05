<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
            maxWidth: {
              300: "200px",
            },
            fontFamily: {
              quicksand: ["Quicksand", "serif"],
            },
            maxWidth: {
              psize: "600px",
            },
          },
        },
      };
    </script>
</head>
<body class="bg-gray-100 font-quicksand">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 p-4 bg-white h-screen shadow-md">
            <div class="flex items-center space-x-2 mb-6">
                <img src="https://via.placeholder.com/40" alt="profile" class="w-10 h-10 rounded-full">
                <span class="font-bold">Minsara Vithanage</span>
            </div>
            <ul class="space-y-4">
                <li class="flex items-center space-x-2"><span>🏠</span> <span>Home</span></li>
                <li class="flex items-center space-x-2"><span>👫</span> <span>Friends</span></li>
                <li class="flex items-center space-x-2"><span>🔖</span> <span>Saved</span></li>
                <li class="flex items-center space-x-2"><span>📅</span> <span>Events</span></li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="w-1/2 p-4">
            <!-- Stories -->
            <div class="flex space-x-2 mb-4">

            <!-- story 1 -->
             <div class="">
                 <h2 class="font-bold">John Doe</h2>
                 <img src="./assets/images/story1.png" alt="profile" class="w-20 h-20 rounded-3xl">
                 <span class="text-gray-500">5 mins ago</span>
             </div>
             <div class="">
                 <h2 class="font-bold">John Doe</h2>
                 <img src="./assets/images/story1.png" alt="profile" class="w-20 h-20 rounded-3xl">
                 <span class="text-gray-500">5 mins ago</span>
             </div>
             <div class="">
                 <h2 class="font-bold">John Doe</h2>
                 <img src="./assets/images/story1.png" alt="profile" class="w-20 h-20 rounded-3xl">
                 <span class="text-gray-500">5 mins ago</span>
             </div>
                
            </div>
            
            <!-- Post Box -->
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <input type="text" placeholder="What's on your mind?" class="w-full p-2 border rounded-lg">
                <div class="flex justify-around mt-2">
                    <button class="text-red-500">🎥 Live Video</button>
                    <button class="text-green-500">📷 Photo/Video</button>
                </div>
            </div>
            
            <!-- Posts -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="flex items-center space-x-2 mb-2">
                    <img src="../assets/images/Rectangle 8.png" alt="profile" class="w-10 h-10 rounded-full">
                    <span class="font-bold">John Snow</span>
                    <span class="text-gray-500">5 mins ago</span>
                </div>
                <p>It's Coming ❄️</p>
                <img src="./assets/images/post.png" alt="post image" class="w-full rounded-lg mt-2">
            </div>
        </div>
        
        <!-- Right Sidebar -->
        <div class="w-1/4 p-4 bg-white h-screen shadow-md">
            <h3 class="font-bold mb-4">Contacts</h3>
            <ul class="space-y-2">
                <li class="flex items-center space-x-2"><span>👤</span> <span>Alexander Smith</span></li>
                <li class="flex items-center space-x-2"><span>👤</span> <span>Olivia Johnson</span></li>
                <li class="flex items-center space-x-2"><span>👤</span> <span>Benjamin Williams</span></li>
            </ul>
        </div>
    </div>
</body>
</html>
