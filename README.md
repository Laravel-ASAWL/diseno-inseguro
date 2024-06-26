# Laravel ASAWL - 06. Diseño Inseguro

## Diseño Inseguro

El diseño inseguro en Laravel se refiere a decisiones de diseño que introducen vulnerabilidades de seguridad en una aplicación. Estas vulnerabilidades pueden ser explotadas por atacantes para comprometer la seguridad de la aplicación y sus usuarios.

El diseño inseguro puede manifestarse de diversas formas:

-	Falta de validación de entrada: No verificar adecuadamente las entradas del usuario antes de utilizarlas en la aplicación puede permitir ataques de inyección de código SQL.
-	Almacenamiento inseguro de datos: Almacenar datos sensibles, como contraseñas o información personal, en texto plano o utilizando métodos de cifrado débiles puede exponerlos a atacantes.
-	Control de acceso deficiente: No implementar mecanismos adecuados de control de acceso puede permitir a usuarios no autorizados acceder a recursos o realizar acciones que no deberían.
-	Gestión de sesiones insegura: Almacenar tokens de sesión en lugares inseguros o no invalidar sesiones después de cerrar sesión puede permitir a atacantes secuestrar sesiones y hacerse pasar por usuarios legítimos.

### Directrices de diseño inseguro en Laravel

Laravel proporciona una serie de herramientas y mecanismos para ayudar a diseñar aplicaciones seguras:

`Prevenir la inyección SQL`: tomar en cuenta todas las directrices de Inyección SQL.

`Prevenir el Cross-Site Scripting XSS`: tomar en cuenta todas las directrices de Cross-Site Scripting XSS.

`Prevenir la falsificación de peticiones en sitios cruzados CSRF`: tomar en cuenta todas las directrices de la falsificación de peticiones de sitios cruzados CSRF.

`Prevenir la exposición de datos sensibles`: tomar en cuenta todas las directrices de exposición de datos sensibles.

### Recomendaciones para prevenir el diseño inseguro en Laravel

-	Siempre seguir todas las recomendaciones para prevenir la inyección SQL.
-	Siempre seguir todas las recomendaciones para prevenir el Cross-Site Scripting XSS.
-	Siempre seguir todas las recomendaciones para prevenir la falsificación de peticiones de sitio cruzados CSRF.
-	Siempre seguir todas las recomendaciones para prevenir la exposición de datos sensibles.

### Mitigación de diseño inseguro en Laravel

La mitigación de diseño inseguro se la realiza mediante:

-	Mitigación de inyección SQL.
-	Mitigación de Cross-Site Scripting XSS.
-	Mitigación de Cross-Site Request Forgery CSRF, y.
-	Mitigación de exposición de datos sensibles.
