<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Super formulaire</title>
</head>



<body>

    <form action="/thanks.php" method="post" class="container bg-light border rounded div-5">
        <h1 class="text-center">Formulaire</h1>

        <p class="row">
            <label for="name" class="form-label">Nom : </label>
            <input type="text" name="name" id="user_name" class="form-control" required>
        </p>

        <p class="row">
            <label for="firstname" class="form-label">Prénom : </label>
            <input type="text" name="firstname" id="user_firstname" class="form-control" required>
        </p>

        <p class="row">
            <label for="email" class="form-label">Votre email : </label>
            <input type="email" name="email" id="user_email" class="form-control" required>
        </p>

        <p class="row">
            <label for="phone" class="form-label">Téléphone : </label>
            <input type="phone" name="phone" id="user_phone" class="form-control" required>
        </p>

        <p>
            <label for="subject-select">Sujet : </label>

            <select name="subjects" id="subject-select">
                <option value="">Veuillez choisir une option</option>
                <option value="Php">PHP</option>
                <option value="Javascript">Javascript</option>
                <option value="Html">HTML</option>
                <option value="Css">CSS</option>
                <option value="Sql">SQL</option>
                <option value="Nocode">Nocode</option>
            </select>
        </p>


        <p class="row">
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>


</body>

</html>