-- solo inserta los datos, la tabla noticias se creara automaticamente, creo que era con php artisan migrate

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `descripcion`, `created_at`, `updated_at`) VALUES
(3, 'titulo prueba', 'yo', 'esta es una noticiaaaaaaaaaa', '2025-02-17 08:57:54', '2025-02-17 08:57:54'),
(4, 'titulo MODIFICADO', 'yo', 'esta es una noticiaaaaaaaaaa', '2025-02-18 08:12:23', '2025-02-18 08:25:27'),
(5, 'Gran victoria del equipo en el campeonato', 'Juan Pérez', 'El equipo logró una victoria histórica en el torneo nacional.', '2025-02-10 13:30:00', '2025-02-10 13:30:00'),
(6, 'Nueva incorporación al plantel', 'María López', 'Se une un nuevo jugador al equipo para reforzar la delantera.', '2025-02-11 09:15:00', '2025-02-11 09:15:00'),
(7, 'Entrenamientos intensivos para la próxima temporada', 'Carlos Gómez', 'El cuerpo técnico ha preparado un plan de entrenamiento especial.', '2025-02-12 07:00:00', '2025-02-12 07:00:00'),
(8, 'Se inaugura el nuevo gimnasio del club', 'Ana Torres', 'El club ha inaugurado un nuevo gimnasio con equipamiento moderno.', '2025-02-13 11:45:00', '2025-02-13 11:45:00'),
(9, 'Calendario de partidos actualizado', 'Luis Fernández', 'Se han confirmado las fechas de los próximos partidos de la temporada.', '2025-02-14 15:20:00', '2025-02-14 15:20:00'),
(10, 'Campaña de captación de socios', 'Sofía Ramírez', 'El club lanza una campaña para atraer nuevos socios con grandes beneficios.', '2025-02-15 08:30:00', '2025-02-15 08:30:00');
