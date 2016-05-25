<div class="card-panel" v-if="cardIdioma">
	<center>
		<label>ESCRIBE EL IDIOMA</label> <br>
		<label>Da enter para guardar</label>
	</center>
	<div class="row">
        <div class="input-field col s12">
          	<input type="text" class="validate" v-model="newIdioma" v-on:keyup.enter="storeIdioma">
        </div>
    </div>
</div>
<div class="card-panel" v-if="cardAutor">
	<center>
		<label>ESCRIBE UN NUEVO AUTOR</label> <br>
		<label>Da enter para guardar</label>
	</center>
	<div class="row">
        <div class="input-field col s12">
          	<input type="text" class="validate" v-model="newAutor" v-on:keyup.enter="storeAutor">
        </div>
    </div>
</div>
<div class="card-panel" v-if="cardEditorial">
	<center>
		<label>ESCRIBE UNA NUEVA EDITORIAL</label> <br>
		<label>Da enter para guardar</label>
	</center>
	<div class="row">
        <div class="input-field col s12">
          	<input type="text" class="validate" v-model="newEditorial" v-on:keyup.enter="storeEditorial">
        </div>
    </div>
</div>