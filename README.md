# 📚 LaCodetecaMDS

## Descripción  
Codeteca es una plataforma diseñada para brindar cursos, eventos y recursos educativos sobre programación. Esta web permite a los usuarios acceder a cursos, consultar libros, participar en una comunidad y personalizar su experiencia de uso.

## 🚀 Tecnologías Utilizadas  
- **Frontend:** HTML, CSS, JavaScript.  
- **Base de Datos:** MySQL.  
- **Plataformas:** GitHub.  

## 📂 Estructura del Proyecto 
El repositorio sigue la siguiente organización de archivos y carpetas:  

```plaintext
📦 codeteca  
├── 📂 frontend        # Archivos del cliente (HTML, CSS, JS, React/Vue)  
│   ├── 📂 assets      # Imágenes, íconos y otros recursos estáticos  
│   ├── 📂 components  # Componentes reutilizables de UI  
│   ├── 📂 pages       # Páginas principales del sitio  
│   ├── index.html     # Página principal  
│   └── main.js        # Archivo principal de JavaScript  
│  
├── 📂 backend         # Código del servidor (Node.js, Django, etc.)  
│   ├── 📂 models      # Definición de modelos de base de datos  
│   ├── 📂 routes      # Definición de rutas y controladores  
│   ├── 📂 controllers # Lógica de negocio  
│   ├── server.js      # Archivo principal del servidor  
│   └── config.js      # Configuración de la base de datos y variables de entorno  
│  
├── 📂 database        # Scripts SQL o configuraciones de la base de datos  
├── 📂 docs            # Documentación del proyecto  
├── 📂 tests           # Pruebas unitarias y de integración  
├── .gitignore         # Archivos y carpetas a ignorar en Git  
├── package.json       # Dependencias y configuración de Node.js  
├── README.md          # Documentación principal del repositorio  
└── LICENSE            # Licencia del proyecto  
```

## 📝 Registro de Cambios
| Versión | Fecha | Descripción |
|-------------|-------------|-------------|
| v1.0.0 | 1 | Describir primera iteración |
| v2.0.0 | 2 | Describir segunda iteración |
| v3.0.0 | 3 | Describir tercera iteración |
| v4.0.0 | 4 | Describir cuarta iteración |
| v5.0.0 | 5 | Describir quinta iteración |
| v6.0.0 | 6 | Describir sexta iteración |
| v7.0.0 | 7 | Describir septima iteración |
| v8.0.0 | 8 | Describir octava iteración |

## 🚧 Errores Conocidos
### Mantenimientos Correctivos
  - Capacidad de inscribirse a cursos, aunque no esté en sesión en la página.
  - Duplicación de usuarios.

  ### Mantenimientos Perfectivos
  - Los apartados de inicio de sesión, modificar perfil, registro y subir foto de perfil, no coinciden con el estilo de la página principal.
  - Implementación de una sesión de administrador para la página.

  ### Mantenimientos Adaptativos
  - Soporte para todos los navegadores, el sistema no se ejecuta o no es funcional en todos los navegadores, por ejemplo en safari la página no funciona.
  - Soporte para personas con discapacidad, cómo nuevo requerimiento se implementara una nueva función para que la página web sea más accesible para personas con discapacidades. Es función permitirá que se pueda navegar en la página solo utilizando el teclado.

  ### Mantenimientos Preventivos
  - Falta de protección en registros de usuario, en el apartado de registro de usuario no está protegido/hecho para preevenir ante posibles inyecciones SQL.
  - Nula verificación agregado de imágen, falta de una verificación al momento de subir imagenes (Foto de perfil de usuario) para comprobar si se está subiendo el tipo de archivo correcto.

## 📜 Licencia
Codeteca, propiedad de Gildardo's Development, se encuentra bajo la gestión y mantenimiento de Piltovers Solutions. El acceso, uso y distribución de este repositorio están sujetos a las condiciones establecidas por las partes involucradas, de acuerdo con las leyes aplicables.

Se concede a los usuarios una licencia limitada, no exclusiva e intransferible para utilizar, modificar y distribuir el código fuente de Codeteca únicamente para fines no comerciales, con la condición de que se mantengan intactos todos los avisos de derechos de autor y los disclaimers presentes en el código y documentación relacionados con este repositorio.

## 📩 Contacto
Para consultas generales sobre **Codeteca**, contacte a **Gildardo's Development**:

- Correo electrónico: codetecasoporte@gildardos.com
- Teléfono: +52 (923) 121-8381
- Página web: [www.gildardosdev.com](https://www.gildardosdev.com)

Para consultas relacionadas con el mantenimiento de la plataforma, contacte a **Piltovers Solutions**:

- Correo electrónico: CodetecaMantenimientos@outlook.com
- Teléfono: +52 (999) 101-4169
- Página web: [www.piltovers.com](https://universe.leagueoflegends.com/es_MX/region/piltover/)
