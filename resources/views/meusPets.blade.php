@extends('index')

@section('conteudo')
<head>
	<title>BiteP - Meus Pets</title>

	<!-- CSS da Página -->
	<link rel="stylesheet" type="text/css" href="css/meusPets.css"/>
</head>

<body>
	<div class="w3-main">
		<form id="formPets" style="margin-top:100px; margin-left:100px; margin-right:100px;">
			<dataGrid class="gridPets" var="pet" value="#{petBean.listaPets}" columns="4" layout="grid" rows="16" id="pets" paginator="true" paginatorTemplate="{CurrentPageReport} {CurrentPageLink} {FirstPageLink} {PreviousPageLink}">
				<facet name="header">Meus Pets</f:facet>		
				<panel class="panelPets" header="#{pet.nome}" style="text-align:center">
           			<panelGrid columns="1" style="width:100%" class="flex-wrap">
           				<graphicImage alt="erro ao carregar foto" value = "/images/#{pet.fotos[0].idImagem}" class="petImg" width="140px" height="140px" align="middle"/> 
           			</panelGrid>
           			<panelGrid columns="2" style="width:100%" class="flex-wrap">
           				<panelGroup>
           					<button type="button" styleClass="btn" name="btnPerfil"><i class="fa fa-paw"></i> Ver Perfil</button>
           					<button type="button" class="btn" name="btnRemover" style="margin-left:5px"><i class="fa fa-trash-alt"></i> Remover</button>
           				</panelGroup>
           			</panelGrid>              		
           		</panel>
            </dataGrid>
		</form>
	</div>
</body>
@stop