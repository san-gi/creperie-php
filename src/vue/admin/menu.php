<div class="album py-5 bg-dark">


        <div class="row ">
            <div class="col-md-auto bg-primary">
                <ul>
                    <li><a href="/admin/crepes" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crepes</a></br></li>
                    <li><a href="/admin/user" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Users</a></br></li>
                    <li><a href="/admin/commandes" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Commandes</a></br></li>
                    <li><a href="/admin/ingredients_crepe" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">IngCrepe</a></br></li>
                    <li><a href="/admin/facture" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Facture</a></br></li>
                    <li> <a href="/admin/ingredients" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ingrédients</a></li>
                </ul>

            </div>
            <div class="col">
                <?= $this->table ?>
            </div>
        </div>



</div>