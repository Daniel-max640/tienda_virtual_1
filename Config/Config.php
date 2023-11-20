<?php 
	//const BASE_URL = "https://abelosh.com/store";
	const BASE_URL = "http://localhost/tienda_virtual_1";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AX-3fJ8ru_eGKcjQLa38TsubK3dbbCBl_3Do-TN_OqKQEFoqZLoC_cwdVkFN7DS4O3GXOBdt1PqASGLK";
	const SECRET = "EF3PNPTcdq8EyylGW5fHnWTZkVdN9En-WWXVfZT6KbvofjR2s8fYTRAxHIeFsJti1EujT8nNj6lRP6as";
	//LIVE PAYPAL
	//const IDCLIENTE = "AfII5JFSVP1tCUKQrdofZfJOjHTOLbYSvVQrBn_L4i7QibOkzrccZXJSC2YZSnvclgb_sxjzg8nMrCB-";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "EOcghLmdG0tgPsolEhiEZSHJ84rRAsY7SvNaf_EjzKHkdZnARg_ncVzBE_woeIjXlstCW0YDNzF97Bi6";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "dan-ms@hotmail.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.abelosh.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Avenida las Américas Zona 13, Guatemala";
	const TELEMPRESA = "+(502)78787845";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "dan.msaj@gmail.com";
	const EMAIL_PEDIDOS = "dan.msaj@gmail.com"; 
	const EMAIL_SUSCRIPCION = "dan.msaj@gmail.com";
	const EMAIL_CONTACTO = "dan.msaj@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/abelosh";
	const INSTAGRAM = "https://www.instagram.com/febel24/";
	

 ?>