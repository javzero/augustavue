# Errores - Fallas - Bugs - Glitches

# Augusta Moi



Hola lean buen día. 2 cosas que te quería pedir.
1) aunque carguemos como nuevo usuario la posibilidad de ponerle nombre al pedido. O sea, tenemos 10 pedidos de nuevo usuario y no sabemos cuál es de cuál cliente. 

2) posibilidad de enviar mail a los que dejan carro abierto para recordarles que dejaron pendiente una selección de prendas en la tienda.


- Estadísticas
Algo importante que necesito en las estadísticas o filtros. Poder filtrar usuarios x localidad. O sea, buscar por ej si vendo en FIRMAT santa fe y hacerlo con un filtro por localidad. Es posible?


Ah y te quiero pedir un usuario que pueda ingresar a vadmin y vea solo la parte de productos en stock y productos pausados
Que no vea pedidos, estadísticas, clientes ni nada de esa info.




# Implementar
- Usuarios no miembros solo ven: Pedidos y Clientes ()

==============================================
# Hecho
Lean puede que ahora al forzar los pedidos de COMPRANDO a CANCELADO no esté devolviendo stock?

-cuantos compraron mas de 5 veces
cuantos mas de 10
si se puede con nombre y apellido :P
- En la pantalla de los pedidos que están EN PRODUCCION
necesitaría poder tener visualizado cuales están pagos y cuáles no
Obviamente lo tengo que poder hacer manualmente una vez que pagan
Y después cuando no me deja cancelar los pedidos porque a lo mejor modifique algún ítem que tiene ese pedido que quiero cancelar y solo me deja finalizarlos. Lo cual es una cagada porque para las estadísticas estaría tomando pedidos que en realidad yo quise cancelar y no pude
Debería poder forzar la cancelación y que no vayan a finalizados
- Estadisticas
- Mejorar carga de items desde vadmin
- Al cargar productos desde vadmin .. primero cargar solo items si cantidad una vez creada la lista, agregar todas las cantidades
- Agregar vista de listado
-Te hago una consulta respecto al listado de clientes. Estamos haciendo publicidad en instagram y quisiera medir la repercusión.
¿Se puede incluir en el listado de clientes la fecha de registro? ¿Y que me permita buscar por localidad o por provincia? Y lo último si me puede permitir ordenar segun distintos criterios: alfabeticamente, orden de registro, mayorista o minirista.
Y lo otro es si se puede saber cuantas personas entran por día a la página, cuantas abren carros y no finalizan compras. Para poder sacar estadísticas de eso. Google analytics por ejemplo, pero no tengo idea, sólo sé que sirve para eso.
- Que los productos se puedan destacar y se ordenen por fecha
- Que desde vadmin se pueda hacer pedido nuevo y que ese pedido no tenga límite de prendas.
- Carro de compra desde vadmin que soporte un detalle (columna) como por ejemplo nombre del cliente al que pertenece
- Variantes talles colores
- Items tienen marcas. Filtrar por marcas. Mostrar pedidos por marca
- Registro: mail * , contraseña * , teléfono
- 1 solo tipo de precio. 1 solo tipo de customer
- Compra inicial $5000
- Se aguanta por 30 días.
Al editar una publicación: que no tome el “enter” como actualizar item, tiendo a apretarlo sin querer y se me va de la página. Que se actualice sólo tocando ese botón.
- Poder editar el nombre del artículo desde la página principal al igual que con el stock y los precios.
- Actualización de precios y stock: que haya un botón por página de actualizar cambios. Demora mucho refrescar item por item, cuando quiero hacer una actualización de todos los precios o el stock de varios artículos. Hasta ahora no lo había notado porque no hice modificaciones grandes.
- Cuando hago click sobre un artículo para ediarlo aparece una página intermedia con toda la información. Sería más fácil entrar directamente y si quiero ver la info del artículo pero no editarlo en todo caso tener un boton para eso. O un botón que sea visualizar en la tienda o ver anuncio. No encuentro necesario ver ahí esa información.
- No enter en forms
- Filtro con temporada actual
- Modulo de carga de temporadas con opcion todas
- En vista de pedido mostrar total de prendas
- Vender producto similar
Por otra parte, respecto a la decisión del menú lateral, cuando esté eso eliminaríamos el mensaje que aparece cada vez que agrego un producto al carrito porque ya me aparece de costado (adjunto foto)
- Manterner url cuando se vuelve de producto individual
- Buscar etiquetas en filtro de texto
- Checkout Sidebar fijo derecha
- Unificar mismos id
- Banner de bajo stock en prod con min
- Acceso directo a favoritos desde userbar
- Nuevos cambios subidos:
- Políticas de Exclusividad y Como comprar estilo nuevo.
- Filtros En movil
- Filtros por populares y descuentos.
- Arreglada paginacion
- Arreglado busqueda por categoría desde input text
- En tienda inicio puse un TOOL TIP con stock máximo, probar si gusta y sino poner selector.
- WhatsApp flotante
- Agregar paginacion con cookies
- Despues de paginar volver a la misma pagina
- Dividir checkout en 2
- Modificar cantidad de producto desde checkout
- Boton mostrar todos cambiar por: Volver al listado
- Agregar filtros por precio en web
- Paginacion que se haga click sobre el LI y no sobre el A
- Compra desde listado principal ?
- Agregar directamente desde listado
- Ocultar talle / color en listado
- Ocultar talle en listado en filtros de busqueda
- Artículos con 0 stock o menos que el mínimo se pausan? Salen en los listado ? No salen


