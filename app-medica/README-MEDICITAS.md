# MediCitas - Panel Administrativo

Dashboard de demostración basado en la plantilla gratuita **SB Admin 2** de Start Bootstrap y adaptado a la gestión de citas médicas. Las páginas usan PHP, comparten la navegación y muestran datos ficticios; no hay base de datos ni se guarda información clínica.

## Ejecutar en Laragon

1. Copia la carpeta completa `app-medica` a `C:\laragon\www\app-medica`.
2. Abre Laragon y pulsa **Start All** para iniciar Apache.
3. En el navegador abre <http://localhost/app-medica/index.php>.
4. Comprueba los apartados Resumen, Pacientes, Doctores, Agendar cita e Historial clínico.

Las rutas CSS, JavaScript, imágenes y enlaces entre páginas son relativas al proyecto.
El archivo `.replit` configura el comando `php -S 0.0.0.0:8080 -t .` para iniciar el servidor PHP.

## Publicar en Replit

1. Abre <https://replit.com/> e inicia sesión o crea una cuenta.
2. Selecciona **Create Repl** y elige una plantilla de **PHP** o **PHP Web Server**.
3. Asigna el nombre `app-medica`.
4. En el panel de archivos, carga el contenido de esta carpeta, incluidas las carpetas `assets`, `css`, `img`, `js`, `vendor` e `includes`.
5. Pulsa **Run** y espera a que el servidor PHP inicie.
6. Copia la URL pública que Replit muestre en su vista previa y la URL del proyecto para tu entrega. No inventes ninguna URL si la plataforma todavía no las generó.

## Publicar en CodeSandbox

1. Abre <https://codesandbox.io/> e inicia sesión o crea una cuenta.
2. Selecciona **Create Sandbox** y comprueba si tu cuenta ofrece una plantilla PHP.
3. Carga todos los archivos de esta carpeta y abre la vista previa.
4. Si el entorno disponible no ejecuta PHP, usa Replit con PHP; una plantilla estática no procesa las páginas `.php`.
5. Copia la URL pública del proyecto y la URL de vista previa que genere la plataforma.

Estos pasos son manuales: este proyecto no se ha subido ni publicado, y no contiene una URL pública.

## Captura de pantalla para la entrega

Toma una captura real de `index.php` abierto en el editor, donde se vean el título “MediCitas - Panel Administrativo” y al menos tres enlaces del menú lateral con sus destinos `.php`. Puedes tomar otra captura del dashboard funcionando en Laragon. No uses una captura simulada como evidencia.

## Estructura

- `index.php`: resumen y agenda del día.
- `pacientes.php`: directorio con búsqueda local.
- `doctores.php`: equipo y horarios de atención.
- `citas.php`: formulario demostrativo de cita.
- `historial.php`: atenciones recientes ficticias.
- `includes/config.php`: navegación, iconos y estructura compartida.
- `assets/`: estilos y comportamiento responsive.
- `css/`, `js/`, `vendor/`, `img/`: recursos originales incluidos con SB Admin 2.
