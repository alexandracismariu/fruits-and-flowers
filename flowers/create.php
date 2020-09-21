<?php
include "../includes/header.php";

allowOnlyAdminUsers();


if (isset($_POST['submit'])) {

    $dangerous  = isset($_POST['dangerous']) ? 1 : 0;
    $flower_tea = isset($_POST['flower_tea']) ? 1 : 0;

    $sql = "insert into flowers (name, color, type, dangerous, flower_tea, soil_needs) values('" . $_POST['name'] . "', '" . $_POST['color'] . "', '" . $_POST['type'] . "', '" . $dangerous . "', '" . $flower_tea . "', '" . $_POST['soil_needs'] . "')";
    // dd($sql);

    $result = $mysql->query($sql);
}

?>


<h1 class="text-2xl font-bold text-purple-400 my-8 text-center">Insert a flower!</h1>

<div class="w-full max-w-sm mx-auto">
    <form class="bg-white text-lg shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/flowers/create.php" method="POST">

        <div class="mb-4">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="lavender" name="name">
        </div>

        <div class="mb-4 text-lg">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="color">Choose a color:</label>
            <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color">
                <option value="select the color">Please, select the color</option>
                <option value="black">black</option>
                <option value="brown">brown</option>
                <option value="gray">gray</option>
                <option value="white">white</option>
                <option value="yellow">yellow</option>
                <option value="orange">orange</option>
                <option value="red">red</option>
                <option value="pink">pink</option>
                <option value="purple">purple</option>
                <option value="blue">blue</option>
                <option value="green">green</option>
                <option value="rainbow">rainbow</option>
                <option value="gold">gold</option>
                <option value="silver">silver</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="type">
                About folwer:
            </label>
            <textarea class="mt-3 shadow border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="type" name="type" rows="3" cols="30" name="type"></textarea>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Poisonous flower:</p>
        <div class="mb-3">
            <input type="checkbox" id="dangerous" name="dangerous">
            <label for="dangerous"> It is dangerous</label><br>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Flower Tea:</p>
        <div class="mb-3">
            <input type="checkbox" id="flower_tea" name="flower_tea">
            <label for="flower_tea">Good for drinking</label><br>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Soil needs:</p>
        <div class="mb-5">
            <input type="radio" id="high-fertility" name="soil_needs" value="high fertility">
            <label for="high-fertility">high fertility</label><br>
            <input type="radio" id="well-drained" name="soil_needs" value="well drained">
            <label for="well-drained">well drained</label><br>
            <input type="radio" id="damp" name="soil_needs" value="damp">
            <label for="damp">damp</label>
        </div>


        <button 
            class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 
            rounded focus:outline-none focus:shadow-outline" 
            type="submit"
            name="submit"
            value="create"
        >
            Add flower!
        </button>
    </form>
</div>

<?php
include "../includes/footer.php";

