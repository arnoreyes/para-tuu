// Función para alternar la visibilidad del chatbot
function toggleChatbot() {
    var chatbotContainer = document.getElementById('chatbotContainer');
    chatbotContainer.style.display = chatbotContainer.style.display === 'none' ? 'block' : 'none';
  }
  
  // Función para manejar la entrada del usuario cuando se presiona 'Enter'
  function handleUserInput(event) {
    if (event.key === 'Enter') {
      sendUserMessage();
    }
  }
  
  // Función para enviar el mensaje del usuario y obtener una respuesta
  function sendUserMessage() {
    var input = document.getElementById('chatbotInput');
    var userMessage = input.value.trim();
    if (userMessage) {
      addMessageToChat('Tú', userMessage);
      input.value = '';
      getBotResponse(userMessage);
    }
  }
  
  // Función para agregar mensajes al cuerpo del chat
  function addMessageToChat(sender, message) {
    var chatbotMessages = document.getElementById('chatbotMessages');
    var messageElement = document.createElement('div');
    messageElement.className = sender === 'Tú' ? 'user-message' : 'bot-message';
    messageElement.textContent = sender + ': ' + message;
    chatbotMessages.appendChild(messageElement);
    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
  }
  
  function getBotResponse(message) {
    var response;
    message = message.toLowerCase();
  
    // Diccionario de preguntas y respuestas
    const faqResponses = {
      // Preguntas relacionadas con contacto y pagos
      "Hola,hola": "Hola, en que puedo ayudarte?.",
      "cual es su nuumero de teléfono": "Puedes llamarnos al +503 7092 1893 0 7338 3357 para más información.",
      "contacto,cantactarme,contactarnos": "Contáctanos al +503 7338 3357 o a través de nuestro formulario en línea.",
      "formas de pago": "Actualmente solo aceptamos pagos en efectivo.",
      "pagar": "El pago se realiza en efectivo después de completar el servicio.",
      // Información general y citas
      "donde estan ubicados": "Estamos ubicados En San migue,19 avenida sur,colonia ciudad.",
      "como agendar cita": "Para agendar una cita, llámanos o usa el formulario en nuestro sitio web.",
      "como reprogramar cita": "Para reprogramar una cita, por favor contáctanos con al menos 24 horas de anticipación.",
      "como es el proceso de cancelación de servicio": "Puedes cancelar tu servicio sin costo llamando con 24 horas de anticipación.",
      // Servicios específicos
      "servicio de limpieza": "Ofrecemos limpieza general, desinfección y limpieza profunda de espacios.",
      "servicio de desinfección": "Nuestro servicio de desinfección utiliza productos certificados y seguros.",
      "que productos utilizan": "Utilizamos productos eco-amigables y de alta calidad para todos nuestros servicios.",
      // Preguntas adicionales
      "urgente": "Para servicios urgentes, contáctanos directamente para ver nuestra disponibilidad.",
      "seguro": "Nuestro equipo está completamente asegurado y capacitado.",
      " que equipamiento utilizan": "Traemos todo el equipo necesario para realizar la limpieza.",
      "personal": "Nuestro personal es experimentado y de confianza.",
      "mascotas": "Somos amigables con las mascotas y cuidamos de no alterarlas durante nuestro servicio.",
      "duración": "La duración depende del tamaño del espacio y del tipo de servicio.",
      "cubrebocas": "Nuestro personal siempre utiliza cubrebocas y equipo de protección.",
      "agenda": "Nuestra agenda se llena rápido, te recomendamos agendar con anticipación.",
      "fin de semana": "Trabajamos los sábados, pero con agenda limitada.",
      "garantía de servicio": "Si no quedas satisfecho, trabajaremos hasta cumplir tus expectativas.",
      // Preguntas sobre la compañía y el negocio
      "años de experiencia": "Tenemos más de 10 años de experiencia en servicios de limpieza.",
      "valor añadido": "Ofrecemos servicios personalizados y atención al detalle.",
      "recomendaciones": "Muchos de nuestros clientes nos llegan por recomendaciones.",
      "contratación": "Si estás interesado en trabajar con nosotros, envía tu CV a nuestro correo.",
      "comunidad": "Participamos en eventos comunitarios y programas de sostenibilidad.",
      "ambiente": "Nos esforzamos por proteger el ambiente en todos nuestros procesos.",
      // Respuestas a preguntas sobre logística
      "tiempo de anticipación": "Idealmente, reserva tu servicio con una semana de anticipación.",
      "horario más ocupado": "Las mañanas suelen ser nuestro horario más ocupado.",
      "plan de limpieza": "Podemos diseñar un plan de limpieza regular para ti.",
      "limpieza después de la construcción": "Sí, ofrecemos limpieza post-construcción detallada.",
      "limpieza de ventanas": "Incluimos limpieza de ventanas accesibles desde el interior.",
      "limpieza de alfombras": "Realizamos limpieza de alfombras, pero por favor avísanos de antemano.",
      // Respuestas a situaciones específicas
      "manchas difíciles": "Tenemos tratamientos especiales para manchas difíciles.",
      "alergias": "Informa de cualquier alergia para que podamos tomar precauciones.",
      "productos propios": "Si prefieres, podemos usar tus productos de limpieza."
    };
  
    // Buscar una respuesta en el diccionario
    for (let key in faqResponses) {
      if (message.includes(key)) {
        response = faqResponses[key];
        break;
      }
    }
  
    // Si la pregunta incluye números, proporciona información de contacto o pagos
    if (!response && /\d/.test(message)) {
      response = "Para preguntas sobre precios o citas, por favor contáctanos al +123456789.";
    }
  
    // Respuesta por defecto si no se encuentra una coincidencia
    response = response || "No estoy seguro de poder responder a eso correctamente. ¿Puedes proporcionar más detalles o contactar con nuestro servicio de atención al cliente?";
  
    setTimeout(() => {
      addMessageToChat('Bot', response);
    }, 1000);
  }
  
  
    setTimeout(() => {
      addMessageToChat('Bot', response);
    }, 1000);
  
  // Función para agregar mensajes al cuerpo del chat
