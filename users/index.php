<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$result = $mysql->query("select * from users;");

?>


<h2 class="text-center text-blue-600 text-xl italic">User table with all information from the database</h2>

<table class="mx-auto">
    <tr class="text-xl bg-orange-200 border">
        <th class="border px-4 py-4 font-bold">Id</th>
        <th class="border px-4 py-4 font-bold">Name</th>
        <th class="border px-4 py-4 font-bold">Username</th>
        <th class="border px-4 py-4 font-bold" <?php
                                                if (!($_SESSION['is_admin_logged'] == 1)) {
                                                    echo 'style="visibility:collapse;"';
                                                }
                                                ?>>
            Password
        </th>
        <th class="border px-4 py-4 font-bold" <?php
                                                if (!($_SESSION['is_admin_logged'] == 1)) {
                                                    echo 'style="visibility:collapse;"';
                                                }
                                                ?>>
            User role
        </th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) {
    ?>

        <tr class="text-xl">
            <td class="border px-4 py-4"><?php echo $row['id']; ?></td>
            <td class="border px-4 py-4">
                <a class="hover:text-blue-600 underline" href="show.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </a>
            </td>
            <td class="border px-4 py-4"><?php echo $row['username']; ?></td>
            <td class="border px-4 py-4" <?php echo hideColumnFromTable(); ?>>
                <?php
                if (($_SESSION['is_admin_logged'] == 1)) {
                    echo $row['password'];
                }
                ?>
            </td>
            <td class="border px-4 py-4" <?php echo hideColumnFromTable(); ?>>
                <?php
                if (($_SESSION['is_admin_logged'] == 1)) {
                    echo $privilege = $row['user_privilege'] ? "administrator" : "guest";
                }
                ?>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

<?php
include "../includes/footer.php";
