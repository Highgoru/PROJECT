<?php include('layouts/header.php'); ?>

<div class="container mt-5">
    <h1 style="color: red;">Hora de descobrir seu Signo e qual Cavaleiro voce seria.</h1>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Informe sua data de nascimento</label> <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <div class="text-center">
    <button type="submit" class="btn" style="background-color: #ffe109; color: black; border-radius: 25px;">Ver meu signo</button>
</div>

    </form>
</div>

<?php include('layouts/footer.php'); ?>
