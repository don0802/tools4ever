<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register account</title>

    <style>
        label {
            width: 140px;
            display: inline-block;
        }

        .form-group {
            margin: 10px 0px;
        }
    </style>
</head>

<body>
    <h1>Register account</h1>
    <form action="user_create_process.php" method="POST">

        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" placeholder="171745">
        </div>
        <div class="form-group">
            <label for="firstname">Voornaam</label>
            <input type="text" name="voornaam" id="firstname" placeholder="Don">
        </div>
        <div class="form-group">
            <label for="lastname">Achternaam</label>
            <input type="text" name="achternaam" id="lastname" placeholder="Diouami">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="salami@novacollege.nl">
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="123456">
        </div>
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" name="adres" id="address" placeholder="Vrouw Vennweg 17">
        </div>
        <div class="form-group">
            <label for="city">Stad</label>
            <input type="text" name="stad" id="city" placeholder="Amsterdam">
        </div>
        <div class="form-group">
            <label for="is_active">Actief</label>
            <input type="checkbox" name="is_active" id="is_active">
        </div>
        <div class="form-group">
            <label for="role">Rol</label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="employee">Werknemer</option>
            </select>
        </div>

        <button type="submit">Maak account</button>


    </form>
</body>

</html>