<?php

require_once "../autoload.php";
require_once "../src/bones/header.php";

?>
    <div class="row">
        <div class="col">
            <h1 class="text-center">Eventos</h1>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="col">
            <div class="form-group row">
                <label for="searchBar" class="col-2 col-form-label">Busca: </label>
                <div class="col-10">
                    <input type="password" class="form-control" id="searchBar" placeholder="Insira sua Busca">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Período</th>
                    <th scope="col">Ano</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">SECITEX</td>
                    <td>XX/XX a XX/XX</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td scope="row">EXPOTEC</td>
                    <td>XX/XX a XX/XX</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td scope="row">SITADS</td>
                    <td>XX/XX a XX/XX</td>
                    <td>2019</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php

require_once "../src/bones/footer.php";

?>