<div class="text-xl underline p-10 flex justify-center">
    <a class="text-orange-500 hover:text-orange-700 mr-4" href="../fruits/index.php">Fruits</a>
    <a class="text-orange-500 hover:text-orange-700 mr-4" href="../fruits/create.php">Add fruit</a>
    <a class="text-green-500 hover:text-green-700 mr-4" href="../flowers/index.php">Flowers</a>
    <a class="text-green-500 hover:text-green-700 mr-4" href="../flowers/create.php">Add flower</a>
    <a class="text-purple-500 hover:text-purple-700 mr-4" href="../users/index.php">Users</a>
    <a class="text-purple-500 hover:text-purple-700 mr-4" href="../users/create.php">Add user</a>
    <a class="text-purple-700 hover:text-purple-800 mr-4" href="../welcome.php">Welcome</a>

    <a class="text-red-600 hover:text-red-700" href="../users/show.php?id=<?php if (isset($_SESSION['user_id'])) { 
        echo $_SESSION['user_id']; 
        } else { echo ""; } ?>">

        <?php
            echo getAuthenticatedUserName();
        ?>
    </a>
</div>
