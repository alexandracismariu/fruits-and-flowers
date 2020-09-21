<?php

include "../includes/header.php";

allowOnlyAdminUsers();



if (isset($_POST['name']) && isset($_POST['color']) && isset($_POST['health_characteristics']) && isset($_POST['taste'])) {

    $dangerous = isset($_POST['dangerous']) ? 1 : 0;
    $peel = isset($_POST['peel']) ? 1 : 0;

    $sql = "insert into fruits (name, color, health_characteristics, dangerous, peel, taste) values ('" . $_POST['name'] . "', '" . $_POST['color'] . "', '" . $_POST['health_characteristics'] . "', '" . $dangerous . "', '" . $peel . "', '" . $_POST['taste'] . "')";
    $result = $mysql->query($sql);
}

?>


<div class="w-full max-w-md mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/fruits/create.php" method="POST">

        <div class="mb-6">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="orange" name="name">
        </div>

        <div class="mb-6">
            <label class="block text-lg font-bold mb-2" for="color">
                Color
            </label>
            <select class="shadow border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color">
                <option value="color-select">Please select the color</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="pink">Pink</option>
                <option value="purple">Purple</option>
                <option value="gray">Gray</option>
                <option value="yellow">Yellow</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="orange">Orange</option>
                <option value="brown">Brown</option>
                <option value="silver">Silver</option>
                <option value="gold">Gold</option>
            </select>
        </div>

        <div>
            <label class="text-lg font-bold" for="health_characteristics">Health characteristics:</label>
            <textarea class="mt-3 ext-lg shadow border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="health_characteristics" name="health_characteristics" rows="3" cols="40"></textarea>
        </div>

        <div class="mb-6 text-lg">
            <p class="text-lg font-bold">Comestible or toxic fruits</p>
            <input type="checkbox" id="dangerous" name="dangerous">
            <label for="dangerous"> It is dangerous to eat</label><br>
            <br>
            <p class="text-lg font-bold">Eat the peel or not</p>
            <input type="checkbox" id="peel" name="peel">
            <label for="peel">Should peel the fruits</label><br>
        </div>

        <div class="mb-6 text-lg">
            <p class="text-lg font-bold">Tastes of fruits:</p>

            <input type="radio" id="taste" name="taste" value="sweet">
            <label for="taste">Sweet</label><br>

            <input type="radio" id="taste" name="taste" value="sweet and sour">
            <label for="taste">Sweet and sour</label><br>

            <input type="radio" id="taste" name="taste" value="sour">
            <label for="taste">Sour</label><br>

            <input type="radio" id="taste" name="taste" value="bitter">
            <label for="taste">Bitter</label><br>
        </div>

        <button class="border-2 border-green-500 bg-orange-500 text-white text-lg py-2 px-5 mt-4">Add me!</button>

    </form>
</div>

<?php
include "../includes/footer.php";
