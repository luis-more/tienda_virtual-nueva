<?php

//define("BASE_URL", "http://localhost/tienda_virtual/");
const BASE_URL = "http://localhost/tienda_virtual";

//Zona horaria
date_default_timezone_set('America/Lima');

//Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "bd_tiendavirtual";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";

//Para envío de correo
const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Simbolo de moneda
const SMONEY = "S/";
const CURRENCY = "USD";

//Datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "moreweb17@gmail.com";
const NOMBRE_EMPESA = "Tienda Virtual More";
const WEB_EMPRESA = "http://localhost/tienda_virtual/";


const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
const SHAREDHASH = "TiendaVirtual";

const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

//Datos Empresa
const DIRECCION = "Jr Santo Toribio c/8 Rioja - Perú";
const TELEMPRESA = "+(51)912815883";
const WHATSAPP = "+51912815883";
const EMAIL_EMPRESA = "moreweb17@gmail.com";
const EMAIL_PEDIDOS = "moreweb17@gmail.com";
const EMAIL_SUSCRIPCION = "moreweb17@gmail.com";
const EMAIL_CONTACTO = "moreweb17@gmail.com";


//Datos para Encriptar / Desencriptar
const KEY = 'moreweb17';
const METHODENCRIPT = "AES-128-ECB";

//Envío
const COSTOENVIO = 20;


	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";


//Api PayPal
//SANDBOX PAYPAL
//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
//const IDCLIENTE = "AdKZSylWp-mhE3yG2_tPTgBM4VdCBG9IfevDxzmCgGaDaugIT6xFXGbd8Z5LCz7rx4jNrm71-abhjMPi";
//const SECRET = "EGBEuVgJeDfC-hEBdg5ostbYmhOYivXtI0y7m32d0o7iNFIOG5pUhNf9eRA-gDYfseqYxUM5vtA7REi0";
	//LIVE PAYPAL
	//const IDCLIENTE = "AS86ndx6QbSpY7VINKeFoDEi24usk6lUWuXZ_qhwuCdBWhJNBidnxHwkIT6G8Jdgp2_XrFoNPYvdTREj";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "EEIkVlCSOIlADaEIXmRmJDJxh7h17mDVzMQva8LfEIIFDJbUSWDrdDUlmPH0mEwrGqEwiL2m8Tja9yBQ";


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
	const FACEBOOK = "https://www.facebook.com/luis-more";
	const INSTAGRAM = "https://www.instagram.com/luis-more/";