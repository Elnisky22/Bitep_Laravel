@extends('index')

@section('conteudo')
<head>
    <title>BiteP - Resultado da busca</title>
    <!-- CSS da Página -->		
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
</head>
	
<body>
	<div class="w3-main">
		<form id="formPets" style="margin-top:100px;margin-left:100px;margin-right:100px;">
			<p:dataGrid class="gridPets" var="pet" value="#{busca.resultPet}" columns="4" layout="grid" rows="16" id="pets" paginator="true" paginatorTemplate="{CurrentPageReport} {CurrentPageLink} {FirstPageLink} {PreviousPageLink}">
				<f:facet name="header">Pets</f:facet>		
				<p:panel class="panelPets" header="#{pet.nome}" style="text-align:center">
           			<h:panelGrid columns="1" style="width:100%" class="flex-wrap">
           				<h:graphicImage alt="fotinhapontopeenege" value = "/images/#{pet.fotos[0].idImagem}" class="petImg" width="140px" height="140px" align="middle"/> 
           			</h:panelGrid>
           			<h:panelGrid columns="2" style="width:100%" class="flex-wrap">
           				<h:panelGroup>
           					<h:commandLink styleClass="btn" name="btnPerfil" action="#{petBean.visualizarPet(pet.id)}">
           						<i class="fa fa-paw"></i> Ver Perfil
           					</h:commandLink>        					
           				</h:panelGroup>              				
           			</h:panelGrid>              		
           		</p:panel>
           	</p:dataGrid>
		</form>
	</div>
</body>
@stop