# RESUELTOS

> (RESUELTO)
Cuando se hace el primero pedido y se pone continuar en el checkout sidebar rebota a tienda.

> (RESUELTO)
Cuando se elije el primer producto en la tienda no está el disparador del dropdown del carro de compras.

> (RESUELTO)
En Vadmin en la vista de un pedido en particular no cuenta bien la cantidad total de prendas.

> (RESUELTO)
Busqueda por texto no pagina con los resultados encontrados

> (RESUELTO)
No aparece foto generica en userbar

> (RESUELTO)
Filtros En movil

>(RESUELTO)
Cada cuando se recupera el stock que está en carros de compra activos ? 

>(RESUELTO)
Mensajes personalizados en login de tienda. 
Ej: Cuando se registra un mayorista le avisa que queda en suspenso

>(RESUELTO)
Cuando se borran carros en masa desde Vadmin devolver stock

>(RESUELTO)
Algunas páginas de error muestran el menu de Santa Osadía (roto)

>(RESUELTO)
Dar mensaje cuando se agrega item a carro de compra

>(RESUELTO)
ONLINE no filtra por categorías

>(RESUELTO)
Agregar producto vía ajax - No funciona - Ok

>(RESUELTO)
Cuando se quiere comprar si estar logueado tira 404

>(RESUELTO)
PDF en store que salga depende si es mayorista o minorista

>(RESUELTO)
Inventar algo para que sea más genérico cambiar valores desde inputs directamente

>(RESUELTO)
Los links arriba de redes tienen url de santa osadia

>(RESUELTO)
Tienda > register : 404

>(RESUELTO)
En AppServiceProvider se está mandando a todo el sitema, incluido a la tienda un monton de cosas
que no deberian estar ahi

>(RESUELTO)
En Vadmin precios mayoristas y min dependiendo customer

>(RESUELTO)
En store checkout no se pueden borrar items

En el CUIT me deja poner cualquier cantidad de números. Hay gente que se registra con el DNI porque no tiene cuit y los deja igual.
Sugiero que de la opcion de DNI o CUIT/CUIL y no permita poner sino la cantidad de números que tiene que ir


VADMIN
-Que me permita ordenar por orden alfabético los artículos
-En publicar similar que el color quede vacío

> Lista de productos 
- Cuando se clickea en codigo: editar
- Ir directo a edit
- Editar titulo
- Ordenar alfabeticamente

WEB
-Mover sumarización de prendas arriba en lugar de abajo. no se ve si hay muchos artículos. 
-Si estoy adentro de un producto y hago click sobre el carro no me lo abre
Botones de registro: ponerlos con fondo fucsia, la gente lo los ve, tienen que llamar más la atención
-en la vista de celular la gente no entiende los botones, aunque lleve mas espacio habria que dejarlos con letras (te adjunto dibujo de como me imagino)
-en ambas vistas: modificar leyendas
*registro modificar por: “compra por menor”
*vende bruna modificar por: “compra por mayor”

-En la vista del celular falla el carrito, a veces cuando agrego productos se despliega sólo sin que haga nada, a veces toco encima de la bolsita y no se abre.

agregar al lado de politica de exclusivdad un boton que diga condiciones de compra

https://docs.google.com/document/d/1VPVDU6BEZWkFZg1-KKRCr3Wk7uLQZFeZGJZXl7VmYUY/edit?usp=sharing


-Falta barra de scroll sobre el carrito. Si tengo muchos items no me deja bajar.

En la lista no tienen un bortón para comprar los favoritos. ¿Es muy complicado poner el agragar al carrito para que puedan comprar desde ahí? Pienso en aguien que va agregando a favoritos y que después quiere comprar varios de los que están ahí, tiene que entrar uno por uno y volver.

Seria bueno que el boton continuar también actualice totales antes de seguir porque si no alguien que se confunde no sabe que está comprando. O que actualice ahí mismo o que me mande a una pantalla intermedia donde pueda verificar los datos y continuar o volver para modificar.


- Boton registrar mayorista
LOGIN REGISTRAR MAYORISTAS (ir con checkbox tildado)

# Dev Permisos 

### Local
> sudo chown -R javzero.www-data CARPETA
 
### Requerido por Laravel
> sudo chown -R $javzero:www-data storage;

> sudo chown -R $javzero:www-data bootstrap/cache;

> sudo chmod -R 775 storage;

> sudo chmod -R 775 bootstrap/cache;
