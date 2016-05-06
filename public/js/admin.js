Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector("#token").getAttribute('value');
new Vue({
	// Atributos
	el: 'body', // ambiente de trabajo de Vue
	data: {
		cardIdioma: false,
		newIdioma: "",
		idiomas: []
	},
	// Metodos
	ready: function() {
		this.getIdiomas();
	},
	methods:{
		getIdiomas: function(){
			this.$http.get('/administrador/libros/create/idiomas').then(function(response){
				this.$set('idiomas', response.data);
			});
		},
		agregarIdioma: function(){
			this.cardIdioma = !this.cardIdioma;
		},
		storeIdioma: function(){
			// peticion AJAX	
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
			});
		}
	}
});