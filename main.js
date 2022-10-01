
const app = Vue.createApp({
	
	data() {
		return {
			surfers : [
					{
						id		: 1,
						name	:'Italo Ferreira',
						image	:'img/ferreira.jpg',
						description	:'Ítalo Ferreira is a Brazilian professional surfer hailing from a small community of Baía Formosa. ',
						score	: 0,
						inCompetition : true,
						comment : '' 
					},
					{
						id		: 2,
						name	:'Kelly Slater',
						image	:'img/slater.jpg',
						description	:'Kelly Slater  is an American professional surfer, best known for being crowned World Surf League champion.',
						score	: 0,
						inCompetition : true,
						comment : ''
					},
					{
						id		: 3,
						name	:'Gabriel Medina',
						image	:'img/medina.jpg',
						description	:'Gabriel Medina Pinto Ferreira is a Brazilian professional surfer who won the 2014, 2018 and 2021 WSL World Championships.',
						score	: 0,
						inCompetition : false,
						comment : ''
					}
				]
		}
	},

	methods: {
		setScore(id) {
			this.surfers[id-1].score++
		}
	}
})