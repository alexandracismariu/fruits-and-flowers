<?php
include "../includes/header.php";

allowOnlyAdminUsers();

if (isset($_POST['submit'])) {
    $dangerous  = isset($_POST['dangerous']) ? 1 : 0;
    $flower_tea = isset($_POST['flower_tea']) ? 1 : 0;
    // $soil_needs = isset($_POST['soil_needs']) ? $_POST['soil_needs'] : "varied";

    $sql = "update flowers set name = '" . $_POST['name'] . "', color = '" . $_POST['color'] . "', type = '" . $_POST['type'] . "', dangerous = '" . $dangerous . "', flower_tea = '" . $flower_tea . "', soil_needs = '" . $_POST['soil_needs'] . "' where id = " . $_GET['id'];

    $result = $mysql->query($sql);
}

$row = getElementFromTable("flowers", $_GET['id']);

?>

<h1 class="text-2xl font-bold text-purple-400 my-8 text-center">Update a flower!</h1>

<div class="w-full max-w-sm mx-auto">
    <form class="bg-white text-lg shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/flowers/update.php?id=<?php echo $_GET['id'] ?>" method="POST">

        <div class="mb-4">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="id">
                Id
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id" type="text" placeholder="1" name="id" value="<?php echo $row['id']; ?>" disabled>
        </div>

        <div class="mb-4">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="lavender" name="name" value="<?php echo $row['name']; ?>">
        </div>

        <div class="mb-4 text-lg">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="color">Choose a color:</label>
            <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="color" id="color">
                <option value="select the color">Please, select the color</option>
                <option value="black" <?php if ($row['color'] == "black") {
                                            echo "selected";
                                        } ?>>black</option>
                <option value="brown" <?php if ($row['color'] == "brown") {
                                            echo "selected";
                                        } ?>>brown</option>
                <option value="gray" <?php if ($row['color'] == "gray") {
                                            echo "selected";
                                        } ?>>gray</option>
                <option value="white" <?php if ($row['color'] == "white") {
                                            echo "selected";
                                        } ?>>white</option>
                <option value="yellow" <?php if ($row['color'] == "yellow") {
                                            echo "selected";
                                        } ?>>yellow</option>
                <option value="orange" <?php if ($row['color'] == "orange") {
                                            echo "selected";
                                        } ?>>orange</option>
                <option value="red" <?php if ($row['color'] == "red") {
                                        echo "selected";
                                    } ?>>red</option>
                <option value="pink" <?php if ($row['color'] == "pink") {
                                            echo "selected";
                                        } ?>>pink</option>
                <option value="purple" <?php if ($row['color'] == "purple") {
                                            echo "selected";
                                        } ?>>purple</option>
                <option value="blue" <?php if ($row['color'] == "blue") {
                                            echo "selected";
                                        } ?>>blue</option>
                <option value="green" <?php if ($row['color'] == "green") {
                                            echo "selected";
                                        } ?>>green</option>
                <option value="rainbow" <?php if ($row['color'] == "rainbow") {
                                            echo "selected";
                                        } ?>>rainbow</option>
                <option value="gold" <?php if ($row['color'] == "gold") {
                                            echo "selected";
                                        } ?>>gold</option>
                <option value="silver" <?php if ($row['color'] == "silver") {
                                            echo "selected";
                                        } ?>>silver</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="text-lg block text-gray-700 text-sm font-bold mb-2" for="type">
                About folwer:
            </label>
            <textarea id="type" name="type" rows="3" cols="30" name="type"><?php echo $row['type']; ?></textarea>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Poisonous flower:</p>
        <div class="mb-3">
            <input type="checkbox" id="dangerous" name="dangerous" <?php echo $row['dangerous'] == 1 ? "checked" : ''; ?>>
            <label for="dangerous"> It is dangerous</label><br>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Flower Tea:</p>
        <div class="mb-3">
            <input type="checkbox" id="flower_tea" name="flower_tea" <?php echo $row['flower_tea'] == 1 ? "checked" : ''; ?>>
            <label for="flower_tea">Good for drinking</label><br>
        </div>

        <p class="text-lg block text-gray-700 text-sm font-bold mb-2">Soil needs:</p>
        <div class="mb-5">
            <input type="radio" id="high-fertility" name="soil_needs" value="high fertility" <?php echo $row['soil_needs'] == "high fertility" ? "checked" : ''; ?>>
            <label for="high-fertility">high fertility</label><br>
            <input type="radio" id="well-drained" name="soil_needs" value="well drained" <?php echo $row['soil_needs'] == "well drained" ? "checked" : ''; ?>>
            <label for="well-drained">well drained</label><br>
            <input type="radio" id="damp" name="soil_needs" value="damp" <?php echo $row['soil_needs'] == "well drained" ? "checked" : ''; ?>>
            <label for="damp">damp</label>
        </div>

        <button class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 
            rounded focus:outline-none focus:shadow-outline" 
            type="submit"
            name="submit"
            value="update"
        >
            Edit flower!
        </button>
    </form>
</div>

<?php
include "../includes/footer.php";
