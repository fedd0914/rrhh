<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
  body { font-size:13px; font-family: DejaVu Sans, sans-serif; }
    table, td, th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

.right {
  float: right;
  width: 200px;
  padding: 10px;
}

.left {
  float: left;
  width: 200px;
  padding: 10px;
  padding-top: 14px;
}

.cuerpo-chico {
  font-size: 11px;
}
</style>
<title>Nota solicitud de Inscripción al Registro de Personas Físicas (Instaladores Individuales)</title>
</head>
<body>
<br>
<h3 style="text-align: center"><u><b>SOLICITUD UNICA DE PERMISOS Y LICENCIAS</b></u></h3>

<p class="cuerpo-chico">
    <b>1-</b> Licencia Anual Ordinaria con encuadre en el Artículo 7º de la Ley Nº 645-A (antigua L. 3521), Se establece el periodo de vacaciones de las actividades de la Administración Publica Provincial a partir del 15 de diciembre al 31 de marzo del siguiente año inclusive. Durante este Período deberá hacer uso de su licencia anual ordinaria todo el personal, con excepción de los agentes necesarios para atender tramites de carácter urgente o actividades improrrogables. Antes del 10 de diciembre de cada año la Autoridad competente mediante instrumento legal dictado al efecto deberá notificar a los agentes el periodo durante el cual gozaran del presente beneficio. El personal que por razones de servicios no haya usufructuado esta licencia en el periodo antes mencionado tendrá derecho a la misma dentro del transcurso del año.
    <br><br><b>2-</b> Artículo 8º de la Ley Nº 645-A A (antigua L. 3521), los agentes que tengan acreditada al 31 de diciembre de cada año una antigüedad de seis 6 meses a cinco 5 años tendrán derecho a 23 días corridos de licencia, quienes acrediten una antigüedad de más de cinco 5 años y hasta diez 10 años tendrán derecho a veintiocho 28 días corridos de licencia, los que cuenten con una antigüedad de más de diez 10 años y hasta dieciocho 18 años tendrán CUARENTA Y DOS 42 días corridos de Licencia y los que tengan una antigüedad de más de dieciocho 18 años gozaran de cuarenta y nueve 49 días corridos de Licencia. La Licencia se iniciara el primer día hábil de la semana en que se otorgue el beneficio.
    <br><br><b>3-</b> Artículo 9º Se establece un periodo de vacaciones de invierno de diez días corridos cuyo periodo de goce será determinado anualmente por el Poder Ejecutivo.
    <br><br><b>4-</b> PERMISOS: Nacimiento o adopción de hijos del agente varón 2 días hábiles – fallecimiento de cónyuge, padres, hijos o hermanos del agente hasta 6 días hábiles, suegros abuelos o nietos o personas a cargo hasta 2 días hábiles, parientes en tercer grado 1 día hábil, donación de sangre 1 día – razones particulares hasta cuarenta horas laborables por año calendario. Matrimonio de hijos del agente dos días, por natalicio del agente un día.-

</p>
<br>
<table style="width:100%;">
    <tr>
        <td style="text-align: center"><b>Apellido y Nombre</b></td>
        <td style="text-align: center"><b>Situación</b></td>
        <td style="text-align: center"><b>Dependencia</b></td>
        <td style="text-align: center"><b>BLACK</b></td>
    </tr>
    <tr>
        <td style="text-align: center">{{$licenciaUser->user->name}}</td>
        <td style="text-align: center">Planta Permanente</td>
        <td style="text-align: center">I.P.D.U.V</td>
        <td style="text-align: center">BLACK</td>
    </tr>
    <tr>
        <td style="text-align: center"><b>D.N.I Nº</b></td>
        <td colspan="2" style="text-align: center;"><b>Lugar de Trabajo</b></td>
        <td style="text-align: center"><b>Cargo</b></td>
    </tr>
    <tr>
        <td style="text-align: center">{{$licenciaUser->user->name}}</td>
        <td colspan="2" style="text-align: center;">{{ $licenciaUser->id }}</td>
        <td style="text-align: center">{{ $licenciaUser->id }}</td>
    </tr>

    <tr>
        <td style="text-align: center"><b>Domicilio Actual</b></td>
        <td style="text-align: center;"><b>Profesional SI/NO</b></td>
        <td colspan="2" style="text-align: center"><b>Título</b></td>
    </tr>
    <tr>
        <td style="text-align: center">{{$licenciaUser->user->name}}</td>
        <td style="text-align: center;">{{ $licenciaUser->id }}</td>
        <td colspan="2"  style="text-align: center">{{ $licenciaUser->id }}</td>
    </tr>
</table>

    <h3 style="text-align: center;"> <b><u>SOLICITUD UNICA DE PERMISOS Y LICENCIAS </u></b></h3>

    <p>
        Se solicitan {{$licenciaUser->days}} dias del beneficio {{$licenciaUser->licencia->concept}}, desde {{$desde}} hasta {{$hasta}}
    </p>
    <br>
    <b>_________________</b>
    <br><b>FIRMA AGENTE</b>
    <br><br>
    <h2 style="text-align: center"><u><b>INFORME  DEL GERENTE DEL AREA</b></u></h2>
    <p>
        Con la conformidad de esta Gerencia, pase a la Dirección de Recursos Humanos, sujeto al control y aprobación del  trámite correspondiente.-
    </p>
    <br><br>


    <div class="left">
        <b>_________________________ <br>
        Vº  Bº DIRECTOR / J.DPTO</b>
    </div>

    <div class="right">
        <b>______________________<br>
        FIRMA DEL GERENTE</b>
    </div>


</body>
</html>

