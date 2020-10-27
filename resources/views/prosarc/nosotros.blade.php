@extends('layouts.app', ['page' => __('Nosotros'), 'pageSlug' => 'nosotros'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Nosotros
@endsection

@section('content')
	<div class="container">
		<div class="row h-auto">
			<div class="mb-md-4 mb-2 col"></div>
			<div class="mb-md-4 mb-2 col-md-10 text-center" style="">
				{{-- <img src="" class="responsive imagen-prosarc" width="600" height="400"> --}}
				<img src="white/img/DJI_0123.jpg" class="img-fluid h-auto w-100 imagen-prosarc" alt="Responsive image">
			</div>
			<div class="mb-md-4 mb-2 col"></div>
		</div>
		<div class="row">
			<ul class="nav nav-pills mb-3 mt-3 flex-column flex-sm-row w-100" id="pills-tab" role="tablist">
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center" role="presentation">
				  <a class="nav-link active" id="pills-General-tab" data-toggle="pill" href="#pills-General" role="tab" aria-controls="pills-General" aria-selected="true">Generalidades</a>
				</li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center" role="presentation">
					<a class="nav-link" id="pills-PoliticasSG-tab" data-toggle="pill" href="#pills-PoliticasSG" role="tab" aria-controls="pills-PoliticasSG" aria-selected="false">Politicas SG</a>
				  </li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center" role="presentation">
				  <a class="nav-link" id="pills-Mision-tab" data-toggle="pill" href="#pills-Mision" role="tab" aria-controls="pills-Mision" aria-selected="false">Mision</a>
				</li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center" role="presentation">
				  <a class="nav-link" id="pills-Vision-tab" data-toggle="pill" href="#pills-Vision" role="tab" aria-controls="pills-Vision" aria-selected="false">Vision</a>
				</li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Objetivos</a>
					<div class="dropdown-menu nav-item w-100"  role="presentation">
						<a class="dropdown-item" id="pills-ObjetivoGeneral-tab" data-toggle="pill" href="#pills-ObjetivoGeneral" role="tab" aria-controls="pills-ObjetivoGeneral" aria-selected="false">OBJETIVOS GENERALES</a>
						<a class="dropdown-item" id="pills-Objetivo1-tab" data-toggle="pill" href="#pills-Objetivo1" role="tab" aria-controls="pills-Objetivo1" aria-selected="false">Objetivo 1</a>
						<a class="dropdown-item" id="pills-Objetivo2-tab" data-toggle="pill" href="#pills-Objetivo2" role="tab" aria-controls="pills-Objetivo2" aria-selected="false">Objetivo 2</a>
						<a class="dropdown-item" id="pills-Objetivo3-tab" data-toggle="pill" href="#pills-Objetivo3" role="tab" aria-controls="pills-Objetivo3" aria-selected="false">Objetivo 3</a>
					</div>
				</li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center" role="presentation">
					<a class="nav-link" id="pills-Mapa-tab" data-toggle="pill" href="#pills-Mapa" role="tab" aria-controls="pills-Mapa" aria-selected="false">Mapa de Procesos</a>
				</li>
				<li class="nav-item flex-sm-fill mx-1 my-1 text-sm-center dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Otras Politicas</a>
					<div class="dropdown-menu dropdown-menu-right nav-item"  role="presentation">
						<a class="dropdown-item" id="pills-Politica1-tab" data-toggle="pill" href="#pills-Politica1" role="tab" aria-controls="pills-Politica1" aria-selected="false">POLÍTICA DE ACCIONES <br> CORRECTIVAS Y PREVENTIVAS</a>
						<a class="dropdown-item" id="pills-Politica2-tab" data-toggle="pill" href="#pills-Politica2" role="tab" aria-controls="pills-Politica2" aria-selected="false">POLÍTICA DE COMPETENCIA,<br> JUICIO E INTEGRIDAD DEL PERSONAL</a>
						<a class="dropdown-item" id="pills-Politica3-tab" data-toggle="pill" href="#pills-Politica3" role="tab" aria-controls="pills-Politica3" aria-selected="false">POLÍTICA DE COMPRA DE <br> SERVICIOS Y SUMINISTRO</a>
						<a class="dropdown-item" id="pills-Politica4-tab" data-toggle="pill" href="#pills-Politica4" role="tab" aria-controls="pills-Politica4" aria-selected="false">POLÍTICA DE CONFLICTO DE INTERESES</a>
						<a class="dropdown-item" id="pills-Politica5-tab" data-toggle="pill" href="#pills-Politica5" role="tab" aria-controls="pills-Politica5" aria-selected="false">POLÍTICA DE INDEPENDENCIA <br> E IMPARCIALIDAD</a>
						<a class="dropdown-item" id="pills-Politica6-tab" data-toggle="pill" href="#pills-Politica6" role="tab" aria-controls="pills-Politica6" aria-selected="false">POLÍTICA DE QUEJAS Y RECLAMOS</a>
						<a class="dropdown-item" id="pills-Politica7-tab" data-toggle="pill" href="#pills-Politica7" role="tab" aria-controls="pills-Politica7" aria-selected="false">POLÍTICA DE REVISIÓN DE <br> PEDIDOS Y CONTRATOS</a>
						<a class="dropdown-item" id="pills-Politica8-tab" data-toggle="pill" href="#pills-Politica8" role="tab" aria-controls="pills-Politica8" aria-selected="false">POLÍTICA DE TRABAJO NO CONFORME</a>
						<a class="dropdown-item" id="pills-Politica9-tab" data-toggle="pill" href="#pills-Politica9" role="tab" aria-controls="pills-Politica9" aria-selected="false">POLÍTICAS DE CONFIDENCIALIDAD</a>
					</div>
				</li>
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active"  id="pills-General" role="tabpanel" aria-labelledby="pills-General-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">GENERALIDADES DE PROSARC S.A. ESP</h3>
							<p class="card-text text-justify" style="text-indent:2.5em">
								<b>PROTECCIÓN SERVICIOS AMBIENTALES RESPEL DE COLOMBIAN S.A ESP - PROSARC S.A. ESP</b> 
								, se constituyó a través de la Escritura Pública No. 000848 Notaria 34 de Bogotá D.C., del 24 de marzo de 2006, inscrita el 31 de marzo de 2006 bajo el número 01047615 del Libro IX, con el objeto de trabajar por la conservación y protección del medio ambiente, los recursos naturales en Colombia.
							</p>
							<br>
							<p class="card-text text-justify" style="text-indent:2.5em">
								Que a través de la Resolución No. 3077 del 7 de noviembre de 2006, la Corporación Autónoma Regional de Cundinamarca – CAR, otorgó Licencia Ambiental a favor de la Sociedad 
								<b>PROTECCIÓN SERVICIOS AMBINETALES RESPEL DE COLOMBIA – PROSARC S.A. ESP</b> 
								, con Nit. 900.079.188 – 0, para la instalación, operación y puesta en marcha de una planta de incineración de residuos industriales, en el predio localizado en la vereda Balsillas, del municipio de Mosquera, Cundinamarca, por el tiempo de vida útil del proyecto, el cual cobijará las fases de construcción, operación, mantenimiento, desmantelamiento y abandono.
							</p>
							<br>
							<p class="card-text text-justify" style="text-indent:2.5em">
								Que 
								<b>PROTECCIÓN SERVICIOS AMBIENTALES RESPEL DE COLOMBIA – PROSARC S.A. ESP</b> 
								, cuenta con catorce (14) años prestando servicio de recolección, transporte, manejo, tratamiento e incineración y destrucción de toda clase de desechos y residuos, tanto sólidos, semisólidos y líquidos de los sectores industriales y hospitalarios, entendiendo como tales la predestrucción e incineración y destrucción total de medicamentos, elementos médico – quirúrgicos, materia prima obsoleta, solventes, reactivos, moldes, envases, empaques, materiales biológicos, tóxicos y no tóxicos, radiactivos y no radiactivos, incluyendo aquellos considerados como peligrosos, entendiendo para ello el conjunto de operaciones y actividades necesarias para la recolección puerta a puerta, a granel, transporte ya sea en vehículos propios o contratados, manipulación, tratamiento, aprovechamiento, reciclaje, transformación, manual industrial, incineración y destrucción, así como comercialización de los mismos, entre otros servicios.
							</p>
							<br>
							<p class="card-text text-justify" style="text-indent:2.5em">
								En el desarrollo del objeto social 
								<b>PROTECCIÓN SERVICIOS AMBIENTALES RELLENOS DE COLOMBIA – PROSARC S.A. ESP</b> 
								se compromete en: 
								<ol class="text-justify mr-3" type="a">
									<li>Hacer lo necesario, conexo y complementario para el mantenimiento, recuperación y control del medio ambiente comprometidos con el desarrollo sostenible dentro y fuera del territorio Nacional; </li>
									<li>La prestación de los servicios públicos de aseo, así como las actividades conexas y complementarias a este; </li>
									<li>Los servicios de asesorías, consultarías, interventorías, elaboración de estudios, proyectos, diseños, fabricación y montaje de máquinas y equipos de todo tipo, así como la ejecución, Gestión Gerenciamiento o Administración para sí o para terceros, en cualquiera de los aspectos complementados relacionados al objeto social; </li>
									<li>El diseño, organización, control y administración de todas las actividades necesarias para la prestación del servicio de aseo a Entidades Públicas y/o Privadas, así como el suministro y comercialización de los elementos requeridos para tales fines dentro y fuera del territorio Nacional; </li>
									<li>La prestación de servicios técnicos y/o profesionales, consultoría e interventoría administrativos, financieros y comerciales a compañías o Entidades Públicas o Privadas que desarrollen actividades relacionadas con el objeto social de esta y con las actividades conexas o complementarias, ya sea dentro o fuera del territorio Nacional; </li>
									<li>Capacitar, seleccionar, suministrar y administrar personal a las Empresas Públicas o Privadas encargadas de la prestación de los servicios Públicos o Privadas encargadas de la Prestación de los Servicios Públicos y de aquellas actividades conexas o complementarias al objeto social, </li>
									<li>La compra, venta, importación, exportación, alquiler, permuta, fabricación, ensamblaje, servicio, mantenimiento, reparación, incluyendo las representaciones de firmas nacionales y extranjeras y en general todo acto licito de comercio. </li>
								</ol>
							</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-PoliticasSG" role="tabpanel" aria-labelledby="pills-PoliticasSG-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">Politica del Sistema de Gestión Integral</h3>
							<p class="card-text text-justify" style="text-indent:2.5em"> texto pendiente de la politica general para el sistema de gestión integral</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Mision" role="tabpanel" aria-labelledby="pills-Mision-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">Misión</h3>
							<p class="card-text text-justify" style="text-indent:2.5em; font-size: 18px;"> Ejecutar políticas, planes, programas y proyectos ambientales, a través de la implementación de la Licencia Ambiental y normas ambientales, para contribuir a brindar soluciones integrales a la Industria en General para el Manejo de Residuos Peligrosos.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Vision" role="tabpanel" aria-labelledby="pills-Vision-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">Visión</h3>
							<p class="card-text text-justify" style="text-indent:2.5em; font-size: 18px;">PROTECCIÓN SERVICIOS AMBIENTALES RESPEL DE COLOMBIA S.A. ESP – PROSARC S.A. ESP, en el 2023 habrá incidido en la consolidación de un modelo viable, prospero, equitativo y sostenible, a través de una cultura ambiental responsable en la solución integral para el Manejo de Residuos Peligrosos.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-ObjetivoGeneral" role="tabpanel" aria-labelledby="pills-ObjetivoGeneral-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">Objetivos Generales</h3>
							<p class="card-text text-justify" style="text-indent:2.5em">Garantizar la confiabilidad de los resultados a los tratamientos emitidos y cumplimiento de las normas de calidad y ambiental en la prestación de sus servicios, de acuerdo con las necesidades del cliente y la utilización adecuada de los recursos disponible, dentro de una cultura empresarial de prevención, en todos los niveles, tanto de los riesgos ocupacionales identificados, así como de sus impactos ambientales, así como garantizar la gestión eficaz de los requisitos y compromisos legales de la normatividad aplicable vigente y generar confianza por su desempeño y gestión empresarial, se ha diseñado el Sistema Integrado de Gestión de <b>PROSARC S.A. ESP.</b></p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Objetivo1" role="tabpanel" aria-labelledby="pills-Objetivo1-tab">
					<div class="card">
						<div class="row">
							<div class="col-md-2">
								<div class="card-header nav flex-column nav-pills mb-3" id="obj1-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-obj1Descripcion-tab" data-toggle="pill" href="#v-pills-obj1Descripcion" role="tab" aria-controls="v-pills-obj1Descripcion" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj1Actividades-tab" data-toggle="pill" href="#v-pills-obj1Actividades" role="tab" aria-controls="v-pills-obj1Actividades" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-obj1Descripcion" role="tabpanel" aria-labelledby="v-pills-obj1Descripcion-tab">
										<h3>Objetivo 1</h3>
										<h4>Pólitica de Seguridad y Salud en el Trabajo</h4>
										<p>
										Implementar actividades de promoción y prevención en salud, dirigidas a nuestros trabajadores y de seguridad para nuestros colaboradores, contratistas y visitantes con el fin de prevenir accidentes y enfermedades laborales.
										</p>
									</div>
									<div class="tab-pane fade" id="v-pills-obj1Actividades" role="tabpanel" aria-labelledby="v-pills-obj1Actividades-tab">
										<table class="wtable wtable-sm wtable-hover wtable-bordered">
											<thead class="thead-dark">
												<tr>
													<th class="text-center" scope="col">Procesos Implicados</th>
													<th class="text-center" scope="col">actividades</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>SST</li>
														</ul>
													</th>
													<td>Evaluar los puestos de trabajo mediante la ejecución de las  mediciones ocupacionales, mejorando las condiciones con la implementación  de las recomendaciones dadas en cada uno de los estudios realizados</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>MANTENIMIENTO</li>
														</ul>
													</th>
													<td>Realiza mantenimiento predictivo y preventivo a las instalaciones locativas, maquinarias y equipos que puedan causar accidentes</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>TODOS</li>
														</ul>
													</th>
													<td>Evitar accidentes o enfermedades laborales en el desarrollo de nuestras actividades.</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>GESTIÓN HUMANA</li>
															<li>SST</li>
														</ul>
													</th>
													<td>Desarrollar actividades orientadas al auto-cuidado y a la prevención de riesgos. </td>
												</tr>
											</tbody>
										</table>
									</div>
									{{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat quaerat sequi, dolor tempora saepe magni iusto eum distinctio impedit ipsam nobis laboriosam delectus. Laborum illo reprehenderit libero. Ducimus, cumque.</div> --}}
									{{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut animi esse, quasi ullam culpa voluptatem minima dolore molestiae fugit, velit, non neque architecto distinctio dolorem voluptate quibusdam obcaecati perspiciatis?</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Objetivo2" role="tabpanel" aria-labelledby="pills-Objetivo2-tab">
					<div class="card">
						<div class="row">
							<div class="col-md-2">
								<div class="card-header nav flex-column nav-pills mb-3" id="obj2-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-obj2Descripcion-tab" data-toggle="pill" href="#v-pills-obj2Descripcion" role="tab" aria-controls="v-pills-obj2Descripcion" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj2Actividades-tab" data-toggle="pill" href="#v-pills-obj2Actividades" role="tab" aria-controls="v-pills-obj2Actividades" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-obj2Descripcion" role="tabpanel" aria-labelledby="v-pills-obj2Descripcion-tab">
										<h3>Objetivo 2</h3>
										<h4>Pólitica de Calidad</h4>
										<p>
											Garantizar que los servicios de recolección, transporte, manejo, tratamiento, incineración y destrucción de toda clase de desechos y residuos sean oportunos, adecuados y seguro, previniendo la contaminación y la disminuyendo los impactos que se puedan generar a los recursos naturales.
										</p>
									</div>
									<div class="tab-pane fade" id="v-pills-obj2Actividades" role="tabpanel" aria-labelledby="v-pills-obj2Actividades-tab">
										<table class="wtable wtable-sm wtable-hover wtable-bordered">
											<thead class="thead-dark">
												<tr>
													<th class="text-center" scope="col">Procesos Implicados</th>
													<th class="text-center" scope="col">actividades</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>TRATAMIENTO TERMICO</li>
															<li>GESTIÓN AMBIENTAL</li>
														</ul>
													</th>
													<td>Realizar seguimiento, monitoreo y mejoras al cumplimiento de emisiones derivadas al proceso de termo-destrucción.</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>PDA</li>
														</ul>
													</th>
													<td>Gestionar de forma eficiente el almacenamiento temporal, el alistamiento y la distribución para los procesos de disposición final adecuados de todos los residuos entregados por nuestros clientes.</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>GESTIÓN AMBIENTAL</li>
														</ul>
													</th>
													<td>Generar conciencia ambiental por parte de los trabajadores mediante el desarrollo de actividades y campañas educativas</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>TODOS</li>
														</ul> 
													</th>
													<td>Proporcionar mejoras locativas y operativas que ayuden a reducir impactos generados al medio ambiente.</td>
												</tr>
											</tbody>
										</table>
									</div>
									{{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat quaerat sequi, dolor tempora saepe magni iusto eum distinctio impedit ipsam nobis laboriosam delectus. Laborum illo reprehenderit libero. Ducimus, cumque.</div> --}}
									{{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut animi esse, quasi ullam culpa voluptatem minima dolore molestiae fugit, velit, non neque architecto distinctio dolorem voluptate quibusdam obcaecati perspiciatis?</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Objetivo3" role="tabpanel" aria-labelledby="pills-Objetivo3-tab">
					<div class="card">
						<div class="row">
							<div class="col-md-2">
								<div class="card-header nav flex-column nav-pills mb-3" id="obj3-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-obj3Descripcion-tab" data-toggle="pill" href="#v-pills-obj3Descripcion" role="tab" aria-controls="v-pills-obj3Descripcion" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj3Actividades-tab" data-toggle="pill" href="#v-pills-obj3Actividades" role="tab" aria-controls="v-pills-obj3Actividades" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-obj3Descripcion" role="tabpanel" aria-labelledby="v-pills-obj3Descripcion-tab">
										<h3>Objetivo 3</h3>
										<h4>Pólitica Ambiental</h4>
										<p>
											Cumplir con los estándares de calidad en la prestación del servicio a nuestros clientes, optimizando y mejorando continuamente en los procesos y procedimientos establecidos en la Empresa, llegando a los estándares de eficiencia, eficacia, efectividad, cumpliendo siempre con la legislación Ambiental Colombiana y los requerimientos de nuestros Clientes.
										</p>
									</div>
									<div class="tab-pane fade" id="v-pills-obj3Actividades" role="tabpanel" aria-labelledby="v-pills-obj3Actividades-tab">
										<table class="wtable wtable-sm wtable-hover wtable-bordered">
											<thead class="thead-dark">
												<tr>
													<th class="text-center" scope="col">Procesos Implicados</th>
													<th class="text-center" scope="col">actividades</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>SEVICIO AL CLIENTE</li>
															<li>PDA</li>
															<li>TERMODESTRUCCIÓN</li>
															<li>COMERCIAL</li>
															<li>GESTIÓN DE CALIDAD</li>
														</ul>
													</th>
													<td>Realizar seguimiento, monitoreo y mejoras al cumplimiento de emisiones derivadas al proceso de termo-destrucción.</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>PDA</li>
														</ul>
													</th>
													<td>Gestionar de forma eficiente el almacenamiento temporal, el alistamiento y la distribución para los procesos de disposición final adecuados de todos los residuos entregados por nuestros clientes.</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>GESTIÓN AMBIENTAL</li>
														</ul>
													</th>
													<td>Generar conciencia ambiental por parte de los trabajadores mediante el desarrollo de actividades y campañas educativas</td>
												</tr>
												<tr>
													<th scope="row">
														<ul class="processlist">
															<li>TODOS</li>
														</ul>
													</th>
													<td>Proporcionar mejoras locativas y operativas que ayuden a reducir impactos generados al medio ambiente.</td>
												</tr>
											</tbody>
										</table>
									</div>
									{{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat quaerat sequi, dolor tempora saepe magni iusto eum distinctio impedit ipsam nobis laboriosam delectus. Laborum illo reprehenderit libero. Ducimus, cumque.</div> --}}
									{{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut animi esse, quasi ullam culpa voluptatem minima dolore molestiae fugit, velit, non neque architecto distinctio dolorem voluptate quibusdam obcaecati perspiciatis?</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Mapa" role="tabpanel" aria-labelledby="pills-Mapa-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">
								Mapa de Procesos
							</h3>
							<div class="img-zoom-container">
								<a target="_blank" href="white/img/mapa2.png"><img class="img-fluid" id="myimage" src="white/img/mapa2.png" alt="Mapa de Procesos PRosarc S.A. ESP"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica1" role="tabpanel" aria-labelledby="pills-Politica1-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row d-block">
								<div class="col-md-3 float-md-right float-lg-right">
									<img src="white/img/correctivas.png">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">Política de acciones correctivas y preventivas</h3>
									<p class="card-text text-justify">Es política de <strong>PROSARC S.A. ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica2" role="tabpanel" aria-labelledby="pills-Politica2-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 float-md-left float-lg-left">
									<img class="img-fluid" src="white/img/integridad.jpg">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">Política de competencia, juicio e integridad del personal</h3>
									<p class="card-text text-justify"><b>PROSARC S.A. ESP</b>, se compromete a capacitar el personal de forma continua, determinando las necesidades del mismo, mediante evaluaciones periódicas o sugerencias de ellos mismos. La programación de la capacitación la establece el responsable del Sistema Integrado de Gestión mediante un programa de capacitación. Esta capacitación puede llevarse a cabo fuera en las instalaciones de <b>PROSARC S.A. ESP</b> Para llevarse a cabalidad con esto, la Empresa ha establecido un procedimiento XXXX Procedimiento para Entrenamiento de Personal y el procedimiento XXXX Competencia y Detección de Necesidades de Formación.</p>
									<br>
									<p class="card-text text-justify">El Proceso de Tratamiento de <strong>PROSARC S.A. ESP</strong> y el área Comercial, tiene como política no acceder a amenazas o cualquier medio de coacción implícita o explícita, así como no intervenir en actividades que puedan afectar la confiabilidad de los resultados que emite a sus clientes y la competencia. Esto se manifiesta a través de la libertad que tienen para ejercer las funciones establecidas en los perfiles de cargo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica3" role="tabpanel" aria-labelledby="pills-Politica3-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row d-block">
								<div class="col-md-3 float-md-right float-lg-right">
									<img src="white/img/compras.jpg">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">Política de compra de servicios y suministro</h3>
									<p class="card-text text-justify"><strong>PROSARC S.A. ESP</strong>, tiene como política la adquisición de materiales, insumos, suministros y servicios de la calidad, con el fin que no se vea afectado directa o indirectamente la confiabilidad de los resultados que se emiten; siguiendo los procedimientos legales vigentes, realizando las verificaciones y aprobaciones pertinentes que garanticen el cumplimiento de las especificaciones solicitadas, así como emitir el concepto de la evaluación de proveedores a las diferentes partes interesadas, incluyendo los requisitos ambientales y de salud y de seguridad en el trabajo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica4" role="tabpanel" aria-labelledby="pills-Politica4-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 float-md-left float-lg-left">
									<img class="img-fluid" src="white/img/conflicto.jpg">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">política de conflicto de intereses</h3>
									<p class="card-text text-justify">Es política de <strong>PROSARC S.A ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica5" role="tabpanel" aria-labelledby="pills-Politica5-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row d-block">
								<div class="col-md-3 float-md-right float-lg-right">
									<img src="white/img/imparcial.png">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">política de independencia e imparcialidad</h3>
									<p class="card-text text-justify">El Proceso de Tratamiento de <b>PROSARC S.A. ESP</b> y el área Comercial, tiene como política no acceder a amenazas o cualquier medio de coacción implícita o explícita, así como no intervenir en actividades que puedan afectar la confiabilidad de los resultados que emite a sus clientes y la competencia. Esto se manifiesta a través de la libertad que tienen para ejercer las funciones establecidas en los perfiles de cargo.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica6" role="tabpanel" aria-labelledby="pills-Politica6-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 float-md-left float-lg-left">
									<img class="img-fluid" src="white/img/quejas.jpg">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">Política de quejas y reclamos</h3>
									<p class="card-text text-justify">Es política de <strong>PROSARC S.A. ESP</strong>, trabajar en procura de la disminución efectiva de las quejas y reclamos de los clientes internos y externos y cuando estos reclamos se presenten, trabajar en conjunto con los clientes para resolver de forma oportuna, pronta y efectiva cualquier deficiencia que haya sido presentada, para aumentar su satisfacción y la imagen de la Empresa. Para esto, hemos establecido el procedimiento XXXX Gestión de Quejas, como instrumento para dar tratamiento a este tipo de situaciones.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica7" role="tabpanel" aria-labelledby="pills-Politica7-tab">
					<div class="card w-100">
						<div class="card-body">
							<div class="row d-block">
								<div class="col-md-3 float-md-right float-lg-right">
									<img src="white/img/revición.jpg">
								</div>
								<div class="col-md-9">
									<h3 class="card-title">Política de revisión de pedidos y contratos</h3>
									<p class="card-text text-justify"><strong>PROSARC S.A. ESP</strong>, como política tiene revisar las diferentes solicitudes y/o requerimientos de muestreo y análisis de sus clientes internos y externos conservando registros de las revisiones e informando al cliente de las desviaciones que se presentan en la ejecución de sus actividades con respecto a los requerimientos iniciales, determinando la capacidad de análisis y velando por el aumento de la satisfacción de sus clientes.</p>
									<br>
									<p class="card-text text-justify">Para esto se cuenta con procedimientos para la revisión de los requerimientos y contratos dentro de los procedimientos establecidos por <strong>PROSARC S.A. ESP</strong> y con personal consiente y capacitado para tal fin.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica8" role="tabpanel" aria-labelledby="pills-Politica8-tab">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3 float-md-left float-lg-left">
								<img class="img-fluid" src="white/img/conforme.jpg">
							</div>
							<div class="col-md-9">
								<h3 class="card-title">Política de trabajo no conforme</h3>
								<p class="card-text text-justify">Es política de <strong>PROSARC S.A. ESP</strong>, evitar bajo cualquier circunstancia la ocurrencia de trabajo no conformes. Sin embargo, en caso de que ocurran se deberá prestar atención pronta, se asignan responsables y se toman las acciones correspondientes para solventar cualquier deficiencia que pueda afectar de forma directa o indirecta los procedimientos del sistema integrado de gestión. Para esto, se ha establecido el procedimiento XXXXX Procedimiento de Control de Trabajo NO Conforme, como instrumento para dar tratamiento a estas situaciones.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica9" role="tabpanel" aria-labelledby="pills-Politica9-tab">
					<div class="card-body">
						<div class="row d-block">
							<div class="col-md-3 float-md-right float-lg-right">
								<img src="white/img/confidencial.jpg">
							</div>
							<div class="col-md-9">
								<h3 class="card-title">políticas de confidencialidad</h3>
								<p class="card-text text-justify">Todo el personal y quien labore en PROSARC S.A. ESP, desde la Gerencia General y directivos, se comprometen a mantener la confidencialidad de los resultados de sus diferentes clientes, así como a proteger dicha información de un uso contrario al autorizado, pérdida, acceso no autorizado, alteración y destrucción. Sólo se utilizará la información obtenida en los análisis para responder a los requerimientos y consultas y procesar las solicitudes de los clientes.</p>
								<br>
								<p class="card-text text-justify">El personal y quien labore en <strong>PROSARC S.A. ESP</strong>, sea contratista y/o temporal, asume con mucha seriedad la responsabilidad de mantener la confidencialidad de sus datos y con este fin toma precauciones razonables y cuenta con procedimientos y mecanismos para protegerlos, también para que el personal involucrado, guarde confidencialidad absoluta al respecto, así como también, para que no divulguen la dicha información a terceros y no la utilice para otro propósito que no sea ofrecerle bienes y servicios específicos a los clientes de <strong>PROSARC S.A. ESP</strong>.</p> 
								<br>
								<p class="card-text text-justify">Para esto el personal ha firmado compromisos en la “Carta de Compromiso” y acuerdos de confidencialidad de la información en el “Acuerdo de Confiabilidad”, que reposan en las carpetas de cada hoja de vida. </p>
								<br>
								<p class="card-text text-justify">En el caso de los datos y resultados almacenados o distribuidos en medios electrónicos, se protegen contra alteraciones o daños mediante back ups periódicos y por medio de claves personalizadas se protegen contra accesos sin autorización.</p>
								<br>
								<p class="card-text text-justify">Sólo se podrá divulgar la información cuando la misma sea requerida para proteger y defender los derechos y la seguridad de <strong>PROSARC S.A. ESP</strong>, sus clientes y el personal a cargo. Excepto por las circunstancias previamente mencionadas, la información recolectada no se divulgará a terceros.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
@endsection

@push('scripts')
	
@endpush