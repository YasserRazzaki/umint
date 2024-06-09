<?php
session_start(); 
include './menu.html';

// Récupérer les éléments sélectionnés depuis la session
$items = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];

// Initialiser une variable pour vérifier si l'adresse e-mail est valide
$emailValid = false;
?>

<div class="py-5" style="padding-left : 80px">

<h1 style="margin-bottom : 30px;" class="fw-bold ">Payment</h1>

<form method="post">
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
<form method="post">
<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required><style> #email {width : 30%!important} </style>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <br><br>
 

    <!-- Affichage des éléments à payer -->
    <h3 class="fw-bold">Selected articles :</h3>
    <table style="margin-top: 30px; margin-bottom:30px" class="py-5">
        <tr>
            <th>Image</th>
            <th>Item</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($items as $key => $quantity) :
             $item = $key;
            echo "<tr>";
            echo "<td><img src='./products/$item.png' width='50' height='50'></td>";
            echo "<td>$item</td>";
            echo "<td>$quantity</td>";
            echo "</tr>";
        endforeach; ?>
    </table>

    <!-- Bouton pour effectuer le paiement -->
 
    <button type="submit" class="btn btn-success mx-3" actio>Validate the payment</button>
    <a class="btn btn-outline-secondary" href="./panier.php">Back to basket</a>
</div></form>
</div>
<?php include './footer.html'; ?>
<!-- Votre HTML existant -->

    <!-- Scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    function validateForm() {
        var email = document.getElementById('email').value;

        if (email.trim() === '' || !validateEmail(email)) {
            alert('Please enter a valid email address');
            return false; // Empêcher l'envoi du formulaire si l'adresse e-mail est invalide ou vide
        } else {
            return true; // Envoyer le formulaire si l'adresse e-mail est valide
        }
    }

    function validateEmail(email) {
        // Logique de validation d'adresse e-mail
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
    </script>

    <!-- Script PHP pour le traitement du formulaire -->
    <?php

    // Si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $items = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];

        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Si l'adresse e-mail est valide et le formulaire est soumis
            // Effectuez le traitement du paiement et autres opérations nécessaires
            // Une fois le paiement traité avec succès, réinitialisez le panier
            unset($_SESSION['panier']);

            // Affiche une alerte SweetAlert2
            echo "<script>
                    Swal.fire({
                        title: 'Payment Received!',
                        text: 'Thank you for your payment.',
                        icon: 'success'
                    }).then(() => {
                        window.location.href = './index.php'; // Redirige vers la page d'accueil
                    });
                  </script>";
        } else {
            // Si l'adresse e-mail est invalide ou vide, gérez l'erreur
            echo "<script>
                    Swal.fire({
                        title: 'Invalid Email!',
                        text: 'Please enter a valid email address.',
                        icon: 'error'
                    });
                  </script>";
        }
    }
    ?>
</body>
</html>
