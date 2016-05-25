Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("#token").getAttribute('value');
new Vue({
	// Atributos
	el: 'body', // ambiente de trabajo de Vue
	data: { 
		cardIdioma: false,
		cardAutor: false,
		cardEditorial: false,
		idiomas: [],
		autores: [],
		editoriales: [],
		id_idioma: "",
		id_editorial: "",
		id_Autores: []
	},
	// Metodos
	ready: function() {
		this.getIdiomas();
		this.getAutores();
		this.getEditoriales();
	},
	methods:{
		// Métodos de idioma
		getIdiomas: function(){
			this.$http.get('/administrador/libros/create/idiomas').then(function(response){
				this.$set('idiomas', response.data);
			});
		},
		agregarIdioma: function(){
			this.cardAutor = false;
			this.cardEditorial = false;
			this.cardIdioma = !this.cardIdioma;
		},
		storeIdioma: function(){
			this.$http.post('/administrador/libros/create/storeIdioma', {'nombre': this.newIdioma}).then(function(response){
				this.idiomas.push(response.data);
				Materialize.toast('Idioma agregado correctamente', 3500)
				this.newIdioma = "";
			},function(error) {
				Materialize.toast('Ingresa un idioma válido!!', 3500)
				this.newIdioma = "";
			});
		},
		removeIdioma: function(idioma){
			this.$http.post('/administrador/libros/create/deleteIdioma', {'id_Idioma': idioma.id_Idioma}).then(function(response){
				this.idiomas.$remove(idioma);
				Materialize.toast('El idioma ha sido borrado', 3500)
			}, function(error){
				Materialize.toast('Algunos libros estan en este idioma, no es posible eliminar!!', 3500);
			});
		},
		// Métodos de autores
		getAutores: function(){
			this.$http.get('/administrador/libros/create/autores').then(function(response){
				this.$set('autores', response.data);
			});
		},
		agregarAutor: function(){
			this.cardIdioma = false;
			this.cardEditorial = false;
			this.cardAutor = !this.cardAutor;
		},
		storeAutor: function(){
			this.$http.post('/administrador/libros/create/storeAutor', {'Nombre': this.newAutor}).then(function(response){
				this.autores.push(response.data);
				Materialize.toast('Autor agregado correctamente', 3500)
				this.newAutor = "";
			},function(error) {
				Materialize.toast('Ingresa un nombre de autor válido!!', 3500)
				this.newAutor = "";
			});
		},
		removeAutor: function(autor){
			this.$http.post('/administrador/libros/create/deleteAutor', {'idAutor': autor.idAutor}).then(function(response){
				this.autores.$remove(autor);
				Materialize.toast('El autor ha sido borrado', 3500);
			}, function(error) {
				Materialize.toast('Algunos libros son de este autor, no es posible eliminarlo!!', 3500);
			});
		},
		// Métodos de editoriales
		getEditoriales: function(){
			this.$http.get('/administrador/libros/create/editoriales').then(function(response){
				this.$set('editoriales', response.data);
			});
		},
		agregarEditorial: function() {
			this.cardAutor = false;
			this.cardIdioma = false;
			this.cardEditorial = !this.cardEditorial;
		},
		storeEditorial: function(){
			this.$http.post('/administrador/libros/create/storeEditorial', {'nombre': this.newEditorial}).then(function(response){
				this.editoriales.push(response.data);
				Materialize.toast('Editorial agregada correctamente', 3500)
				this.newEditorial = "";
			},function(error) {
				Materialize.toast('Ingresa un nombre de editorial válido!!', 3500)
				this.newEditorial = "";
			});
		},
		removeEditorial: function(editorial){
			this.$http.post('/administrador/libros/create/deleteEditorial', {'id_editorial': editorial.id_editorial}).then(function(response){
				this.editoriales.$remove(editorial);
				Materialize.toast('La editorial ha sido borrada', 3500);
			}, function(error) {
				Materialize.toast('La editorial aun tiene libros publicados, no es posible eliminarla!!', 3500);
			});
		},
		autorLibro: function(autor, i){
			var autor_checked = document.getElementById("autor"+i).checked;
			if(autor_checked){
				this.id_Autores.push(autor);
			} else {
				this.id_Autores.$remove(autor);
			}
		}
	}
});