@unless(isset($noFooter))
	<footer>
		<div class="row rowFix">
			<div class="logo">
				<a href="#inicio" class="terminosLink">
					<h1>
						Click <span class="cpgPass">Pass </span>Goal
					</h1>
				</a>

			</div>
			<div class="copy">
				<h5>Copyright 2013-{{date("Y")}} . www.clickpassgoal.com - Todos los derechos reservados</h5>
				<a href="{{url('terminis-y-condiciones')}}" class="terminosLink">
					<h5>Ver terminos y condiciones de uso </h5>
				</a>
			</div>
		</div>
	</footer>
@endunless