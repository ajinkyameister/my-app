<template>
	<div>
		<div>
			<slot> </slot>
		</div>
		<div>

			<li v-for="reseller in resellers" v-text="reseller"> </li>
		</div>
		<a class="button is-link is-rounded" @click="openModal()">Rounded</a>
		
		<div id="modal"class="modal is-active" v-if="showModal">
			<div class="modal-background"></div>
			<div class="modal-card">
				<header class="modal-card-head">
					<p class="modal-card-title">Modal title</p>
					<button class="delete" aria-label="close" @click="closeModal()"></button>

				</header>
				<section class="modal-card-body">

					<form method="POST" action="/resellers" @submit="formSubmit">


    					<input type="hidden" name="_token" :value="csrf">
	

						<label> Name:</label>
						<input id="name"type="text" name="name"  v-model="name"> <br> <br>

						<label> Phone Number:</label>
						<input id="phoneNumber"type="integer" name="phone_number" v-model="phone_number"> <br> <br>

						<label> Address:</label>
						<input id="address"type="text" name="address"  v-model="address"> <br> <br>

						<label> Pan Card Details:</label>
						<input id="panCard"type="text" name="pan_card"  v-model="pan_card"> <br> <br>

						<footer class="modal-card-foot">
							<button type="submit" class="button is-success" >Save changes</button>
							<button class="button" @click="closeModal()">Cancel</button>
						</footer>

					</form>	
				</section>	
			</div>

		</div>

			</div>
</template>


<script >

	
	
	export default{

		props:{

			listReseller:{

				type:Object,

			},

		},

		data:function(){
				return {
					showModal:false,
					'name':"",
					'phone_number':"",
					'address':"",
					'pan_card':"",
					'resellers':[],

            		csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        		}
				
			},


		mounted(){

			console.log('My Reseller component is mounted after great deal of effort');
		},

		methods:{

			formSubmit(){

					axios.post('/resellers',{

						'name':this.name,
						'phone_number':this.phone_number,
						'address':this.address,
						'pan_card':this.pan_card

					});
					this.listResellers(this.name);

					this.closeModal();

					

			},

			closeModal(){

				this.showModal=false;
				
			},
			
			openModal(){

				this.showModal=true;

			},
				listResellers(resellerName){

				 this.resellers.push = resellerName;
				

			},


		}

		

		

	}

</script>
