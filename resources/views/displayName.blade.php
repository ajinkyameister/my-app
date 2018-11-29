	<ul>
			
			<li  v-for="displayName in displayNames" v-if="displayName.length>1" v-text="displayName"></li>
			<!-- @{{displayName}} -->
		</ul>