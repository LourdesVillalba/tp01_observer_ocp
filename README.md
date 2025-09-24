# TP01 - Trabajo de Laboratorio. Patrón de diseño + Principio SOLID

* Alumno: Lourdes Villalba
* Comisión: 2.2

* **Patrón y Principio**: Observer/OCP

---
## Investigación

Mi Trabajo Integrador Final se centra en el desarrollo de un **Sistema de Gestión de Viáticos**, el cual será implementado utilizando el framework **Laravel**.

Los **patrones de diseño** que investigué y que podrían ser útiles son:
* El **Observer** se puede aplicar mediante Event Listeners de Laravel, por ejemplo, para ejecutar acciones automáticas cuando se registrar una nueva solicitud de viático (como actualizar reportes o enviar notificaciones), esto mejora la separación de responsabilidades y facilita añadir o quitar funcionalidades sin modificar el código central.
* El **Factory Method** sería útil para la generación de comprobantes en distintos formatos (PDF, Excel), esto hace que, si en el futuro se necesita un nuevo formato (por ejemplo, XML para integración con un sistema externo), solo haya que agregar una nueva clase.
* El **Singleton** aparece de forma natural en Laravel a través del Service Container, ideal para manejar la conexión a la base de datos o servicios globales.
* También, el **Strategy** sería útil para implementar distintos criterios de búsqueda y filtrado de solicitudes (por empleado, fecha o departamento) sin acoplar la lógica en un único método.
En conjunto, estos patrones aportarían flexibilidad, reducción de código repetido y mayor facilidad para mantener y escalar el sistema a futuro.

---
## Validacion del compañero
* Nombre y Apellido: Sebastian Mora
* Comentario: En su verificación del patron Observer me comentó que este se cumple, ya que se implementa un mecanismo de suscripción y notificación: los usuarios se suscriben al blog y reciben un aviso automático cuando se publica un nuevo post.
En cuanto al programa del principio OCP (Open/Closed Principle), mi compañero señaló que también está bien aplicado, porque el sistema de exportación permite agregar nuevas formas de exportar (PDF, CSV, Excel) sin necesidad de modificar el código ya existente, solamente extendiéndolo con nuevas clases.
