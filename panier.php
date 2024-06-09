<?php
session_start(); // Démarrage de la session pour accéder au panier

include './menu.html';

// Supprimer un élément du panier s'il est spécifié dans l'URL
if (isset($_GET['key']) && isset($_SESSION['panier'])) {
    $key = $_GET['key'];
    if (isset($_SESSION['panier'][$key])) {
        unset($_SESSION['panier'][$key]);
    }
}

// Modifier la quantité d'un élément dans le panier
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['panier'])) {
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'quantity_') !== false) {
            $itemKey = str_replace('quantity_', '', $key);
            $newQuantity = intval($value); // Convertir en entier pour éviter les problèmes
            if (isset($_SESSION['panier'][$itemKey])) {
                $_SESSION['panier'][$itemKey] = $newQuantity; // Définir la nouvelle quantité
            }
        }
    }
}

// Ajouter des éléments au panier s'ils sont spécifiés dans l'URL
if (isset($_GET['item'])) {
    $item = $_GET['item'];

    // Vérifier si le produit est déjà dans le panier
    if (!isset($_SESSION['panier'][$item])) {
        $_SESSION['panier'][$item] = 1; // Ajouter le produit avec une quantité de 1
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
<div class=" py-5" style="padding-left : 80px">


<h1 class="fw-bold ">Your Basket</h1>

<form method="post">
    <table style="margin-top: 30px; margin-bottom:30px" class="py-5">
        <tr>
            <th>Image</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        <?php
        // Vérifiez si des éléments sont présents dans le panier
        if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) {
            // Affichez chaque élément du panier avec des options pour modifier la quantité et supprimer
            foreach ($_SESSION['panier'] as $key => $quantity) {
                // Utilisez la clé comme nom de produit
                $item = $key;
                echo "<tr>";
                echo "<td><img src='./products/$item.png'></td>";
                echo "<td>$item</td>";
                echo "<td><select name='quantity_$key' onchange='this.form.submit();'>";
                for ($i = 1; $i <= 100; $i++) {
                    if ($i == $quantity) {
                        echo "<option value='$i' selected>$i</option>";
                    } else {
                        echo "<option value='$i'>$i</option>";
                    }
                }
                echo "</select></td>";
                echo "<td><a href='panier.php?key=$key' class='btn btn-outline-danger'>Supprimer</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No items found.</td></tr>";
        }
        ?>
    </table>

    <!-- Lien pour continuer les achats -->
    <div class="py-3">
        <a class="btn btn-secondary" href="products.php">Continue Shopping</a>
        <?php if (isset($_SESSION['panier']) && count($_SESSION['panier']) > 0) : ?>
            <a class="btn btn-primary" href="paiement.php">Proceed to checkout</a>
        <?php endif; ?>
    </div></form>
</div>
<?php include './footer.html'; ?>
