Pasos para instalar la aplicacion:
	
	1- Clonar el repositorio:
		Correr el siguiente comando en la carpeta donde se va a instalar la aplicacion:
			git clone https://github.com/Joante/Zedplan.git

	2- Ingreso de API KEY de Google:
		En el archivo .env agregar la siguiente linea: 
		GOOGLE_API_KEY=SU_API_KEY
		Siendo SU_API_KEY la api key de Google a usar.

	3- Limpiar y cachear la configuracion:
		En la carpeta raiz correr el siguiente comando:
			php artisan config:clear
			php artisan config:cache

	4- Crear el servidor de prueba para la aplicacion:
		En la carpeta raiz del proyecto correr el siguiente comando:
			php artisan serve  