# Practica4: Integracion continua

Programa Hola mundo en JavaScript y notificacion con GitHub Actions.

Repositorio publico para entregar:
https://github.com/juliorijo/practica4-integracion-continua

## Ejecutar localmente

Se requiere Node.js. No es necesario instalar dependencias.

```powershell
node hola-mundo.js
```

Salida esperada: `Hola mundo`.

## Integracion continua

`.github/workflows/alerta.yml` se ejecuta en cada push a la rama `main`.
Primero ejecuta el programa y verifica su salida; despues envia una
notificacion a https://ntfy.sh/devops-itla y comprueba la respuesta del servicio.
Tambien admite ejecucion manual desde Actions > Run workflow.

Para probar un cambio:

```powershell
git add hola-mundo.js
git commit -m "Actualizar programa"
git push origin main
```

Consultar el workflow **Practica4 - Hola mundo y notificacion** en Actions
y abrir https://ntfy.sh/devops-itla para recibir los mensajes.

El canal es publico y compartido: no enviar credenciales ni datos privados.
La notificacion incluye solo el saludo, la rama y el identificador corto
del commit. No requiere secrets ni credenciales de Surge.

Esta practica es independiente del parcial de despliegue web:
https://github.com/juliorijo/parcial-surge
