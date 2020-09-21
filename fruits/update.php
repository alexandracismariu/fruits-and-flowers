<?php
include "../includes/header.php";

allowOnlyAdminUsers();

if (isset($_POST['name']) && isset($_POST['color']) && isset($_POST['health_characteristics']) && isset($_POST['taste'])) {

    $dangerous = isset($_POST['dangerous']) ? 1 : 0;
    $peel      = isset($_POST['peel']) ? 1 : 0;
    // $taste     = isset($_POST['taste']) ? 1: 0;

    $sql = "update fruits set name = '" . $_POST['name'] . "', color = '" . $_POST['color'] . "', health_characteristics = '" . $_POST['health_characteristics'] . "', dangerous = '" . $dangerous . "', peel = '" . $peel . "', taste = '" . $_POST['taste'] . "' where id = " . $_GET['id'];

    $result = $mysql->query($sql);
}

$row = getElementFromTable("fruits", $_GET['id']);

?>

<div class="w-full max-w-md mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/fruits/update.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-6">
            <label class=" block text-gray-700 text-sm font-bold mb-2" for="id">
                Id
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id" type="number" placeholder="Id" name="id" value="<?php echo $row['id']; ?>" disabled>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-lg font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="orange" name="name" value="<?php echo $row['name']; ?>">
        </div>

        <div class="mb-6">
            <label class="block text-lg font-bold mb-2" for="color">
                Color
            </label>
            <select class="shadow border border-red-500 rounded w-full py-3 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color">
                <option value="color-select">Please select the color</option>
                <option value="red" <?php if ($row['color'] == "red") echo 'selected'; ?>>red</option>
                <option value="blue" <?php if ($row['color'] == "blue") echo 'selected'; ?>>blue</option>
                <option value="green" <?php if ($row['color'] == "green") echo 'selected'; ?>>green</option>
                <option value="pink" <?php if ($row['color'] == "pink") echo 'selected'; ?>>pink</option>
                <option value="purple" <?php if ($row['color'] == "purple") echo 'selected'; ?>>purple</option>
                <option value="gray" <?php if ($row['color'] == "gray") echo 'selected'; ?>>gray</option>
                <option value="yellow" <?php if ($row['color'] == "yellow") echo 'selected'; ?>>yellow</option>
                <option value="black" <?php if ($row['color'] == "black<") echo 'selected'; ?>>black</option>
                <option value="white" <?php if ($row['color'] == "white") echo 'selected'; ?>>white</option>
                <option value="orange" <?php if ($row['color'] == "orange") echo 'selected'; ?>>orange</option>
                <option value="brown" <?php if ($row['color'] == "brown") echo 'selected'; ?>>brown</option>
                <option value="silver" <?php if ($row['color'] == "silver") echo 'selected'; ?>>silver</option>
                <option value="gold" <?php if ($row['color'] == "gold") echo 'selected'; ?>>gold</option>
            </select>
        </div>

        <div>
            <label class="text-lg font-bold" for="health_characteristics">Health characteristics:</label>
            <textarea class="text-lg" id="health_characteristics" name="health_characteristics" rows="3" cols="40"><?php echo $row['health_characteristics']; ?></textarea>
        </div>

        <div class="mb-6 text-lg">
            <p class="text-lg font-bold">Comestible or toxic fruits</p>
            <input type="checkbox" id="dangerous" name="dangerous" <?php echo $check_value = $row['dangerous'] ? 'checked' : ''; ?>>
            <label for="dangerous"> It is dangerous to eat</label><br>
            <br>
            <p class="text-lg font-bold">Eat the peel or not</p>
            <input type="checkbox" id="peel" name="peel" <?php echo $check_value = $row['peel'] ? 'checked' : ''; ?>>
            <label for="peel">Should peel the fruits</label><br>
        </div>

        <div class="mb-6 text-lg">
            <p class="text-lg font-bold">Tastes of fruits:</p>

            <input type="radio" id="taste" name="taste" value="sweet" <?php echo ($row['taste'] == 'sweet' ? 'checked' : ''); ?>>
            <label for="taste">Sweet</label><br>

            <input type="radio" id="taste" name="taste" value="sweet and sour" <?php echo ($row['taste'] == 'sweet an sour' ? 'checked' : ''); ?>>
            <label for="taste">Sweet and sour</label><br>

            <input type="radio" id="taste" name="taste" value="sour" <?php echo ($row['taste'] == 'sour' ? 'checked' : ''); ?>>
            <label for="taste">Sour</label><br>

            <input type="radio" id="taste" name="taste" value="bitter" <?php echo ($row['taste'] == 'bitter' ? 'checked' : ''); ?>>
            <label for="taste">Bitter</label><br>
        </div>

        <button class="border-2 border-orange-500 bg-green-500 text-white text-lg py-2 px-5 mt-4">Edit me!</button>

    </form>
</div>

<?php
include "../includes/footer.php";
