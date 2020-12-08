<div class="container">
    <h2>Bonjour <?= $_SESSION["user"] ?></h2>
    <hr>
    <h3>Votre panier :</h3>
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white">
                <th scope="col">Référence</th>
                <th scope="col">Désignation</th>
                <th scope="col">Qté</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Prix total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, esse.</td>
                <td>1</td>
                <td>10.90</td>
                <td>10.90</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Fuga omnis exercitationem soluta optio architecto quos tenetur?</td>
                <td>1</td>
                <td>15.40</td>
                <td>15.40</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Iste vitae exercitationem magnam non! Sapiente molestias dolor aliquid. </td>
                <td>2</td>
                <td>8.40</td>
                <td>16.80</td>
            </tr>
        </tbody>
    </table>
</div>