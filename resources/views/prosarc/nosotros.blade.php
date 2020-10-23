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
				  <a class="nav-link active" id="pills-General-tab" data-toggle="pill" href="#pills-General" role="tab" aria-controls="pills-General" aria-selected="true">Generalidades de Prosarc</a>
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
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Politicas</a>
					<div class="dropdown-menu nav-item w-100"  role="presentation">
						<a class="dropdown-item" id="pills-Politica1-tab" data-toggle="pill" href="#pills-Politica1" role="tab" aria-controls="pills-Politica1" aria-selected="false">Politica1</a>
						<a class="dropdown-item" id="pills-Politica2-tab" data-toggle="pill" href="#pills-Politica2" role="tab" aria-controls="pills-Politica2" aria-selected="false">Politica2</a>
						<a class="dropdown-item" id="pills-Politica3-tab" data-toggle="pill" href="#pills-Politica3" role="tab" aria-controls="pills-Politica3" aria-selected="false">Politica3</a>
						<a class="dropdown-item" id="pills-Politica4-tab" data-toggle="pill" href="#pills-Politica4" role="tab" aria-controls="pills-Politica4" aria-selected="false">Politica4</a>
						<a class="dropdown-item" id="pills-Politica5-tab" data-toggle="pill" href="#pills-Politica5" role="tab" aria-controls="pills-Politica5" aria-selected="false">Politica5</a>
						<a class="dropdown-item" id="pills-Politica6-tab" data-toggle="pill" href="#pills-Politica6" role="tab" aria-controls="pills-Politica6" aria-selected="false">Politica6</a>
						<a class="dropdown-item" id="pills-Politica7-tab" data-toggle="pill" href="#pills-Politica7" role="tab" aria-controls="pills-Politica7" aria-selected="false">Politica7</a>
						<a class="dropdown-item" id="pills-Politica8-tab" data-toggle="pill" href="#pills-Politica8" role="tab" aria-controls="pills-Politica8" aria-selected="false">Politica8</a>
						<a class="dropdown-item" id="pills-Politica9-tab" data-toggle="pill" href="#pills-Politica9" role="tab" aria-controls="pills-Politica9" aria-selected="false">Politica9</a>
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
							<p class="card-text text-justify" style="text-indent:2.5em"> Ejecutar políticas, planes, programas y proyectos ambientales, a través de la implementación de la Licencia Ambiental y normas ambientales, para contribuir a brindar soluciones integrales a la Industria en General para el Manejo de Residuos Peligrosos.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Vision" role="tabpanel" aria-labelledby="pills-Vision-tab">
					<div class="card w-100">
						<div class="card-body">
							<h3 class="card-title">Visión</h3>
							<p class="card-text text-justify" style="text-indent:2.5em">PROTECCIÓN SERVICIOS AMBIENTALES RESPEL DE COLOMBIA S.A. ESP – PROSARC S.A. ESP, en el 2023 habrá incidido en la consolidación de un modelo viable, prospero, equitativo y sostenible, a través de una cultura ambiental responsable en la solución integral para el Manejo de Residuos Peligrosos.</p>
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
								<div class="card-header nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link" id="v-pills-obj1Descripcion-tab" data-toggle="pill" href="#v-pills-obj1Descripcion" role="tab" aria-controls="v-pills-home" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj1Actividades-tab" data-toggle="pill" href="#v-pills-obj1Actividades" role="tab" aria-controls="v-pills-profile" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade" id="v-pills-obj1Descripcion" role="tabpanel" aria-labelledby="v-pills-obj1Descripcion-tab">
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
								<div class="card-header nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link" id="v-pills-obj3Descripcion-tab" data-toggle="pill" href="#v-pills-obj2Descripcion" role="tab" aria-controls="v-pills-home" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj2Actividades-tab" data-toggle="pill" href="#v-pills-obj2Actividades" role="tab" aria-controls="v-pills-profile" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade" id="v-pills-obj2Descripcion" role="tabpanel" aria-labelledby="v-pills-obj2Descripcion-tab">
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
								<div class="card-header nav flex-column nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link" id="v-pills-obj3Descripcion-tab" data-toggle="pill" href="#v-pills-obj3Descripcion" role="tab" aria-controls="v-pills-home" aria-selected="true">Descripción</a>
									<a class="nav-link" id="v-pills-obj3Actividades-tab" data-toggle="pill" href="#v-pills-obj3Actividades" role="tab" aria-controls="v-pills-profile" aria-selected="false">Actividades</a>
									{{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
									{{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
								</div>
							</div>
							<div class="col-md-10">
								<div class="card-body tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade" id="v-pills-obj3Descripcion" role="tabpanel" aria-labelledby="v-pills-obj3Descripcion-tab">
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
					<div class="card w-100 mx-auto">
						<div class="card-body">
							<h3 class="card-title">
								Mapa de Procesos
							</h3>
							<a href="https://picsum.photos/1920/1080">
								{{-- <img src="white/img/Mapa_proceso.png" class="responsive imagen-prosarc w-100" alt="Responsive image"> --}}
								<img class="" src="https://picsum.photos/1920/1080" alt="">
							</a>
							<div class="img-zoom-container">
								<img id="myimage" src="white/img/Mapa_proceso.png" width="300" height="240" alt="Girl">
								<div id="myresult" class="img-zoom-result"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="pills-Politica1" role="tabpanel" aria-labelledby="pills-Politica1-tab">Politica1</div>
				<div class="tab-pane fade" id="pills-Politica2" role="tabpanel" aria-labelledby="pills-Politica2-tab">Politica2</div>
				<div class="tab-pane fade" id="pills-Politica3" role="tabpanel" aria-labelledby="pills-Politica3-tab">Politica3</div>
				<div class="tab-pane fade" id="pills-Politica4" role="tabpanel" aria-labelledby="pills-Politica4-tab">Politica4</div>
				<div class="tab-pane fade" id="pills-Politica5" role="tabpanel" aria-labelledby="pills-Politica5-tab">Politica5</div>
				<div class="tab-pane fade" id="pills-Politica6" role="tabpanel" aria-labelledby="pills-Politica6-tab">Politica6</div>
				<div class="tab-pane fade" id="pills-Politica7" role="tabpanel" aria-labelledby="pills-Politica7-tab">Politica7</div>
				<div class="tab-pane fade" id="pills-Politica8" role="tabpanel" aria-labelledby="pills-Politica8-tab">Politica8</div>
				<div class="tab-pane fade" id="pills-Politica9" role="tabpanel" aria-labelledby="pills-Politica9-tab">Politica9</div>
			  </div>
		</div>
	</div>
	<br>
	
	<h2 class=" letra-titulo">POLÍTICAS</h2>

	<div class="accordion" id="accordionExample">
	  
		{{-- Políica #1 --}}
		<div class="card">
			<div class="card-header" id="headingOne">
				<h2 class="mb-0">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<strong class="letra-titulo">POLÍTICAS DE CONFIDENCIALIDAD</strong>
					</button>
				</h2>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/confidencial.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido" style="margin: 10px">
						<p>Todo el personal y quien labore en PROSARC S.A. ESP, desde la Gerencia General y directivos, se comprometen a mantener la confidencialidad de los resultados de sus diferentes clientes, así como a proteger dicha información de un uso contrario al autorizado, pérdida, acceso no autorizado, alteración y destrucción. Sólo se utilizará la información obtenida en los análisis para responder a los requerimientos y consultas y procesar las solicitudes de los clientes.</p>
						<br>
						<p>El personal y quien labore en <strong>PROSARC S.A. ESP</strong>, sea contratista y/o temporal, asume con mucha seriedad la responsabilidad de mantener la confidencialidad de sus datos y con este fin toma precauciones razonables y cuenta con procedimientos y mecanismos para protegerlos, también para que el personal involucrado, guarde confidencialidad absoluta al respecto, así como también, para que no divulguen la dicha información a terceros y no la utilice para otro propósito que no sea ofrecerle bienes y servicios específicos a los clientes de <strong>PROSARC S.A. ESP</strong>.</p> 
						<br>
						<p>Para esto el personal ha firmado compromisos en la “Carta de Compromiso” y acuerdos de confidencialidad de la información en el “Acuerdo de Confiabilidad”, que reposan en las carpetas de cada hoja de vida. </p>
						<br>
						<p>En el caso de los datos y resultados almacenados o distribuidos en medios electrónicos, se protegen contra alteraciones o daños mediante back ups periódicos y por medio de claves personalizadas se protegen contra accesos sin autorización.</p>
						<br>
						<p>Sólo se podrá divulgar la información cuando la misma sea requerida para proteger y defender los derechos y la seguridad de <strong>PROSARC S.A. ESP</strong>, sus clientes y el personal a cargo. Excepto por las circunstancias previamente mencionadas, la información recolectada no se divulgará a terceros.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #2 --}}
		<div class="card">
			<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<strong class="letra-titulo">POLÍTICA DE INDEPENDENCIA <br> E IMPARCIALIDAD</strong>
					</button>
				</h2>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						El Proceso de Tratamiento de <strong>PROSARC S.A. ESP</strong> y el área Comercial, tiene como política no acceder a amenazas o cualquier medio de coacción implícita o explícita, así como no intervenir en actividades que puedan afectar la confiabilidad de los resultados que emite a sus clientes y la competencia. Esto se manifiesta a través de la libertad que tienen para ejercer las funciones establecidas en los perfiles de cargo.
					</div>
					<div class="col-md-2">
						<img src="white/img/imparcial.png" style="margin: 10px;">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #3 --}}
		<div class="card">
			<div class="card-header" id="headingThree">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<strong class="letra-titulo">POLÍTICA DE REVISIÓN DE <br> PEDIDOS Y CONTRATOS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/revición.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p><strong>PROSARC S.A. ESP</strong>, como política tiene revisar las diferentes solicitudes y/o requerimientos de muestreo y análisis de sus clientes internos y externos conservando registros de las revisiones e informando al cliente de las desviaciones que se presentan en la ejecución de sus actividades con respecto a los requerimientos iniciales, determinando la capacidad de análisis y velando por el aumento de la satisfacción de sus clientes.</p>
						<br>
						<p>Para esto se cuenta con procedimientos para la revisión de los requerimientos y contratos dentro de los procedimientos establecidos por <strong>PROSARC S.A. ESP</strong> y con personal consiente y capacitado para tal fin.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Polílica #4 --}}
		<div class="card">
			<div class="card-header" id="headingFour">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					<strong class="letra-titulo">POLÍTICA DE COMPRA DE <br> SERVICIOS Y SUMINISTRO</strong>
					</button>
				</h2>
			</div>
			<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p><strong>PROSARC S.A. ESP</strong>, tiene como política la adquisición de materiales, insumos, suministros y servicios de la calidad, con el fin que no se vea afectado directa o indirectamente la confiabilidad de los resultados que se emiten; siguiendo los procedimientos legales vigentes, realizando las verificaciones y aprobaciones pertinentes que garanticen el cumplimiento de las especificaciones solicitadas, así como emitir el concepto de la evaluación de proveedores a las diferentes partes interesadas, incluyendo los requisitos ambientales y de salud y de seguridad en el trabajo.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/compras.jpg">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #5 --}}
		<div class="card">
			<div class="card-header" id="headingFive">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					<strong class="letra-titulo">POLÍTICA DE QUEJAS Y RECLAMOS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/quejas.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, trabajar en procura de la disminución efectiva de las quejas y reclamos de los clientes internos y externos y cuando estos reclamos se presenten, trabajar en conjunto con los clientes para resolver de forma oportuna, pronta y efectiva cualquier deficiencia que haya sido presentada, para aumentar su satisfacción y la imagen de la Empresa. Para esto, hemos establecido el procedimiento XXXX Gestión de Quejas, como instrumento para dar tratamiento a este tipo de situaciones.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #6 --}}
		<div class="card">
			<div class="card-header" id="headingSix">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					<strong class="letra-titulo">POLÍTICA DE TRABAJO NO CONFORME</strong>
					</button>
				</h2>
			</div>
			<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, evitar bajo cualquier circunstancia la ocurrencia de trabajo no conformes. Sin embargo, en caso de que ocurran se deberá prestar atención pronta, se asignan responsables y se toman las acciones correspondientes para solventar cualquier deficiencia que pueda afectar de forma directa o indirecta los procedimientos del sistema integrado de gestión. Para esto, se ha establecido el procedimiento XXXXX Procedimiento de Control de Trabajo NO Conforme, como instrumento para dar tratamiento a estas situaciones.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/conforme.jpg">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #7 --}}
		<div class="card">
			<div class="card-header" id="headingSeven">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
					<strong class="letra-titulo">POLÍTICA DE CONFLICO DE INTERESES</strong>
					</button>
				</h2>
			</div>
			<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/conflicto.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p>Es política de <strong>PROSARC S.A ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
					</div>
				</div>
			</div>
		</div>
		{{-- Política #8 --}}
		<div class="card">
			<div class="card-header" id="headingEight">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
					<strong class="letra-titulo">POLÍTICA DE ACCIONES <br> CORRECTIVAS Y PREVENTIVAS</strong>
					</button>
				</h2>
			</div>
			<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
				<div class="row">
					<div class="card-body col-md-9 text-justify letra-contenido" style="margin: 10px 10px 10px 20px;">
						<p>Es política de <strong>PROSARC S.A. ESP</strong>, respetar la propiedad del cliente, controlar y evitar bajo cualquier circunstancia que la información generada por concepto de requerimiento de tratamiento de incineración, celdas, entre otras, haya sido solicitada por el cliente, sea entregada a otro, incluyendo a la misma empresa. Para lo anterior, <strong>PROSARC S.A. ESP</strong>, ha identificado los posibles conflictos de interés internos y externos, por lo que establecemos controles, las responsabilidades y las acciones correspondientes para solventar cualquier deficiencia que pueda generar un incumplimiento a esta política.</p>
					</div>
					<div class="col-md-2">
						<img src="white/img/correctivas.png">
					</div>
				</div>
			</div>
		</div>
		{{-- Política #9 --}}
		<div class="card">
			<div class="card-header" id="headingNine">
				<h2 class="mb-0">
					<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
					<strong class="letra-titulo">POLÍTICA DE COMPETENCIA, JUICIO <br>E INTEGRIDAD DEL PERSONAL</strong>
					</button>
				</h2>
			</div>
			<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
				<div class="row">
					<div class="col-md-3">
						<img src="white/img/integridad.jpg" style="margin: 10px 10px 10px 10px;">
					</div>
					<div class="card-body col-md-8 text-justify letra-contenido">
						<p><strong>PROSARC S.A. ESP</strong>, se compromete a capacitar el personal de forma continua, determinando las necesidades del mismo, mediante evaluaciones periódicas o sugerencias de ellos mismos. La programación de la capacitación la establece el responsable del Sistema Integrado de Gestión mediante un programa de capacitación. Esta capacitación puede llevarse a cabo fuera en las instalaciones de <strong>PROSARC S.A. ESP</strong> Para llevarse a cabalidad con esto, la Empresa ha establecido un procedimiento XXXX Procedimiento para Entrenamiento de Personal y el procedimiento XXXX Competencia y Detección de Necesidades de Formación.</p>
						<br>
						<p><strong>PROSARC S.A. ESP</strong>, se compromete igualmente a incluir dentro de estas capacitaciones, la sensibilización del personal en aspectos como el compromiso adquirido por todo el personal que ingresa a la Empresa, a realizar sus actividades en forma imparcial e integral, guardando estrictamente la confidencialidad y empleando una buena práctica profesional, sin presiones interno o externas comerciales, financieras u otras que puedan tener una influencia negativa sobre la calidad del trabajo.</p>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection

@push('scripts')
	<script>
		function imageZoom(imgID, resultID) {
			var img, lens, result, cx, cy;
			img = document.getElementById(imgID);
			result = document.getElementById(resultID);
			/* Create lens: */
			lens = document.createElement("DIV");
			lens.setAttribute("class", "img-zoom-lens");
			/* Insert lens: */
			img.parentElement.insertBefore(lens, img);
			/* Calculate the ratio between result DIV and lens: */
			cx = result.offsetWidth / lens.offsetWidth;
			cy = result.offsetHeight / lens.offsetHeight;
			/* Set background properties for the result DIV */
			result.style.backgroundImage = "url('" + img.src + "')";
			result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
			/* Execute a function when someone moves the cursor over the image, or the lens: */
			lens.addEventListener("mousemove", moveLens);
			img.addEventListener("mousemove", moveLens);
			/* And also for touch screens: */
			lens.addEventListener("touchmove", moveLens);
			img.addEventListener("touchmove", moveLens);
			function moveLens(e) {
				var pos, x, y;
				/* Prevent any other actions that may occur when moving over the image */
				e.preventDefault();
				/* Get the cursor's x and y positions: */
				pos = getCursorPos(e);
				/* Calculate the position of the lens: */
				x = pos.x - (lens.offsetWidth / 2);
				y = pos.y - (lens.offsetHeight / 2);
				/* Prevent the lens from being positioned outside the image: */
				if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
				if (x < 0) {x = 0;}
				if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
				if (y < 0) {y = 0;}
				/* Set the position of the lens: */
				lens.style.left = x + "px";
				lens.style.top = y + "px";
				/* Display what the lens "sees": */
				result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
			}
			function getCursorPos(e) {
				var a, x = 0, y = 0;
				e = e || window.event;
				/* Get the x and y positions of the image: */
				a = img.getBoundingClientRect();
				/* Calculate the cursor's x and y coordinates, relative to the image: */
				x = e.pageX - a.left;
				y = e.pageY - a.top;
				/* Consider any page scrolling: */
				x = x - window.pageXOffset;
				y = y - window.pageYOffset;
				return {x : x, y : y};
			}
		}
		$(document).ready(function() {
			imageZoom("myimage", "myresult");
		});
	</script>
@endpush