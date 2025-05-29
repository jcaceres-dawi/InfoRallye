# InfoRallye

## Índice

## Índice

1. [Resumen](#1-resumen)
2. [Introducción](#2-introducción)
    - [Contexto y Justificación](#21-contexto-y-justificación)
        - [Situación actual, problemática o necesidad](#211-situación-actual-problemática-o-necesidad)
    - [Objetivos](#22-objetivos)
        - [Objetivo general](#221-objetivo-general)
        - [Objetivos específicos](#222-objetivos-específicos)
3. [Análisis](#3-análisis)
    - [Requisitos](#31-requisitos)
        - [Requisitos funcionales](#311-requisitos-funcionales)
        - [Requisitos no funcionales](#312-requisitos-no-funcionales)
    - [Alcance](#32-alcance)
        - [Incluye](#321-incluye)
        - [Excluye](#322-excluye)
        - [Restricciones](#323-restricciones)
4. [Planificación](#4-planificación)
    - [Fases del proyecto](#41-fases-del-proyecto)
        - [Análisis y Diseño](#411-análisis-y-diseño)
        - [Desarrollo](#412-desarrollo)
        - [Pruebas y Ajustes](#413-pruebas-y-ajustes)
    - [Cuantificación Económica Prevista](#42-cuantificación-económica-prevista)
    - [Riesgos](#43-riesgos)
5. [Metodología](#5-metodología)
    - [Materiales](#51-materiales)
    - [Software y librerías](#52-software-y-librerías)
    - [Base de datos](#53-base-de-datos)
    - [Datos externos](#54-datos-externos)
    - [Despliegue](#55-despliegue)
6. [Diseño](#6-diseño)
    - [Arquitectura](#61-arquitectura)
    - [Modelado de la base de datos](#62-modelado-de-la-base-de-datos)
7. [Pruebas y Validación](#7-pruebas-y-validación)
    - [Pruebas funcionales](#71-pruebas-funcionales)
    - [Pruebas no funcionales](#72-pruebas-no-funcionales)
8. [Resultados Esperados](#8-resultados-esperados)
    - [Producto Final](#81-producto-final)
    - [Impacto Previo](#82-impacto-previo)
9. [Conclusiones](#9-conclusiones)
10. [Bibliografía](#10-bibliografía)

---

## 1. Resumen

InfoRallye es una plataforma web dedicada a centralizar toda la información relevante sobre los rallyes en España. Diseñada por y para entusiastas del automovilismo, proporciona acceso rápido y claro a datos clave sobre competiciones nacionales. La plataforma incluye un calendario de rallyes, información detallada de cada evento (fechas, ubicaciones, recorridos, categorías), clasificaciones, resultados y más. Todo se presenta de manera visual e intuitiva, lo que permite que los usuarios se mantengan informados y disfruten de la experiencia sin necesidad de registrarse ni participar activamente.

## 2. Introducción

### 2.1 Contexto y Justificación

#### 2.1.1 Situación actual, problemática o necesidad

El rallye es una disciplina automovilística con una amplia base de seguidores en España y en todo el mundo. Sin embargo, la información sobre eventos, pilotos, equipos y estadísticas suele estar dispersa en múltiples fuentes. Además de la página de la Federación Española de Automovilismo, que abarca diversas categorías, cada rallye cuenta con su propio sitio web, lo que dificulta un acceso unificado a los datos. También resulta complicado encontrar en un solo lugar detalles sobre recorridos, ubicaciones, categorías o estadísticas de rendimiento. Esta fragmentación afecta tanto a los aficionados que desean mantenerse informados como a quienes se inician en este deporte. Por ello, se hace evidente la necesidad de una plataforma que recopile y presente toda esta información de manera clara y accesible, convirtiéndose en un punto de referencia para los entusiastas del rallye.

### 2.2 Objetivos

#### 2.2.1 Objetivo general

Desarrollar una página web intuitiva y fácil de usar que centralice y presente información relevante sobre los rallyes, pilotos, equipos y eventos en España.

#### 2.2.2 Objetivos específicos

-   Diseñar una base de datos que almacene información actualizada sobre rallyes, clasificaciones, pilotos, equipos y estadísticas.
-   Implementar una interfaz que permita a los usuarios filtrar y buscar información de manera eficiente según eventos, fechas y categorías.
-   Integrar APIs como OpenStreetMap y Leaflet para mostrar las ubicaciones de los rallyes mediante mapas interactivos de los recorridos.

## 3. Análisis

### 3.1 Requisitos

#### 3.1.1 Requisitos funcionales

-   Gestión de pilotos y equipos: Visualización de los pilotos y equipos participantes en cada rallye.
-   Calendario de competiciones: Listado de eventos con opción de filtrado por categoría.
-   Mapas interactivos: Integración con OpenStreetMap y Leaflet para mostrar recorridos y ubicaciones clave de los rallyes.
-   Clasificaciones: Consulta de datos de rallyes pasados con posiciones y tiempos.
-   Interfaz visual e intuitiva: Presentación clara y accesible de la información, sin requerir registro previo.
-   Gestión de los datos por parte del administrador (CRUD): El sistema permite al
    administrador crear, leer, actualizar y eliminar información relacionada con los
    pilotos, equipos, rallyes, clasificaciones y tramos.

#### 3.1.2 Requisitos no funcionales

-   Accesibilidad multiplataforma: Compatibilidad con navegadores modernos como
    Chrome, Firefox y Edge.
-   Tiempo de respuesta óptimo: Carga rápida de páginas y consultas en menos de
    0.5 segundos.
-   Compatibilidad con dispositivos móviles: Diseño responsive para garantizar una
    correcta visualización en smartphones y tablets.

### 3.2 Alcance

#### 3.2.1 Incluye

-   Información detallada sobre los rallyes: La página web proporcionará información
    relevante sobre los rallyes, como el nombre del evento, la ubicación, la fecha y la
    descripción.
-   Mapas interactivos: Se incluirán mapas para mostrar los recorridos de los rallyes y
    permitir a los usuarios visualizar las rutas y los puntos clave del evento.
-   Filtrado y búsqueda: Los usuarios podrán filtrar eventos en función de diferentes
    criterios.

#### 3.2.2 Excluye

-   Estadísticas en tiempo real: No se ofrecerá información en tiempo real, como
    tiempos de etapas o resultados durante el transcurso del evento. Solo se mostrará
    información previa y posterior al rallye.
-   Funciones de comunidad: No se incorporarán foros, chats, comentarios ni otras
    funcionalidades sociales. El enfoque estará exclusivamente en la presentación de
    información.
-   Interacciones de participación activa: No se ofrecerán opciones para que los
    usuarios se inscriban o participen directamente en los rallyes o competiciones. Solo
    se brindará información sobre los eventos.

#### 3.2.3 Restricciones

-   Idioma único: Toda la información estará disponible únicamente en español.
-   Cobertura nacional: El proyecto se centra exclusivamente en rallyes celebrados en
    España; no se incluirán competiciones internacionales.
-   Acceso solo como visitante: No se implementarán funciones de autenticación o
    perfiles de usuario; toda la información será accesible sin registro.
-   Sin actualización automática: Los datos no se actualizan en tiempo real ni de
    forma automatizada; cualquier cambio o ampliación deberá hacerse manualmente.
-   Dependencia de servicios externos: El funcionamiento de los mapas interactivos
    depende de servicios de terceros (OpenStreetMap, Leaflet), cuya disponibilidad
    puede afectar la experiencia del usuario.

## 4. Planificación

### 4.1 Fases del proyecto

#### 4.1.1 Análisis y Diseño

-   Definición de la estructura de la base de datos.
-   Diseño de los prototipos de la interfaz de usuario.
-   Adaptación del diseño para asegurar compatibilidad con distintos dispositivos
    (diseño responsive).

#### 4.1.2 Desarrollo

-   Configuración del backend y creación de la base de datos.
-   Implementación del diseño mediante código (frontend).
-   Integración de APIs externas (por ejemplo, OpenStreetMap y Leaflet).

#### 4.1.3 Pruebas y Ajustes

-   Ejecución de pruebas funcionales y de usabilidad.
-   Optimización del rendimiento y corrección de errores detectados.
-   Verificación de la compatibilidad en distintos navegadores y dispositivos.

### 4.2 Cuantificación Económica Prevista

Todas las herramientas son gratuitas o con licencias estudiantiles:

-   OpenStreetMap, Leaflet
-   GitHub Plan Pro  
    **Costo total estimado: 0 €**

### 4.3 Riesgos

El principal riesgo en el desarrollo de este proyecto es la gestión del tiempo. Dado que la
creación de una página web con múltiples funcionalidades puede ser un proceso largo y
complejo, es esencial organizar el trabajo de manera eficiente y priorizar las tareas más
importantes para garantizar su funcionamiento.

## 5. Metodología

Para la realización del proyecto, se ha optado por utilizar una metodología ágil basada en
Kanban. Esta metodología permite gestionar el trabajo de manera visual y flexible,
controlando el flujo de tareas y ajustando prioridades según las necesidades y avances del
proyecto.

### 5.1 Materiales

-   Sistema operativo compatible con Docker

### 5.2 Software y librerías

-   VS Code
-   Laravel + Laravel Sail
-   Docker
-   Composer
-   Node.js + npm
-   Git y GitHub

### 5.3 Base de datos

-   MySQL

### 5.4 Datos externos

-   API de OpenStreetMap

### 5.5 Despliegue

Para el despliegue se ha utilizado Laravel Sail, una herramienta oficial de Laravel que
proporciona un entorno de desarrollo ligero basado en contenedores Docker. Esto ha
permitido configurar rápidamente todos los servicios necesarios de forma consistente en
distintas máquinas, asegurando un entorno controlado y homogéneo durante todo el
proceso de desarrollo. Estos servicios han sido:

-   Servidor web
-   Base de datos
-   Mailpit

Mailpit se utilizó inicialmente para probar el funcionamiento del envío de correos
electrónicos de la aplicación de manera local, permitiendo interceptar y visualizar fácilmente
los correos generados durante el desarrollo sin necesidad de enviarlos a destinatarios
reales.
Una vez comprobado el correcto funcionamiento, se configuró la aplicación para enviar los
correos electrónicos a través de Gmail, asegurando así un envío real y fiable en el entorno
de producción.

## 6. Diseño

### 6.1 Arquitectura

Para el desarrollo de InfoRallye, se utilizó una arquitectura monolítica basada en el patrón
Modelo-Vista-Controlador (MVC).
Este enfoque ofrece las siguientes ventajas:

-   Organización clara del código, separando la lógica del negocio (Modelo), la
    presentación de la información (Vista) y la gestión de las solicitudes del usuario
    (Controlador).
-   Facilidad de mantenimiento y escalabilidad, ya que permite agregar nuevas
    funcionalidades sin afectar otras partes del sistema.
-   Eficiencia en el desarrollo, gracias a la estructura predefinida de Laravel y su
    compatibilidad con bases de datos, rutas y plantillas Blade.

Así se garantiza que la aplicación sea modular y adaptable, permitiendo futuras mejoras sin
comprometer el rendimiento o la estabilidad del sistema.

### 6.2 Modelado de la base de datos

Entidades principales: Categorías, Equipos, Pilotos, Rallyes, Tramos, Resultados, Rankings, Mensajes.

-   Categorías: Representan los distintos tipos de competiciones en las que participan
    los equipos y competidores.
-   Equipos: Agrupan a los pilotos y copilotos que compiten en los distintos rallyes.
-   Pilotos y copilotos: Se almacenan de manera independiente, con una relación con
    sus respectivos equipos.
-   Rallyes: Contienen información sobre cada competición.
-   Tramos: Contienen información sobre cada tramo de cada competición.
-   Resultados Tramo: Contienen información sobre los resultados de cada tramo.
-   Rankings: Contienen información sobre los resultados de cada competición.
-   Mensajes: Contienen información sobre los mensajes que han enviado los usuarios
    a través del formulario de contacto.

## 7. Pruebas y Validación

### 7.1 Pruebas funcionales

| Nº  | Funcionalidad                                       | Resultado Esperado                                                                                 | Resultado Obtenido                                                                        | ¿Se cumple? |
| --- | --------------------------------------------------- | -------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------- |
| 1   | Gestión de pilotos y equipos                        | El usuario puede visualizar los pilotos y equipos participantes.                                   | La información de pilotos y equipos se muestra correctamente.                             | Sí          |
| 2   | Calendario de competiciones                         | El usuario puede consultar un listado de rallyes y filtrarlos por categoría.                       | El calendario se presenta con opción de filtrado funcional según la categoría del rallye. | Sí          |
| 3   | Mapas interactivos                                  | Se integran mapas con recorridos y ubicaciones clave mediante OpenStreetMap y Leaflet.             | Los mapas muestran correctamente los recorridos y puntos clave de los rallyes.            | Sí          |
| 4   | Clasificaciones                                     | El usuario puede consultar los resultados de rallyes con posiciones y tiempos.                     | Las clasificaciones pasadas se presentan con precisión y sin errores.                     | Sí          |
| 5   | Interfaz visual e intuitiva                         | La información se presenta de forma clara y accesible, sin necesidad de registro.                  | La interfaz es comprensible, visualmente ordenada y de acceso libre.                      | Sí          |
| 6   | Gestión de datos por parte del administrador (CRUD) | El administrador puede crear, leer, actualizar y eliminar datos de pilotos, equipos, rallyes, etc. | Todas las funciones CRUD se ejecutan correctamente desde el panel admin.                  | Sí          |

### 7.2 Pruebas no funcionales

-   **Accesibilidad multiplataforma: Compatibilidad con navegadores modernos como Chrome, Firefox y Edge.**

    -   Se ha probado manualmente el funcionamiento de la aplicación en los navegadores más utilizados (Chrome, Firefox y Edge). La visualización y la navegación son correctas en todos ellos, sin errores de diseño ni funcionalidad.

-   **Tiempo de respuesta óptimo: Carga rápida de páginas y consultas en menos de 0.5 segundos.**

    -   Se han medido los tiempos de respuesta de las principales acciones (como navegación entre páginas o consulta de datos) utilizando herramientas como Chrome DevTools. Todos los tiempos registrados han sido inferiores a 0.5 segundos, cumpliendo con el objetivo de rendimiento.

-   **Compatibilidad con dispositivos móviles: Diseño responsive para garantizar una correcta visualización en smartphones y tablets.**
    -   Se ha comprobado manualmente la visualización de la aplicación en diferentes dispositivos móviles (smartphones y tablets). El diseño se adapta correctamente a distintos tamaños de pantalla, manteniendo la funcionalidad y la claridad de la información.

## 8. Resultados Esperados

### 8.1 Producto Final

El objetivo principal es proporcionar una herramienta accesible, fácil de usar y visualmente
atractiva que centralice toda la información relevante en un solo lugar, sin necesidad de que
los usuarios busquen en diferentes páginas web.

### 8.2 Impacto previo

Con esta página web, el proyecto contribuye a mejorar la accesibilidad de la información en
el mundo del rallye y proporciona una herramienta útil tanto para los aficionados como para
los nuevos interesados en este deporte.

## 9. Conclusiones

El desarrollo de este proyecto ha sido una experiencia enriquecedora tanto a nivel técnico
como personal. Este proyecto ha permitido consolidar conocimientos fundamentales en
áreas como el desarrollo web con Laravel, el uso de bases de datos relacionales, la
integración de servicios externos como OpenStreetMap y Leaflet, y la gestión del flujo de
trabajo mediante metodologías ágiles. A nivel organizativo, ha supuesto un reto en la
planificación de tareas, priorización de objetivos y resolución de imprevistos.

Desde su planteamiento inicial, el objetivo ha sido crear una plataforma centralizada que
aglutinara toda la información relevante sobre los rallyes en España, con una interfaz clara,
accesible y sin necesidad de registro. Tras el proceso de análisis, diseño, desarrollo,
pruebas y validación, se puede afirmar que los objetivos funcionales se han cumplido. La
aplicación permite visualizar calendarios, clasificaciones, información detallada sobre
pilotos, equipos y tramos, e incluso exportar resultados en formato PDF. Además, se ha
habilitado una zona de administración protegida para el mantenimiento de los datos.

Durante el proceso de implementación surgieron varios desafíos técnicos, como la
configuración del entorno Docker con Laravel Sail, la correcta implementación de mapas
interactivos o la validación eficiente de datos en los formularios del panel administrativo.
También fue necesario reorganizar parcialmente el cronograma previsto para poder atender
correctamente las fases de pruebas y ajustes, especialmente en lo relativo al rendimiento y
compatibilidad multiplataforma.

Entre las limitaciones actuales del proyecto se encuentran la ausencia de datos en tiempo
real, la falta de funcionalidades sociales (como comentarios o registro de usuarios) y la
dependencia de servicios externos para la visualización de mapas. Además, el acceso a la
plataforma está restringido al entorno local de desarrollo mediante Docker, lo que impide
que otros usuarios puedan utilizarla por ahora.

En resumen, el proyecto ha alcanzado sus objetivos principales y ha servido como base
sólida para aprender a planificar, desarrollar y validar una aplicación web completa. Supone
una aportación útil dentro del ámbito informativo del automovilismo, y queda abierta la
posibilidad de desplegarla próximamente en un servidor online para que esté disponible
públicamente y pueda ser utilizada por otros entusiastas del rallye.

## 10. Bibliografía

1. [Laravel](https://laravel.com/docs)
2. [OpenStreetMap](https://www.openstreetmap.org)
3. [OSM Wiki](https://wiki.openstreetmap.org/wiki/ES:Usando_OpenStreetMap)
4. [Leaflet](https://leafletjs.com/)
5. [Docker](https://docs.docker.com/)