function addMessageToChat(sender, message) {
  var chatbotMessages = document.getElementById('chatbotMessages');
  var messageElement = document.createElement('div');
  messageElement.className = sender === 'Tú' ? 'user-message' : 'bot-message';
  messageElement.innerText = message; // Usar innerText para texto sin formato.
  chatbotMessages.appendChild(messageElement); // Agregar el mensaje al final del chat.
  chatbotMessages.scrollTop = chatbotMessages.scrollHeight; // Desplazar el chat hacia el nuevo mensaje.
}
function addMessageToChat(sender, message) {
  var chatbotMessages = document.getElementById('chatbotMessages');
  var messageElement = document.createElement('div');

  if (sender === 'Tú') {
    messageElement.classList.add('user-message'); // Asegúrate de que esta clase estiliza para alinear a la derecha
  } else {
    messageElement.classList.add('bot-message'); // Esta clase debería alinear los mensajes a la izquierda
  }

  messageElement.textContent = message;
  chatbotMessages.appendChild(messageElement);
  chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
}
// Función para agregar mensajes al cuerpo del chat
function addMessageToChat(sender, message) {
  var chatbotMessages = document.getElementById('chatbotMessages');
  var messageElement = document.createElement('div');
  messageElement.className = sender === 'Tú' ? 'user-message' : 'bot-message';
  messageElement.textContent = message;

  // Agrega el mensaje al contenedor
  chatbotMessages.appendChild(messageElement);

  // Se asegura de que el nuevo mensaje esté visible
  chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
}
let chatOpened = false; // Estado para controlar la apertura del chat

// Función para alternar la visibilidad del chatbot y guardar el estado
function toggleChatbot() {
  var chatbotContainer = document.getElementById('chatbotContainer');
  if (chatbotContainer.style.display === 'none') {
    chatbotContainer.style.display = 'block';
    chatOpened = true; // El usuario abrió el chat
  } else {
    chatbotContainer.style.display = 'none';
    chatOpened = false; // El usuario cerró el chat
  }
}

// Función para manejar el evento de scroll
function handleScroll() {
  var chatbotButton = document.getElementById('chatbotButton');
  if (!chatOpened) { // Solo muestra el botón si el chat no ha sido abierto
    chatbotButton.style.display = 'block';
  } else {
    // Si el chat está abierto, asegúrate de que no se muestre el botón
    chatbotButton.style.display = 'none';
  }
}

// Agrega el evento de desplazamiento a la ventana
window.addEventListener('scroll', handleScroll);

// Asegúrate de que el botón esté oculto al cargar la página
window.addEventListener('load', () => {
  document.getElementById('chatbotButton').style.display = 'none';
});
function toggleChatbot() {
  var chatbotContainer = document.getElementById('chatbotContainer');
  var chatbotButton = document.getElementById('chatbotButton');
  if (chatbotContainer.style.display === 'none') {
    chatbotContainer.style.display = 'block';
    chatbotContainer.classList.add('open');
    chatOpened = true;
  } else {
    chatbotContainer.style.display = 'none';
    chatbotContainer.classList.remove('open');
    chatOpened = false;
  }

  // Ajustar la posición del botón 'VPclean'
  if (chatOpened) {
    chatbotButton.style.bottom = 'calc(100% + 20px)'; // Mueve el botón hacia arriba cuando el chat está abierto
  } else {
    chatbotButton.style.bottom = '20px'; // Vuelve a colocar el botón en su posición original cuando el chat está cerrado
  }
}


let hasUserClosedChat = false; // Estado para controlar si el usuario ha cerrado el chat
let hasGreetedOnScroll = false; // Estado para controlar si el saludo en el desplazamiento ya se ha mostrado

// Función para manejar la apertura del chatbot
function handleChatbotOpen() {
  if (!hasUserClosedChat && !hasGreetedOnScroll) {
    var chatbotContainer = document.getElementById('chatbotContainer');
    chatbotContainer.style.display = 'block';
    addMessageToChat('VPclean', '¡Hola soy VPclean tu asistente! ¿Necesitas ayuda? 😊');
    hasGreetedOnScroll = true; // Asegura que el mensaje solo se muestre una vez durante el desplazamiento
  }
}

// Función para alternar la visibilidad del chatbot y establecer el estado de cierre
function toggleChatbot() {
  var chatbotContainer = document.getElementById('chatbotContainer');
  if (chatbotContainer.style.display === 'block') {
    chatbotContainer.style.display = 'none';
    hasUserClosedChat = true; // El usuario cierra el chat, impide que se abra automáticamente
  } else {
    chatbotContainer.style.display = 'block';
  }
}

// Evento de desplazamiento que verifica si se necesita abrir el chatbot
window.addEventListener('scroll', function() {
  // Retrasa la apertura del chatbot para dar tiempo al usuario a leer la página
  setTimeout(handleChatbotOpen, 1000);
});

// Asegúrate de llamar a toggleChatbot() cuando el usuario intente cerrar el chatbot.
